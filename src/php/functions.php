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
