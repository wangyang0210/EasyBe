<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * 主题配置
 *
 * @param $form
 */
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

    $globalConfig = new Typecho_Widget_Helper_Form_Element_Textarea('globalConfig', NULL, '<script src="//cdn.jsdelivr.net/gh/wangyang0210/EasyBe@v2.1.9/easybe/simple-memory.js" defer></script>', _t('全局配置'));
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

    $gravatarPrefix = new Typecho_Widget_Helper_Form_Element_Radio('gravatarPrefix', array(
        'https://gravatar.loli.net/avatar/' => 'LOLI镜像 <small>https://gravatar.loli.net</small>',
        'https://gravatar.cat.net/avatar/' => 'CAT镜像 <small>https://gravatar.cat.net</small>',
        'https://sdn.geekzu.org/avatar/' => '极客镜像 <small>https://sdn.geekzu.org</small>',
        'https://dn-qiniu-avatar.qbox.me/avatar/' => '七牛镜像 <small>https://dn-qiniu-avatar.qbox.me</small>',
        ),
        'https://gravatar.loli.net/avatar/', _t('Gravatar镜像'), _t('Gravatar镜像服务器'));
    $form->addInput($gravatarPrefix->multiMode());

    $salt = new Typecho_Widget_Helper_Form_Element_Text('salt', NULL, 'easybe', _t('加密参数'), _t('头像加密参数建议修改'));
    $form->addInput($salt);

    $cacheTime = new Typecho_Widget_Helper_Form_Element_Text('cacheTime', NULL, '10', _t('缓存时间'), _t('头像缓存时间(小时)'));
    $cacheTime->input->setAttribute('class', 'w-60');
    $form->addInput($cacheTime->addRule('isInteger', _t('请输入纯数字')));


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

/**
 * 字段配置
 *
 * @param $layout
 */
function themeFields($layout) {
    $postTop = new Typecho_Widget_Helper_Form_Element_Radio('postSticky', [1 => '开启', 0 => '关闭'], '0', _t('是否置顶'));
    $layout->addItem($postTop);
}

/**
 * 获取全部文章阅读量
 *
 */
function getAllPostViews() {
    $db = Typecho_Db::get();
    $data = $db->fetchRow($db->select()->from('table.contents'));
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $data)) {
        $db->query("ALTER TABLE `{$prefix}contents` ADD `views` INT(10) NOT NULL DEFAULT 0;");
    }
    if (!array_key_exists('digg', $data)) {
        $db->query("ALTER TABLE `{$prefix}contents` ADD `digg` INT(10) NOT NULL DEFAULT 0;");
    }
    if (!array_key_exists('bury', $data)) {
        $db->query("ALTER TABLE `{$prefix}contents` ADD `bury` INT(10) NOT NULL DEFAULT 0;");
    }
    $row = $db->fetchAll("select sum(views) as views from `{$prefix}contents`;");
    echo $row[0]['views'];
}

/**
 * 获取全部文章
 *
 * @param int $page 分页
 * @param int $limit 文章数量
 * @return mixed
 */
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

/**
 * 获取当前页面地址
 *
 * @return string 链接
 */
function getUrl() {
    $protocol = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
    $php_self = $_SERVER['PHP_SELF'] ?? $_SERVER['SCRIPT_NAME'];
    $path_info = $_SERVER['PATH_INFO'] ??  '';
    $relate_url = $_SERVER['REQUEST_URI'] ?? $php_self.$path_info;
    return $protocol.($_SERVER['HTTP_HOST'] ?? '').$relate_url;
}

/**
 * 获取指定文章的阅读访问量
 *
 * @param object $archive 文章属性
 */
function getPostView($archive) {
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) $db->query($db->update('table.contents')->rows(array('views' => (int) $row + 1))->where('cid = ?', $cid));
    echo $row;
}

/**
 * 获取推荐最多的文章
 *
 * @param int $limit 文章数量
 */
