<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


// 主题配置
function themeConfig($form) {
    echo '<style>
            #typecho-option-item-latestPosts-2, #typecho-option-item-myTags-3, 
            #typecho-option-item-postsClassify-4, #typecho-option-item-postRank-5, 
            #typecho-option-item-diggRank-6, #typecho-option-item-latestComment-7, 
            #typecho-option-item-commentsRank-8, #typecho-option-item-postsArchive-9 {
                position: relative;
                float: right;
           }
          </style>';

    $jqueryConfig = new Typecho_Widget_Helper_Form_Element_Text('jqueryConfig', NULL, '//lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/jquery/3.6.0/jquery.min.js', _t('JQuery CDN'));
    $form->addInput($jqueryConfig);

    $globalConfig = new Typecho_Widget_Helper_Form_Element_Textarea('globalConfig', NULL, '<script src="//cdn.jsdelivr.net/gh/wangyang0210/EasyBe@v2.1.7/easybe/simple-memory.js" defer></script>', _t('全局配置'));
    $form->addInput($globalConfig);

    $latestPosts = new Typecho_Widget_Helper_Form_Element_Text('latestPosts', NULL, '10', _t('最新随笔'), _t('最新随笔展示数量'));
    $latestPosts->input->setAttribute('class', 'w-60');
    $form->addInput($latestPosts->addRule('isInteger', _t('请输入纯数字')));

    $myTags = new Typecho_Widget_Helper_Form_Element_Text('myTags', NULL, '10', _t('我的标签'), _t('我的标签展示数量'));
    $myTags->input->setAttribute('class', 'w-60');
    $form->addInput($myTags->addRule('isInteger', _t('请输入纯数字')));

    $postsClassify = new Typecho_Widget_Helper_Form_Element_Text('postsClassify', NULL, '10', _t('随笔分类'), _t('随笔分类展示数量'));
    $postsClassify->input->setAttribute('class', 'w-60');
    $form->addInput($postsClassify->addRule('isInteger', _t('请输入纯数字')));

    $postRank = new Typecho_Widget_Helper_Form_Element_Text('postRank', NULL, '10', _t('阅读排行'), _t('阅读排行展示数量'));
    $postRank->input->setAttribute('class', 'w-60');
    $form->addInput($postRank->addRule('isInteger', _t('请输入纯数字')));

    $diggRank = new Typecho_Widget_Helper_Form_Element_Text('diggRank', NULL, '10', _t('推荐排行'), _t('推荐排行展示数量'));
    $diggRank->input->setAttribute('class', 'w-60');
    $form->addInput($diggRank->addRule('isInteger', _t('请输入纯数字')));

    $latestComment = new Typecho_Widget_Helper_Form_Element_Text('latestComment', NULL, '10', _t('最新评论'), _t('最新评论展示数量'));
    $latestComment->input->setAttribute('class', 'w-60');
    $form->addInput($latestComment->addRule('isInteger', _t('请输入纯数字')));

    $commentsRank = new Typecho_Widget_Helper_Form_Element_Text('commentsRank', NULL, '10', _t('评论排行'), _t('评论排行展示数量'));
    $commentsRank->input->setAttribute('class', 'w-60');
    $form->addInput($commentsRank->addRule('isInteger', _t('请输入纯数字')));

    $postsArchive = new Typecho_Widget_Helper_Form_Element_Text('postsArchive', NULL, '10', _t('随笔档案'), _t('随笔档案展示数量'));
    $postsArchive->input->setAttribute('class', 'w-60');
    $form->addInput($postsArchive->addRule('isInteger', _t('请输入纯数字')));


    // 备份主题配置信息
    $name = 'easybe';
    $db = Typecho_Db::get();
    $themeData = $db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name))['value'];
    $themeBackup = $db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'themeBackup:'.$name))['value'];

    if(isset($_POST) && $themeData) {
        if($_POST["jqueryConfig"]){
            if($themeBackup){
                $db->query($db->update('table.options')->rows(array('value'=>$themeData))->where('name = ?', 'themeBackup:'.$name));
            }else{
                $db->query($db->insert('table.options')->rows(array('name' => 'themeBackup:'.$name,'user' => '0','value' => $themeData)));
            }
        }
        if($_POST["restore"]){
            if($themeBackup){
                $updateRows= $db->query($db->update('table.options')->rows(array('value'=>$themeBackup))->where('name = ?', 'theme:'.$name));
                if ($updateRows)  {
                    echo '<div class="message popup success" style="position: absolute; top: 36px; display: block;"><ul><li>主题备份数据已恢复</li></ul></div>';
                    echo "<meta http-equiv='refresh' content ='1';url=".getUrl().">";
                }
            }else{
                echo '<div class="message popup error" style="position: absolute; top: 36px; display: block;"><ul><li>不存在主题备份数据，请先进行主题数据备份</li></ul></div>';
                echo "<meta http-equiv='refresh' content ='1';url=".getUrl().">";
            }
        }
    }
    echo '<form class="protected home col-mb-12" action="" method="post"><ul class="typecho-option" style="position: relative;left: -9px;"><li><label class="typecho-label">主题配置恢复</label><input type="submit" name="restore" class="btn primary" value="恢复主题配置"></li></ul></form>';
}

