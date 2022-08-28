<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $globalConfig = new Typecho_Widget_Helper_Form_Element_Textarea('globalConfig', NULL, NULL, _t('全局配置'));
    $form->addInput($globalConfig);


    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
        array('ShowRecentPosts' => _t('显示最新文章'),
            'ShowRecentComments' => _t('显示最近回复'),
            'ShowCategory' => _t('显示分类'),
            'ShowArchive' => _t('显示归档'),
            'ShowOther' => _t('显示其它杂项')),
        array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));

    $form->addInput($sidebarBlock->multiMode());
}


//阅读访问量
function getPostView($archive) {
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
    }
    echo $row['views'];
}

// 获取阅读量最多的文章
function getPostViewRank($limit = 10) {
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    $posts = $db->fetchAll($db->select()->from('table.contents')
        ->where('type = ? AND status = ? AND password is NULL', 'post', 'publish')
        ->order('views', Typecho_Db::SORT_DESC)
        ->limit($limit)
    );

    if ($posts) {
        foreach ($posts as $post) {
            $result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($post);
            $postTitle = htmlspecialchars($result['title']);
            $permalink = $result['permalink'];
            $postViews = $result['views'];
            echo "<li><a href='$permalink' title='$postTitle'>$postTitle($postViews)</a></li>";
        }
    }
}

// 获取文章阅读排行
function getPostCommentRank($limit = 10) {
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    $posts = $db->fetchAll($db->select()->from('table.contents')
        ->where('type = ? AND status = ? AND password is NULL', 'post', 'publish')
        ->order('commentsNum', Typecho_Db::SORT_DESC)
        ->limit($limit)
    );

    if ($posts) {
        foreach ($posts as $post) {
            $result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($post);
            $postTitle = htmlspecialchars($result['title']);
            $permalink = $result['permalink'];
            $postCommentsNum = $result['commentsNum'];
            echo "<li><a href='$permalink' title='$postTitle'>$postTitle($postCommentsNum)</a></li>";
        }
    }
}

// 留言@
function getPermalinkFromCoid($coid) {
    $db = Typecho_Db::get();
    $row = $db->fetchRow($db->select('author')->from('table.comments')->where('coid = ? AND status = ?', $coid, 'approved'));
    if (empty($row)) return '';
    return '<a href="#comment-'.$coid.'">@'.$row['author'].'</a>';
}

// 点赞数量
function agreeNum($cid, &$record = NULL)
{
    $db = Typecho_Db::get();
    $callback = array(
        'agree' => 0,
        'recording' => false
    );

    //  判断点赞数量字段是否存在
    if (array_key_exists('agree', $data = $db->fetchRow($db->select()->from('table.contents')->where('cid = ?', $cid)))) {
        //  查询出点赞数量
        $callback['agree'] = $data['agree'];
    } else {
        //  在文章表中创建一个字段用来存储点赞数量
        $db->query('ALTER TABLE `' . $db->getPrefix() . 'contents` ADD `agree` INT(10) NOT NULL DEFAULT 0;');
    }

    //  获取记录点赞的 Cookie
    //  判断记录点赞的 Cookie 是否存在
    if (empty($recording = Typecho_Cookie::get('__typecho_agree_record'))) {
        //  如果不存在就写入 Cookie
        Typecho_Cookie::set('__typecho_agree_record', '[]');
    } else {
        $callback['recording'] = is_array($record = json_decode($recording)) && in_array($cid, $record);
    }

    //  返回
    return $callback;
}

// 点赞
function agree($cid)
{
    $db = Typecho_Db::get();
    $callback = agreeNum($cid, $record);

    //  获取点赞记录的 Cookie
    //  判断 Cookie 是否存在
    if (empty($record)) {
        //  如果 cookie 不存在就创建 cookie
        Typecho_Cookie::set('__typecho_agree_record', "[$cid]");
    } else {
        //  判断文章是否点赞过
        if ($callback['recording']) {
            //  如果当前文章的 cid 在 cookie 中就返回文章的赞数，不再往下执行
            return $callback['agree'];
        }
        //  添加点赞文章的 cid
        array_push($record, $cid);
        //  保存 Cookie
        Typecho_Cookie::set('__typecho_agree_record', json_encode($record));
    }

    //  更新点赞字段，让点赞字段 +1
    $db->query('UPDATE `' . $db->getPrefix() . 'contents` SET `agree` = `agree` + 1 WHERE `cid` = ' . $cid . ';');

    //  返回点赞数量
    return ++$callback['agree'];
}