function getPostDiggRank($limit) {
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

/**
 * 获取阅读量最多的文章
 *
 * @param int $limit 文章数量
 */
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

/**
 * 获取评论最多的文章
 *
 * @param int $limit 文章数量
 */
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

/**
 * 留言@
 *
 * @param int $coid 评论ID
 * @return string
 */
function getPermalinkFromCoId($coid) {
    $db = Typecho_Db::get();
    $row = $db->fetchRow($db->select('author')->from('table.comments')->where('coid = ? AND status = ?', $coid, 'approved'));
    if (empty($row)) return '';
    return '<a href="#comment-'.$coid.'">@'.$row['author'].'</a>';
}

/**
 * IP转地址
 *
 * @param int $ip ip地址
 */
function getIPInfo($ip) {
    $url =  "http://ip.plyz.net/ip.ashx?ip={$ip}";
    $data = curlRequest($url, 'GET');
    echo explode("|",$data)[1];
}

/**
 * 浏览器和设备信息
 *
 * @param string $userAgent 用户代理
 * @return string[]
 */
function getBrowsersInfo ($userAgent) {

    $deviceInfo = [
        "system" => "",
        "systemVersion" => "",
        "browser" => "",
        "version" => "",
        "device" => "PC"
    ];

    $match = [
        // 浏览器 - 国外浏览器
        "Safari" => strstr($userAgent, 'Safari') != false ,
        "Chrome" => strstr($userAgent, 'Chrome') != false || strstr($userAgent, 'CriOS') != false ,
        "IE" => strstr($userAgent, 'MSIE') != false || strstr($userAgent, 'Trident') != false ,
        "Edge" => strstr($userAgent, 'Edge') != false || strstr($userAgent, 'Edg/') != false || strstr($userAgent, 'EdgA') != false || strstr($userAgent, 'EdgiOS') != false,
        "Firefox" => strstr($userAgent, 'Firefox') != false || strstr($userAgent, 'FxiOS') != false ,
        "Firefox Focus" => strstr($userAgent, 'Focus') != false,
        "Chromium" => strstr($userAgent,'Chromium') != false,
        "Opera" => strstr($userAgent,'Opera') != false || strstr($userAgent,'OPR') != false,
        "Vivaldi" => strstr($userAgent,'Vivaldi') != false,
        "Yandex" => strstr($userAgent,'YaBrowser') != false,
        "Arora" => strstr($userAgent,'Arora') != false,
        "Lunascape" => strstr($userAgent,'Lunascape') != false,
        "QupZilla" => strstr($userAgent,'QupZilla') != false,
        "Coc Coc" => strstr($userAgent,'coc_coc_browser') != false,
        "Kindle" => strstr($userAgent,'Kindle') != false || strstr($userAgent,'Silk/') != false,
        "Iceweasel" => strstr($userAgent,'Iceweasel') != false,
        "Konqueror" => strstr($userAgent,'Konqueror') != false,
        "Iceape" => strstr($userAgent,'Iceape') != false,
        "SeaMonkey" => strstr($userAgent,'SeaMonkey') != false,
        "Epiphany" => strstr($userAgent,'Epiphany') != false,
        // 浏览器 - 国内浏览器
        "360" => strstr($userAgent,'QihooBrowser') != false || strstr($userAgent,'QHBrowser') != false,
        "360EE" => strstr($userAgent,'360EE') != false,
        "360SE" => strstr($userAgent,'360SE') != false,
        "UC" => strstr($userAgent,'UCBrowser') != false || strstr($userAgent,' UBrowser') != false || strstr($userAgent,'UCWEB') != false,
        "QQBrowser" => strstr($userAgent,'QQBrowser') != false,
        "QQ" => strstr($userAgent,'QQ/') != false,
        "Baidu" => strstr($userAgent,'Baidu') != false || strstr($userAgent,'BIDUBrowser') != false || strstr($userAgent,'baidubrowser') != false || strstr($userAgent,'baiduboxapp') != false || strstr($userAgent,'BaiduHD') != false,
        "Maxthon" => strstr($userAgent,'Maxthon') != false,
        "Sogou" => strstr($userAgent,'MetaSr') != false || strstr($userAgent,'Sogou') != false,
        "Liebao" => strstr($userAgent,'LBBROWSER') != false || strstr($userAgent,'LieBaoFast') != false,
        "2345Explorer" => strstr($userAgent,'2345Explorer') != false || strstr($userAgent,'Mb2345Browser') != false || strstr($userAgent,'2345chrome') != false,
        "115Browser" => strstr($userAgent,'115Browser') != false,
        "TheWorld" => strstr($userAgent,'TheWorld') != false,
        "Quark" => strstr($userAgent,'Quark') != false,
        "Qiyu" => strstr($userAgent,'Qiyu') != false,
        // 浏览器 - 手机厂商
        "XiaoMi" => strstr($userAgent,'MiuiBrowser') != false,
        "Huawei" => strstr($userAgent,'HuaweiBrowser') != false || strstr($userAgent,'HUAWEI/') != false || strstr($userAgent,'HONOR') != false || strstr($userAgent,'HBPC/') != false,
        "Vivo" => strstr($userAgent,'VivoBrowser') != false,
        "OPPO" => strstr($userAgent,'HeyTapBrowser') != false,
        // 浏览器 - 客户端
        "Wechat" => strstr($userAgent,'MicroMessenger') != false,
        "WechatWork" => strstr($userAgent,'wxwork/') != false,
        "Taobao" => strstr($userAgent,'AliApp(TB') != false,
        "Alipay" => strstr($userAgent,'AliApp(AP') != false,
        "Weibo" => strstr($userAgent,'Weibo') != false,
        "Douban" => strstr($userAgent,'com.douban.frodo') != false,
        "Suning" => strstr($userAgent,'SNEBUY-APP') != false,
        "iQiYi" => strstr($userAgent,'IqiyiApp') != false,
        "DingTalk" => strstr($userAgent,'DingTalk') != false,
        "Douyin" => strstr($userAgent,'aweme') != false,
        // 系统或平台
        "Windows" => strstr($userAgent,'Windows') != false,
        "Linux" => strstr($userAgent,'Linux') != false || strstr($userAgent,'X11') != false,
        "Mac OS" => strstr($userAgent,'Macintosh') != false,
        "Android" => strstr($userAgent,'Android') != false || strstr($userAgent,'Adr') != false,
        "HarmonyOS" => strstr($userAgent,'HarmonyOS') != false,
        "Ubuntu" => strstr($userAgent,'Ubuntu') != false,
        "FreeBSD" => strstr($userAgent,'FreeBSD') != false,
        "Debian" => strstr($userAgent,'Debian') != false,
        "Windows Phone" => strstr($userAgent,'IEMobile') != false || strstr($userAgent,'Windows Phone') != false,
        "BlackBerry" => strstr($userAgent,'BlackBerry') != false || strstr($userAgent,'RIM') != false,
        "MeeGo" => strstr($userAgent,'MeeGo') != false,
        "Symbian" => strstr($userAgent,'Symbian') != false,
        "iOS" => strstr($userAgent,'like Mac OS X') != false,
        "Chrome OS" => strstr($userAgent,'CrOS') != false,
        "WebOS" => strstr($userAgent,'hpwOS') != false,
        // 设备
        "Mobile" => strstr($userAgent,'Mobi') != false || strstr($userAgent,'iPh') != false || strstr($userAgent,'480') != false,
        "Tablet" => strstr($userAgent,'Tablet') != false || strstr($userAgent,'Pad') != false || strstr($userAgent,'Nexus 7') != false,
    ];

    // 部分修正 | 因typecho评论数据只存储了ua的信息,所以不能完全进行修正尤其是360相关浏览器
    if ($match['Baidu'] && $match['Opera']) $match['Baidu'] = false;
    if ($match['iOS']) $match['Safari'] = true;

    // 基本信息
    $baseInfo = [
        "browser" => [
            'Safari', 'Chrome', 'Edge', 'IE', 'Firefox', 'Firefox Focus', 'Chromium',
            'Opera', 'Vivaldi', 'Yandex', 'Arora', 'Lunascape','QupZilla', 'Coc Coc',
            'Kindle', 'Iceweasel', 'Konqueror', 'Iceape','SeaMonkey', 'Epiphany', 'XiaoMi',
            'Vivo', 'OPPO', '360', '360SE','360EE', 'UC', 'QQBrowser', 'QQ', 'Huawei', 'Baidu',
            'Maxthon', 'Sogou', 'Liebao', '2345Explorer', '115Browser', 'TheWorld', 'Quark', 'Qiyu',
            'Wechat', 'WechatWork', 'Taobao', 'Alipay', 'Weibo', 'Douban', 'Suning', 'iQiYi', 'DingTalk', 'Douyin'
        ],
        "system" => [
            'Windows', 'Linux', 'Mac OS', 'Android', 'HarmonyOS', 'Ubuntu',
            'FreeBSD', 'Debian', 'iOS', 'Windows Phone', 'BlackBerry', 'MeeGo',
            'Symbian', 'Chrome OS', 'WebOS'
        ],
        "device" => ['Mobile', 'Tablet'],
    ];

    foreach ($baseInfo as $k => $v) {
        foreach ($v as $xv) {
            if ($match[$xv]) $deviceInfo[$k] = $xv;
        }
    }

    // 操作系统版本信息
    $windowsVersion = [
        '10' => "10",
        '6.4' => '10',
        '6.3' => '8.1',
        '6.2' => '8',
        '6.1' => '7',
        '6.0' => 'Vista',
        '5.2' => 'XP',
        '5.1' => 'XP',
        '5.0' => '2000',
    ];
    $wv = pregMatch("/^Mozilla\/\d.0 \(Windows NT ([\d.]+)[;)].*$/", $userAgent);

    $HarmonyOSVersion = [
        10 => "2",
        12 => "3"
    ];
    $systemVersion = [
        "Windows" => $windowsVersion[$wv] ?? $wv,
        "Android" => pregMatch("/^.*Android ([\d.]+);.*$/", $userAgent),
        "HarmonyOS" => $HarmonyOSVersion[pregMatch("/^Mozilla.*Android ([\d.]+)[;)].*$/", $userAgent)] ?? '',
        "iOS" => preg_replace("/_/", '.', pregMatch("/^.*OS ([\d_]+) like.*$/", $userAgent)),
        "Debian" =>  pregMatch("/^.*Debian\/([\d.]+).*$/", $userAgent),
        "Windows Phone" => pregMatch("/^.*Windows Phone( OS)? ([\d.]+);.*$/", $userAgent),
        "Mac OS" => preg_replace("/_/", '.',pregMatch("/^.*Mac OS X ([\d_]+).*$/", $userAgent)),
        "WebOS" => pregMatch("/^.*hpwOS\/([\d.]+);.*$/", $userAgent)
    ];

    if ($systemVersion[$deviceInfo['system']]) {
        $deviceInfo['systemVersion'] = $systemVersion[$deviceInfo['system']];
        if ($deviceInfo['systemVersion'] == $userAgent) $deviceInfo['systemVersion'] = '';
    }

    // if ($deviceInfo['system'] == 'Windows' && $_windowsVersion) $deviceInfo['systemVersion'] = $_windowsVersion;


    // 浏览器版本信息
    $browsers_360SE = [
        108 => '14.0',
        86 => '13.0',
        78 => '12.0',
        69 => '11.0',
        63 => '10.0',
        55 => '9.1',
        45 => '8.1',
        42 => '8.0',
        31 => '7.0',
        21 => '6.3',
    ];
    $browsers_360EE = [
        95 => '21',
        86 => '13.0',
        78 => '12.0',
        69 => '11.0',
        63 => '9.5',
        55 => '9.0',
        50 => '8.7',
        30 => '7.5',
    ];
    $browsers_liebao = [
         57 => '6.5',
        49 => '6.0',
        46 => '5.9',
        42 => '5.3',
        39 => '5.2',
        34 => '5.0',
        29 => '4.5',
        21 => '4.0'
    ];
    $browsers_2345 = [
        69 => '10.0',
        55 => '9.9',
        69 => '10.0',
        55 => '9.9',
        69 => '10.0',
        55 => '9.9'
    ];

    $chromeVersion = pregMatch('/^.*Chrome\/([\d]+).*$/', $userAgent);

    $browsersVersion = [
        "Safari" => pregMatch("/^.*Version\/([\d.]+).*$/", $userAgent),
        "Chrome" => pregMatch("/^.*Chrome\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*CriOS\/([\d.]+).*$/", $userAgent),
        "IE" => pregMatch("/^.*MSIE ([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*rv:([\d.]+).*$/", $userAgent),
        "Edge" => pregMatch("/^.*Edge\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*Edg\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*EdgA\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*EdgiOS\/([\d.]+).*$/", $userAgent),
        "Firefox" => pregMatch("/^.*Firefox\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*FxiOS\/([\d.]+).*$/", $userAgent),
        "Firefox Focus" => pregMatch("/^.*Focus\/([\d.]+).*$/", $userAgent),
        "Chromium" => pregMatch("/^.*Chromium\/([\d.]+).*$/", $userAgent),
        "Opera" => pregMatch("/^.*Opera\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*OPR\/([\d.]+).*$/", $userAgent),
        "Vivaldi" => pregMatch("/^.*Vivaldi\/([\d.]+).*$/", $userAgent),
        "Yandex" => pregMatch("/^.*YaBrowser\/([\d.]+).*$/", $userAgent),
        "Brave" => pregMatch("/^.*Chrome\/([\d.]+).*$/", $userAgent),
        "Arora" => pregMatch("/^.*Arora\/([\d.]+).*$/", $userAgent),
        "Lunascape" => pregMatch("/^.*Lunascape[\/\s]([\d.]+).*$/", $userAgent),
        "QupZilla" => pregMatch("/^.*QupZilla[\/\s]([\d.]+).*$/", $userAgent),
        "Coc Coc" => pregMatch("/^.*coc_coc_browser\/([\d.]+).*$/", $userAgent),
        "Kindle" => pregMatch("/^.*Version\/([\d.]+).*$/", $userAgent),
        "Iceweasel" => pregMatch("/^.*Iceweasel\/([\d.]+).*$/", $userAgent),
        "Konqueror" => pregMatch("/^.*Konqueror\/([\d.]+).*$/", $userAgent),
        "Iceape" => pregMatch("/^.*Iceape\/([\d.]+).*$/", $userAgent),
        "SeaMonkey" => pregMatch("/^.*SeaMonkey\/([\d.]+).*$/", $userAgent),
        "Epiphany" => pregMatch("/^.*Epiphany\/([\d.]+).*$/", $userAgent),
        "360" => pregMatch("/^.*QihooBrowser(HD)?\/([\d.]+).*$/", $userAgent),
        "Maxthon" => pregMatch("/^.*Maxthon\/([\d.]+).*$/", $userAgent),
        "QQBrowser" => pregMatch("/^.*QQBrowser\/([\d.]+).*$/", $userAgent),
        "QQ" => pregMatch("/^.*QQ\/([\d.]+).*$/", $userAgent),
        "Baidu" => pregMatch("/^.*BIDUBrowser[\s\/]([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*baiduboxapp\/([\d.]+).*$/", $userAgent),
        "UC" => pregMatch("/^.*UC?Browser\/([\d.]+).*$/", $userAgent),
        "Sogou" => pregMatch("/^.*SE ([\d.X]+).*$/", $userAgent) ?? pregMatch("/^.*SogouMobileBrowser\/([\d.]+).*$/", $userAgent),
        "115Browser" => pregMatch("/^.*115Browser\/([\d.]+).*$/", $userAgent),
        "TheWorld" => pregMatch("/^.*TheWorld ([\d.]+).*$/", $userAgent),
        "XiaoMi" => pregMatch("/^.*MiuiBrowser\/([\d.]+).*$/", $userAgent),
        "Vivo" => pregMatch("/^.*VivoBrowser\/([\d.]+).*$/", $userAgent),
        "OPPO" => pregMatch("/^.*HeyTapBrowser\/([\d.]+).*$/", $userAgent),
        "Quark" => pregMatch("/^.*Quark\/([\d.]+).*$/", $userAgent),
        "Qiyu" => pregMatch("/^.*Qiyu\/([\d.]+).*$/", $userAgent),
        "Wechat" => pregMatch("/^.*MicroMessenger\/([\d.]+).*$/", $userAgent),
        "WechatWork" => pregMatch("/^.*wxwork\/([\d.]+).*$/", $userAgent),
        "Taobao" => pregMatch("/^.*AliApp\(TB\/([\d.]+).*$/", $userAgent),
        "Alipay" => pregMatch("/^.*AliApp\(AP\/([\d.]+).*$/", $userAgent),
        "Weibo" => pregMatch("/^.*weibo__([\d.]+).*$/", $userAgent),
        "Douban" => pregMatch("/^.*com.douban.frodo\/([\d.]+).*$/", $userAgent),
        "Suning" => pregMatch("/^.*SNEBUY-APP([\d.]+).*$/", $userAgent),
        "iQiYi" => pregMatch("/^.*IqiyiVersion\/([\d.]+).*$/", $userAgent),
        "DingTalk" => pregMatch("/^.*DingTalk\/([\d.]+).*$/", $userAgent),
        "Douyin" => pregMatch("/^.*app_version\/([\d.]+).*$/", $userAgent),
        "Huawei" => pregMatch("/^.*Version\/([\d.]+).*$/", $userAgent) ??  pregMatch("/^.*HuaweiBrowser\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*HBPC\/([\d.]+).*$/", $userAgent),
        "360SE" => $browsers_360SE[$chromeVersion] ?? '',
        "360EE" => $browsers_360EE[$chromeVersion] ?? '',
        "Liebao" => pregMatch("/^.*LieBaoFast\/([\d.]+).*$/", $userAgent) ?? $browsers_liebao[$chromeVersion],
        "2345Explorer" => $browsers_2345[$chromeVersion]  ?? pregMatch("/^.*2345Explorer\/([\d.]+).*$/", $userAgent) ?? pregMatch("/^.*Mb2345Browser\/([\d.]+).*$/", $userAgent),
    ];


    if ($browsersVersion[$deviceInfo['browser']]) {
        $deviceInfo["version"] = $browsersVersion[$deviceInfo['browser']];
        if ($deviceInfo["version"] == $userAgent) $deviceInfo['version'] = '';
    }

    // 修正浏览器版本信息
    $chrome = pregMatch('/\S+Browser/', $userAgent);
    if ($deviceInfo['browser'] == 'Chrome' && $chrome) {
        $deviceInfo['browser'] = $chrome;
        $deviceInfo['version'] = pregMatch('/^.*Browser\/([\d.]+).*$/', $userAgent);
    }

    return $deviceInfo;
}

/**
 * 返回符合正则的值
 *
 * @param string $reg 正则
 * @param string $sourceData 源数据
 * @return mixed|void
 */
function pregMatch($reg, $sourceData) {
    if (preg_match($reg, $sourceData, $mat)) return $mat[1];
}



/**
 * 获取指定文章的点赞数量
 *
 * @param int $cid 文章ID
 * @param null $record 标记
 * @return array
 */
function getDiggNum($cid, &$record = NULL) {
    $db = Typecho_Db::get();
    $res = [
        'msg' => '',
        'digg' => 0,
        'recording' => false
    ];
    $res['digg'] = $db->fetchRow($db->select()->from('table.contents')->where('cid = ?', $cid))['digg'];
    $recording = Typecho_Cookie::get('__typecho_digg_record');
    if (empty($recording)) {
        Typecho_Cookie::set('__typecho_digg_record', '[]');
    } else {
        $record = json_decode($recording);
        $res['recording'] = is_array($record) && in_array($cid, $record);
    }
    return $res;
}

/**
 * 请求点赞
 *
 * @param int $cid 文章ID
 * @return false|string
 */
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

/**
 * 获取指定文章的踩
 *
 * @param int $cid 文章ID
 * @param null $record 标记
 * @return array
 */
function getBuryNum($cid, &$record = NULL) {
    $db = Typecho_Db::get();
    $res = [
        'msg' => '',
        'bury' => 0,
        'recording' => false
    ];
    $res['bury'] = $db->fetchRow($db->select()->from('table.contents')->where('cid = ?', $cid))['bury'];
    $recording = Typecho_Cookie::get('__typecho_bury_record');
    if (empty($recording)) {
        Typecho_Cookie::set('__typecho_bury_record', '[]');
    } else {
        $record = json_decode($recording);
        $res['recording'] = is_array($record) && in_array($cid, $record);
    }
    return $res;
}

/**
 * @param int $cid 文章ID
 * @return false|string
 */
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


/**
 * 多种请求方法封装
 *
 * @param string $url      请求地址
 * @param string $method   请求方式
 * @param array $header   请求头
 * @param array $data     请求体
 *
 * @return mixed
 */
function curlRequest(string $url, string $method = 'POST', array $header = ["Content-type:application/json;charset=utf-8", "Accept:application/json"], array $data = [])
{

    $method = strtoupper($method);
    //初始化
    $ch = curl_init();
    //设置桥接(抓包)
    //curl_setopt($ch, CURLOPT_PROXY, '127.0.0.1:8888');
    //设置请求地址
    curl_setopt($ch, CURLOPT_URL, $url);
    // 检查ssl证书
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // 从检查本地证书检查是否ssl加密
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $url);
    //设置请求方法
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    //设置请求头
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    //设置请求数据
    if (!empty($data)) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    //设置curl_exec()的返回值以字符串返回
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($ch);
    curl_close($ch);
    return $res;
}


/**
 * 获取本地头像
 * @param string $email 邮箱地址
 * @return string 返回头像链接
 */
function getAvatar(string $email) {
        $options = Helper::options();
        $time = 1296000;
        $gravatarUrl = $options->gravatarPrefix.md5(strtolower(trim($email))).'?s=100&r=G';
        $qqNumber = preg_match('/@qq.com/', $email) ?  explode('@', $email)[0] : '';
        $fileUrl = $qqNumber ? "https://q.qlogo.cn/headimg_dl?dst_uin={$qqNumber}&spec=100&img_type=jpg" : $gravatarUrl;
        $filePath = '/usr/uploads/avatar/'.md5(strtolower(trim($email.$options->salt))).'.jpg';
        $fileInfo = __TYPECHO_ROOT_DIR__.$filePath;
        $dirPath = dirname($fileInfo);
        if (!is_dir($dirPath)) mkdir($dirPath, 0755);
        if (file_exists($fileInfo) && (time() - filemtime($fileInfo)) < ($options->cacheTime * 3600)) {
            echo $options->siteUrl.$filePath;
        } else if (file_put_contents($fileInfo,file_get_contents($fileUrl))) { 
            echo $options->siteUrl.$filePath;
        }

}