// 字段配置
function themeFields($layout) {
    $postTop = new Typecho_Widget_Helper_Form_Element_Radio('postSticky', [1 => '开启', 0 => '关闭'], '0', _t('是否置顶'));
    $layout->addItem($postTop);
}

// 获取全部文章
function getAllPosts($page, $limit) {
    $db = Typecho_Db::get();
    $sql = $db->select('c.cid', 'c.title', 'c.created', 'c.text', 'c.password', 'c.commentsNum', 'c.views', 'c.type', 'c.digg', 'f.str_value as sticky')
            ->from('table.contents as c')
            ->join('table.fields as f', 'f.cid = c.cid', Typecho_Db::LEFT_JOIN)
            ->where('c.status = ? and c.type = ?', 'publish', 'post')
            ->order('sticky', Typecho_Db::SORT_DESC)
            ->order('c.created', Typecho_Db::SORT_DESC)
            ->page($page, $limit);
    return  $db->fetchAll($sql);
}

// 获取当前页面地址
function getUrl() {
    $protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
    $php_self = $_SERVER['PHP_SELF'] ?? $_SERVER['SCRIPT_NAME'];
    $path_info = $_SERVER['PATH_INFO'] ??  '';
    $relate_url = $_SERVER['REQUEST_URI'] ?? $php_self.$path_info;
    return $protocal.($_SERVER['HTTP_HOST'] ?? '').$relate_url;
}

// 获取全部文章阅读量
function getAllPostViews() {
    $db = Typecho_Db::get();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query("ALTER TABLE `{$db->getPrefix()}contents` ADD `views` INT(10) DEFAULT 0;");
    }
    $row = $db->fetchAll("select sum(views) as views from `{$db->getPrefix()}contents`;");
    echo $row[0]['views'];
}

// 获取指定文章的阅读访问量
function getPostView($archive) {
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) $db->query($db->update('table.contents')->rows(array('views' => (int) $row + 1))->where('cid = ?', $cid));
    echo $row;
}

// 获取推荐最多的文章
function getPostDiggRank($limit){
    $db     = Typecho_Db::get();
    $posts = $db->fetchAll($db->select()->from('table.contents')
        ->where('type = ? AND status = ? AND password is NULL', 'post', 'publish')
        ->order('digg', Typecho_Db::SORT_DESC)
        ->limit($limit)
    );

    if ($posts) {
        foreach ($posts as $post) {
            $result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($post);
            $postTitle = htmlspecialchars($result['title']);
            $permalink = $result['permalink'];
            $postDiggNum = $result['digg'];
            echo "<li><a href='$permalink' title='$postTitle'>$postTitle($postDiggNum)</a></li>";
        }
    }
}

// 获取阅读量最多的文章
function getPostViewRank($limit) {
    $db     = Typecho_Db::get();
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

// 获取评论最多的文章
function getPostCommentRank($limit) {
    $db     = Typecho_Db::get();
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
            echo "<li><a href='$permalink' title='$postTitle'>Re:$postTitle($postCommentsNum)</a></li>";
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

// 获取指定文章的点赞数量
function getDiggNum($cid, &$record = NULL) {
    $db = Typecho_Db::get();
    $res = [
        'msg' => '',
        'digg' => 0,
        'recording' => false
    ];
    $data = $db->fetchRow($db->select()->from('table.contents')->where('cid = ?', $cid));
    if (!array_key_exists('digg', $data)) {
        $db->query("ALTER TABLE `{$db->getPrefix()}contents` ADD `digg` INT(10) NOT NULL DEFAULT 0;");
    } else {
        $res['digg'] = $data['digg'];
    }
    $recording = Typecho_Cookie::get('__typecho_digg_record');
    if (empty($recording)) {
        Typecho_Cookie::set('__typecho_digg_record', '[]');
    } else {
        $record = json_decode($recording);
        $res['recording'] = is_array($record) && in_array($cid, $record);
    }
    return $res;
}

// 请求点赞
function digg($cid) {
    $db = Typecho_Db::get();
    $res = getDiggNum($cid, $record);
    if (empty($record)) {
        Typecho_Cookie::set('__typecho_digg_record', "[$cid]");
    } else {
        if ($res['recording']) {
            $res['msg'] = "您已经推荐过了哦O(∩_∩)O";
            return json_encode($res);
        }
        array_push($record, $cid);
        Typecho_Cookie::set('__typecho_digg_record', json_encode($record));
    }
    $digg = ++$res['digg'];
    $db->query($db->update('table.contents')->rows(array('digg'=>$digg))->where('cid = ?', $cid));
    $res['msg'] = '感谢推荐!';
    $res['digg'] = $digg;
    return json_encode($res);
}

// 获取指定文章的踩
function getBuryNum($cid, &$record = NULL) {
    $db = Typecho_Db::get();
    $res = [
        'msg' => '',
        'bury' => 0,
        'recording' => false
    ];
    $data = $db->fetchRow($db->select()->from('table.contents')->where('cid = ?', $cid));
    if (!array_key_exists('bury', $data)) {
        $db->query("ALTER TABLE `{$db->getPrefix()}contents` ADD `bury` INT(10) NOT NULL DEFAULT 0;");
    } else {
        $res['bury'] = $data['bury'];
    }
    $recording = Typecho_Cookie::get('__typecho_bury_record');
    if (empty($recording)) {
        Typecho_Cookie::set('__typecho_bury_record', '[]');
    } else {
        $record = json_decode($recording);
        $res['recording'] = is_array($record) && in_array($cid, $record);
    }
    return $res;
}

// 请求踩
function bury($cid) {
    $db = Typecho_Db::get();
    $res = getBuryNum($cid, $record);
    if (empty($record)) {
        Typecho_Cookie::set('__typecho_bury_record', "[$cid]");
    } else {
        if ($res['recording']) {
            $res['msg'] = "您已经批评过了哦/(ㄒoㄒ)/~~";
            return json_encode($res);
        }
        array_push($record, $cid);
        Typecho_Cookie::set('__typecho_bury_record', json_encode($record));
    }
    $bury = ++$res['bury'];
    $db->query($db->update('table.contents')->rows(array('bury'=>$bury))->where('cid = ?', $cid));
    $res['msg'] = '感谢批评,我会再接再厉的(づ￣ 3￣)づ';
    $res['bury'] = $bury;
    return json_encode($res);
}
