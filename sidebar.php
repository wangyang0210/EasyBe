<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit;
} ?>

<div class="slider-search">
    <h3 class="widget-title">关键字搜索</h3>
    <div class="site-search col-3 kit-hidden-tb">
        <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
            <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <span class="search-icon iconfont  icon-fangdajing"></span>
        </form>
    </div>
</div>

<div class="col-mb-12 col-offset-1 col-3 kit-hidden-tb" id="secondary" role="complementary">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)) : ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)) : ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)) : ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)) : ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)) : ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('其它'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()) : ?>
                <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
        </ul>
    </section>
    <?php endif; ?>

</div><!-- end #sidebar -->


<div id="sideBar">
		<div id="sideBarMain">
		
<div class="newsItem">
	<div id="blog-news">
        <!-- menu html -->
<div class="container">
    <div class="menu-wrap optiscroll is-enabled has-vtrack" id="menuWrap" style=""><div class="optiscroll-content" style="right: -17px; bottom: -17px;">
        <nav class="menu">

            <!-- 个人简介 -->
            <div class="introduce-box">
                <div class="introduce-head">
                    <div class="introduce-via" id="menuBlogAvatar"><img src="https://pic.cnblogs.com/avatar/1334215/20180504110551.png"></div>
                </div>
                <div id="introduce">昵称：<a href="https://home.cnblogs.com/u/wangyang0210/">。思索</a><br>园龄：<a href="https://home.cnblogs.com/u/wangyang0210/" title="入园时间：2018-02-12">1年5个月</a><br>粉丝：<a href="https://home.cnblogs.com/u/wangyang0210/followers/">64</a><br>关注：<a href="https://home.cnblogs.com/u/wangyang0210/followees/">2</a><div id="p_b_follow"></div></div>
            </div>

            <!-- 导航 -->
            <div class="nav-title"></div>
            <div class="icon-list">
                <ul>
                    <li><a href="<?php $this->options->siteUrl(); ?>" target="_self">首页</a></li>
                    <li><a href="https://msg.cnblogs.com/send/wangyang0210" target="_blank">联系</a></li>
                    <li><a href="<?php $this->options->siteUrl(); ?>feed" target="_blank">订阅</a></li>
                    <li><a href="https://i.cnblogs.com/" target="_blank">管理</a></li>
                    <li><a href="https://i.cnblogs.com/EditPosts.aspx?opt=1" target="_blank">添加随笔</a></li>
                    <li><a href="https://github.com/wangyang0210" target="_blank">GitHub</a></li>
                    <li><a href="https://www.cnblogs.com/" target="_blank">CNBlogs</a></li>
                </ul>
            </div>
            <!-- 访客来源统计 -->
            <div class="m-list-title" style="display: block;"><span>访客来源</span></div>
            <a href="https://clustrmaps.com/site/1ahcn" title="Visit tracker">
                <img src="//clustrmaps.com/map_v2.png?cl=ffffff&amp;w=268&amp;t=t&amp;d=ymyD9S6Gxrh7BknYYgxQi8uzm-aKKsJUuRZX0vBVlZQ&amp;co=000000">
            </a>

            <!-- 最新随笔 -->
            <div class="m-list-title" style="display: block;"><span>最新随笔</span></div>
            <div class="m-icon-list" id="sb-sidebarRecentposts"><div><ul><li><a href="https://www.cnblogs.com/wangyang0210/p/11229707.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Fiddler——手机端无法安装证书</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11202200.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Go——报错总结</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11202053.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Linux——自定义服务命令</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11196363.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>windows——快速得到某一目录下所有文件的名称</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11161794.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>七牛云——qshell一个神奇的工具</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11161711.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>七牛云——批量将本地图片上传到七牛云</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11115690.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>web scraper——爬取知乎|微博用户数据模板【三】</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11114533.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>PHP——仿造微信OpenId</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11076382.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>PHP——巧用PHP函数array_merge()合并数组</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11081076.html"><span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>JavaScript——图片懒加载</a></li></ul></div></div>

            <!-- 我的标签 -->
            <div class="m-list-title" style="display: block;"><span>我的标签</span></div>
            <div class="m-icon-list" id="sb-toptags"><div><ul><li><a href="https://www.cnblogs.com/wangyang0210/tag/php/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>php</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/JavaScript/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>JavaScript</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/linux/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>linux</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/mpvue/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>mpvue</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/%E5%BE%AE%E4%BF%A1%E5%B0%8F%E7%A8%8B%E5%BA%8F/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>微信小程序</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/MySQL/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>MySQL</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/%E6%8A%A5%E9%94%99/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>报错</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/vue/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>vue</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/Git/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Git</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/VMware/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>VMware</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/"><span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>更多</a></li></ul></div></div>

            <!-- 随笔分类 -->
            <div class="m-list-title" style="display: block;"><span>随笔分类</span></div>
            <div class="m-icon-list" id="sb-classify"><div><ul><li><a id="CatList_LinkList_0_Link_0" href="https://www.cnblogs.com/wangyang0210/category/1320149.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>微信开发(3)</a></li><li><a id="CatList_LinkList_0_Link_1" href="https://www.cnblogs.com/wangyang0210/category/1245038.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>CSS(6)</a></li><li><a id="CatList_LinkList_0_Link_2" href="https://www.cnblogs.com/wangyang0210/category/1236687.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Docker(1)</a></li><li><a id="CatList_LinkList_0_Link_3" href="https://www.cnblogs.com/wangyang0210/category/1374898.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Echarts(3)</a></li><li><a id="CatList_LinkList_0_Link_4" href="https://www.cnblogs.com/wangyang0210/category/1393984.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Git(9)</a></li><li><a id="CatList_LinkList_0_Link_5" href="https://www.cnblogs.com/wangyang0210/category/1236684.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>GitHub Desktop(5)</a></li><li><a id="CatList_LinkList_0_Link_6" href="https://www.cnblogs.com/wangyang0210/category/1454692.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>HBuilderX(1)</a></li><li><a id="CatList_LinkList_0_Link_7" href="https://www.cnblogs.com/wangyang0210/category/1236689.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>JavaScript(30)</a></li><li><a id="CatList_LinkList_0_Link_8" href="https://www.cnblogs.com/wangyang0210/category/1340356.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>laravel(4)</a></li><li><a id="CatList_LinkList_0_Link_9" href="https://www.cnblogs.com/wangyang0210/category/1236693.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Linux(19)</a></li><li><a id="CatList_LinkList_0_Link_10" href="https://www.cnblogs.com/wangyang0210/category/1238707.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Markdown(1)</a></li><li><a id="CatList_LinkList_0_Link_11" href="https://www.cnblogs.com/wangyang0210/category/1308337.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>MySQL(10)</a></li><li><a id="CatList_LinkList_0_Link_12" href="https://www.cnblogs.com/wangyang0210/category/1236679.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>PHP(38)</a></li><li><a id="CatList_LinkList_0_Link_13" href="https://www.cnblogs.com/wangyang0210/category/1369267.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Redis(4)</a></li><li><a id="CatList_LinkList_0_Link_14" href="https://www.cnblogs.com/wangyang0210/category/1236682.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Sublime text(6)</a></li><li><a id="CatList_LinkList_0_Link_15" href="https://www.cnblogs.com/wangyang0210/category/1340355.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>ThinkPHP5(8)</a></li><li><a id="CatList_LinkList_0_Link_16" href="https://www.cnblogs.com/wangyang0210/category/1281056.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>VMware(6)</a></li><li><a id="CatList_LinkList_0_Link_17" href="https://www.cnblogs.com/wangyang0210/category/1369266.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Vue(21)</a></li><li><a id="CatList_LinkList_0_Link_18" href="https://www.cnblogs.com/wangyang0210/category/1369462.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>wamp(3)</a></li><li><a id="CatList_LinkList_0_Link_19" href="https://www.cnblogs.com/wangyang0210/category/1392496.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>web scraper(4)</a></li><li><a id="CatList_LinkList_0_Link_20" href="https://www.cnblogs.com/wangyang0210/category/1398213.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>webpack(3)</a></li><li><a id="CatList_LinkList_0_Link_21" href="https://www.cnblogs.com/wangyang0210/category/1437966.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>workerman(3)</a></li><li><a id="CatList_LinkList_0_Link_22" href="https://www.cnblogs.com/wangyang0210/category/1308851.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>阿里云(3)</a></li><li><a id="CatList_LinkList_0_Link_23" href="https://www.cnblogs.com/wangyang0210/category/1308339.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>报错总结(14)</a></li><li><a id="CatList_LinkList_0_Link_24" href="https://www.cnblogs.com/wangyang0210/category/1411421.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>浏览器(1)</a></li><li><a id="CatList_LinkList_0_Link_25" href="https://www.cnblogs.com/wangyang0210/category/1375315.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>小程序(25)</a></li><li><a id="CatList_LinkList_0_Link_26" href="https://www.cnblogs.com/wangyang0210/category/1278939.html"><span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>学习总结(7)</a></li></ul></div></div>

            <!-- 随笔档案 -->
            <div class="m-list-title" style="display: block;"><span>随笔档案</span></div>
            <div class="m-icon-list" id="sb-record"><div><ul><li><a id="CatList_LinkList_1_Link_0" href="https://www.cnblogs.com/wangyang0210/archive/2019/07.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年7月 (8)</a></li><li><a id="CatList_LinkList_1_Link_1" href="https://www.cnblogs.com/wangyang0210/archive/2019/06.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年6月 (12)</a></li><li><a id="CatList_LinkList_1_Link_2" href="https://www.cnblogs.com/wangyang0210/archive/2019/05.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年5月 (20)</a></li><li><a id="CatList_LinkList_1_Link_3" href="https://www.cnblogs.com/wangyang0210/archive/2019/04.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年4月 (35)</a></li><li><a id="CatList_LinkList_1_Link_4" href="https://www.cnblogs.com/wangyang0210/archive/2019/03.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年3月 (11)</a></li><li><a id="CatList_LinkList_1_Link_5" href="https://www.cnblogs.com/wangyang0210/archive/2019/02.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年2月 (24)</a></li><li><a id="CatList_LinkList_1_Link_6" href="https://www.cnblogs.com/wangyang0210/archive/2019/01.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2019年1月 (23)</a></li><li><a id="CatList_LinkList_1_Link_7" href="https://www.cnblogs.com/wangyang0210/archive/2018/12.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年12月 (27)</a></li><li><a id="CatList_LinkList_1_Link_8" href="https://www.cnblogs.com/wangyang0210/archive/2018/11.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年11月 (6)</a></li><li><a id="CatList_LinkList_1_Link_9" href="https://www.cnblogs.com/wangyang0210/archive/2018/10.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年10月 (5)</a></li><li><a id="CatList_LinkList_1_Link_10" href="https://www.cnblogs.com/wangyang0210/archive/2018/09.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年9月 (18)</a></li><li><a id="CatList_LinkList_1_Link_11" href="https://www.cnblogs.com/wangyang0210/archive/2018/08.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年8月 (17)</a></li><li><a id="CatList_LinkList_1_Link_12" href="https://www.cnblogs.com/wangyang0210/archive/2018/07.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年7月 (2)</a></li><li><a id="CatList_LinkList_1_Link_13" href="https://www.cnblogs.com/wangyang0210/archive/2018/06.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年6月 (7)</a></li><li><a id="CatList_LinkList_1_Link_14" href="https://www.cnblogs.com/wangyang0210/archive/2018/05.html"><span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>2018年5月 (4)</a></li></ul></div></div>

            <!-- 阅读排行 -->
            <div class="m-list-title" style="display: block;"><span>阅读排行</span></div>
            <div class="m-icon-list" id="sb-topview"><div><ul><li><a href="https://www.cnblogs.com/wangyang0210/p/9765031.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>【Sublime Text3】Package Control：Install Package不能使用解决方法(11613)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9187761.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>PHP Switch 语句判断成绩(3433)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10417976.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>mpvue——页面跳转(2292)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9004644.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>【Linux】Centos7 解压zip文件(1691)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10406821.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>微信小程序——报错汇总(1639)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10309348.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Vue——轻松实现vue底部点击加载更多(1327)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9783662.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Sublime Text3配置及控制台乱码[cmd杀死进程乱码/编译文件乱码]解决方法(1302)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10111641.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>share.js轻松分享/邀请(1253)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10261049.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Sublime Text3 如何开启Debug(1114)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/8990144.html"><span class="iconfont icon-browse_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>GitHub Desktop 如何创建本地仓库，上传代码，删除仓库(1102)</a></li></ul></div></div>

            <!-- 推荐排行 -->
            <div class="m-list-title" style="display: block;"><span>推荐排行</span></div>
            <div class="m-icon-list" id="sb-topDiggPosts"><div><ul><li><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>博客园美化主题——只需一分钟(9)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10050895.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>博客园添加打赏功能只需简单四步(4)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10111641.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>share.js轻松分享/邀请(2)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9797234.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>【微信开发】订阅号的创建、根据关键词回复文本，视频，图片，音频(2)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10971609.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>TP5.x——开启跨域访问(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10683139.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>mpvue——动态渲染echarts图表(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10015855.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>PHP生成二维码并上传到七牛云(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9783662.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Sublime Text3配置及控制台乱码[cmd杀死进程乱码/编译文件乱码]解决方法(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10410494.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>mpvue——引入iconfont字体图标(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10309348.html"><span class="iconfont icon-like_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>Vue——轻松实现vue底部点击加载更多(1)</a></li></ul></div></div>

            <!-- 自定义列表 -->
            <span id="menuCustomList"></span>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
        <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                <path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"></path>
            <desc>Created with Snap</desc><defs></defs></svg>
        </div>
    </div><div class="optiscroll-v"><b class="optiscroll-vtrack" style="height: 20%; transform: translate(0%, 0%);"></b></div><div class="optiscroll-h"><b class="optiscroll-htrack"></b></div></div>
    <button class="menu-button" id="open-button">MENU</button>
    <div class="content-wrap" id="content-wrap" style="display: none;"></div><!-- /content-wrap -->
</div>
<!-- menu html end -->

<!-- banner start -->
<div class="main-header" style="background: url(<?php $this->options->indexpicUrl() ?>) center center / cover no-repeat rgb(34, 34, 34); overflow: hidden;">
<canvas id="notHomeTopCanvas" style=" position: absolute;margin: auto;width: 100%;height: 100%;top: 0;bottom: 0;left: 0;right: 0;"></canvas>
    <!-- logo and text start -->
    <div class="vertical">
        <div class="main-header-content inner">
        <?php if ($this->options->logoUrl) : ?>
            <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            </a>
        <?php else: ?>
            <h1 class="page-title" style="font-family: 'Playball', cursive;" id="homeTopTitle"><?php $this->options->title() ?></h1>
            <h2 class="page-description" id="hitokoto" style="display: -webkit-box;"><?php $this->options->selfdiscribition() ?></h2>
            <!-- <h3 class="page-author" id="hitokotoAuthor" style="display: block;">- 伊塔洛·卡尔维诺</h3> -->
        <?php endif; ?>
        </div>
    </div>
    <!-- logo and text end -->
    <a class="scroll-down" href="javascript:void(0);" data-offset="-45">
        <span class="hidden">Scroll Down</span>
        <i class="scroll-down-icon iconfont icon-fanhui"></i>
    </a>
    <div id="homeTopCanvas" width="1893" height="952" style="position: absolute; left: 0px; bottom: 0px; display: block;"></div>
</div>
<!-- banner  end -->


<!-- global var -->
</div>

			<div id="blog-calendar" style="display: block;"><table id="blogCalendar" class="Cal" cellspacing="0" cellpadding="0" title="Calendar">
	<tbody><tr><td colspan="7"><table class="CalTitle" cellspacing="0">
		<tbody><tr><td class="CalNextPrev"><a href="javascript:void(0);" onclick="loadBlogCalendar('2019/06/01');return false;">&lt;</a></td><td align="center">2019年7月</td><td class="CalNextPrev" align="right"><a href="javascript:void(0);" onclick="loadBlogCalendar('2019/08/01');return false;">&gt;</a></td></tr>
	</tbody></table></td></tr><tr><th class="CalDayHeader" align="center" abbr="日" scope="col">日</th><th class="CalDayHeader" align="center" abbr="一" scope="col">一</th><th class="CalDayHeader" align="center" abbr="二" scope="col">二</th><th class="CalDayHeader" align="center" abbr="三" scope="col">三</th><th class="CalDayHeader" align="center" abbr="四" scope="col">四</th><th class="CalDayHeader" align="center" abbr="五" scope="col">五</th><th class="CalDayHeader" align="center" abbr="六" scope="col">六</th></tr><tr><td class="CalOtherMonthDay" align="center">30</td><td align="center"><a href="https://www.cnblogs.com/wangyang0210/archive/2019/07/01.html"><u>1</u></a></td><td align="center">2</td><td align="center">3</td><td align="center">4</td><td align="center">5</td><td class="CalWeekendDay" align="center">6</td></tr><tr><td class="CalWeekendDay" align="center">7</td><td align="center">8</td><td align="center">9</td><td align="center"><a href="https://www.cnblogs.com/wangyang0210/archive/2019/07/10.html"><u>10</u></a></td><td align="center">11</td><td align="center">12</td><td class="CalWeekendDay" align="center">13</td></tr><tr><td class="CalWeekendDay" align="center">14</td><td align="center">15</td><td align="center"><a href="https://www.cnblogs.com/wangyang0210/archive/2019/07/16.html"><u>16</u></a></td><td align="center"><a href="https://www.cnblogs.com/wangyang0210/archive/2019/07/17.html"><u>17</u></a></td><td align="center">18</td><td align="center">19</td><td class="CalWeekendDay" align="center">20</td></tr><tr><td class="CalWeekendDay" align="center">21</td><td align="center">22</td><td align="center"><a href="https://www.cnblogs.com/wangyang0210/archive/2019/07/23.html"><u>23</u></a></td><td class="CalTodayDay" align="center">24</td><td align="center">25</td><td align="center">26</td><td class="CalWeekendDay" align="center">27</td></tr><tr><td class="CalWeekendDay" align="center">28</td><td align="center">29</td><td align="center">30</td><td align="center">31</td><td class="CalOtherMonthDay" align="center">1</td><td class="CalOtherMonthDay" align="center">2</td><td class="CalOtherMonthDay" align="center">3</td></tr><tr><td class="CalOtherMonthDay" align="center">4</td><td class="CalOtherMonthDay" align="center">5</td><td class="CalOtherMonthDay" align="center">6</td><td class="CalOtherMonthDay" align="center">7</td><td class="CalOtherMonthDay" align="center">8</td><td class="CalOtherMonthDay" align="center">9</td><td class="CalOtherMonthDay" align="center">10</td></tr>
</tbody></table></div><script type="text/javascript">loadBlogDefaultCalendar();</script>
			
			<div id="leftcontentcontainer">
				<div id="blog-sidecolumn"><div id="sidebar_search" class="sidebar-block">
<div id="sidebar_search" class="mySearch">
<h3 class="catListTitle">搜索</h3>
<div id="sidebar_search_box">
<div id="widget_my_zzk" class="div_my_zzk"><input type="text" id="q" onkeydown="return zzk_go_enter(event);" class="input_my_zzk">&nbsp;<input onclick="zzk_go()" type="button" value="找找看" id="btnZzk" class="btn_my_zzk"></div>

</div>
</div>

</div><div id="sidebar_shortcut" class="sidebar-block">
<div class="catListLink">
<h3 class="catListTitle">常用链接</h3>
<ul>
<li><a href="https://www.cnblogs.com/wangyang0210/p/" title="我的博客的随笔列表">我的随笔</a></li><li><a href="https://www.cnblogs.com/wangyang0210/MyComments.html" title="我发表过的评论列表">我的评论</a></li><li><a href="https://www.cnblogs.com/wangyang0210/OtherPosts.html" title="我评论过的随笔列表">我的参与</a></li><li><a href="https://www.cnblogs.com/wangyang0210/RecentComments.html" title="我的博客的评论列表">最新评论</a></li><li><a href="https://www.cnblogs.com/wangyang0210/tag/" title="我的博客的标签列表">我的标签</a></li>
</ul>
<div id="itemListLin_con" style="display:none;">
<ul>

</ul>
</div>
</div></div><div id="sidebar_recentposts" class="sidebar-block">
<div class="catListEssay">
<h3 class="catListTitle">最新随笔</h3>
<ul>
<li><a href="https://www.cnblogs.com/wangyang0210/p/11229707.html">1. Fiddler——手机端无法安装证书</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11202200.html">2. Go——报错总结</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11202053.html">3. Linux——自定义服务命令</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11196363.html">4. windows——快速得到某一目录下所有文件的名称</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11161794.html">5. 七牛云——qshell一个神奇的工具</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11161711.html">6. 七牛云——批量将本地图片上传到七牛云</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11115690.html">7. web scraper——爬取知乎|微博用户数据模板【三】</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11114533.html">8. PHP——仿造微信OpenId</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11076382.html">9. PHP——巧用PHP函数array_merge()合并数组</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/11081076.html">10. JavaScript——图片懒加载</a></li>
</ul>
</div>
</div><div id="sidebar_toptags" class="sidebar-block">
<div class="catListTag">
<h3 class="catListTitle">我的标签</h3>
<ul>
<li><a href="https://www.cnblogs.com/wangyang0210/tag/php/">php</a>(38)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/JavaScript/">JavaScript</a>(25)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/linux/">linux</a>(16)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/mpvue/">mpvue</a>(16)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/%E5%BE%AE%E4%BF%A1%E5%B0%8F%E7%A8%8B%E5%BA%8F/">微信小程序</a>(11)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/MySQL/">MySQL</a>(11)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/%E6%8A%A5%E9%94%99/">报错</a>(11)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/vue/">vue</a>(11)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/Git/">Git</a>(10)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/VMware/">VMware</a>(8)</li><li><a href="https://www.cnblogs.com/wangyang0210/tag/">更多</a></li>
</ul>
</div></div><div id="sidebar_myteams" class="sidebar-block"></div><div id="sidebar_categories">
<div id="sidebar_postcategory" class="catListPostCategory sidebar-block">
<h3 class="catListTitle">随笔分类<span style="font-size:11px;font-weight:normal">(238)</span></h3>

<ul>

<li><a id="CatList_LinkList_0_Link_0" href="https://www.cnblogs.com/wangyang0210/category/1320149.html"> 微信开发(3)</a> </li>

<li><a id="CatList_LinkList_0_Link_1" href="https://www.cnblogs.com/wangyang0210/category/1245038.html">CSS(6)</a> </li>

</ul>

</div>

<div id="sidebar_postarchive" class="catListPostArchive sidebar-block">
<h3 class="catListTitle">随笔档案<span style="font-size:11px;font-weight:normal">(219)</span></h3>

<ul>

<li><a id="CatList_LinkList_1_Link_0" href="https://www.cnblogs.com/wangyang0210/archive/2019/07.html">2019年7月 (8)</a> </li>



</ul>

</div>

<div id="sidebar_articlearchive" class="catListArticleArchive sidebar-block">
<h3 class="catListTitle">文章档案<span style="font-size:11px;font-weight:normal">(3)</span></h3>

<ul>

<li><a id="CatList_LinkList_2_Link_0" href="https://www.cnblogs.com/wangyang0210/archives/2018/09.html" rel="nofollow">2018年9月 (1)</a> </li>

</ul>

</div>


</div>
<div id="sidebar_recentcomments" class="sidebar-block"><div id="recent_comments_wrap">
<div class="catListComment">
<h3 class="catListTitle">最新评论</h3>

	<div id="RecentCommentsBlock"><ul>
        <li class="recent_comment_title"><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html#4301619">1. Re:博客园美化主题——只需一分钟</a></li>
        <li class="recent_comment_body">@PHP--啪啪啪阿伟,厉害啊~...</li>
        <li class="recent_comment_author">--。思索</li>
        <li class="recent_comment_title"><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html#4301617">2. Re:博客园美化主题——只需一分钟</a></li>
        <li class="recent_comment_body">@蜜柑星上面是博皮作者的教程,他好像更新了新的东西,我的是在之前的基础上进行改的,如果你改动的时候有什么问题可以再问我....</li>
        <li class="recent_comment_author">--。思索</li>
        <li class="recent_comment_title"><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html#4301616">3. Re:博客园美化主题——只需一分钟</a></li>
        <li class="recent_comment_body">@蜜柑星...</li>
        <li class="recent_comment_author">--。思索</li>
        <li class="recent_comment_title"><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html#4299662">4. Re:博客园美化主题——只需一分钟</a></li>
        <li class="recent_comment_body">谢谢阿洋老哥的分享，页面不错，收下了，嘿嘿</li>
        <li class="recent_comment_author">--PHP--啪啪啪</li>
        <li class="recent_comment_title"><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html#4299660">5. Re:博客园美化主题——只需一分钟</a></li>
        <li class="recent_comment_body">博主。能问一下您现在的博客是怎么设置的吗</li>
        <li class="recent_comment_author">--蜜柑星</li>
</ul>
</div>
</div>
</div></div><div id="sidebar_topviewedposts" class="sidebar-block"><div id="topview_posts_wrap">
<div class="catListView">
<h3 class="catListTitle">阅读排行榜</h3>
	<div id="TopViewPostsBlock"><ul><li><a href="https://www.cnblogs.com/wangyang0210/p/9765031.html">1. 【Sublime Text3】Package Control：Install Package不能使用解决方法(11613)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9187761.html">2. PHP Switch 语句判断成绩(3433)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10417976.html">3. mpvue——页面跳转(2292)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9004644.html">4. 【Linux】Centos7 解压zip文件(1691)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10406821.html">5. 微信小程序——报错汇总(1639)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10309348.html">6. Vue——轻松实现vue底部点击加载更多(1327)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9783662.html">7. Sublime Text3配置及控制台乱码[cmd杀死进程乱码/编译文件乱码]解决方法(1302)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10111641.html">8. share.js轻松分享/邀请(1253)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10261049.html">9. Sublime Text3 如何开启Debug(1114)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/8990144.html">10. GitHub Desktop 如何创建本地仓库，上传代码，删除仓库(1102)</a></li></ul></div>
</div>
</div></div><div id="sidebar_topcommentedposts" class="sidebar-block"><div id="topfeedback_posts_wrap">
<div class="catListFeedback">
<h3 class="catListTitle">评论排行榜</h3>
	<div id="TopFeedbackPostsBlock"><ul><li><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html">1. 博客园美化主题——只需一分钟(19)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10417976.html">2. mpvue——页面跳转(10)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9546159.html">3. JavaScript实现表单的全选,反选,获取值(6)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10111641.html">4. share.js轻松分享/邀请(5)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9797234.html">5. 【微信开发】订阅号的创建、根据关键词回复文本，视频，图片，音频(5)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/8990155.html">6. JS热身课后习题(2)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9497427.html">7. VMware配置Linux虚拟机访问外网(2)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10116902.html">8. 如何统计自己博客园的博客访问量(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10050895.html">9. 博客园添加打赏功能只需简单四步(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9975804.html">10. 微信access_token请求之简单缓存方法封装(1)</a></li></ul></div>
</div>
</div></div><div id="sidebar_topdiggedposts" class="sidebar-block"><div id="topdigg_posts_wrap">
<div class="catListView">
<h3 class="catListTitle">推荐排行榜</h3>
<div id="TopDiggPostsBlock"><ul><li><a href="https://www.cnblogs.com/wangyang0210/p/9488438.html">1. 博客园美化主题——只需一分钟(9)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10050895.html">2. 博客园添加打赏功能只需简单四步(4)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10111641.html">3. share.js轻松分享/邀请(2)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9797234.html">4. 【微信开发】订阅号的创建、根据关键词回复文本，视频，图片，音频(2)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10971609.html">5. TP5.x——开启跨域访问(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10683139.html">6. mpvue——动态渲染echarts图表(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10015855.html">7. PHP生成二维码并上传到七牛云(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/9783662.html">8. Sublime Text3配置及控制台乱码[cmd杀死进程乱码/编译文件乱码]解决方法(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10410494.html">9. mpvue——引入iconfont字体图标(1)</a></li><li><a href="https://www.cnblogs.com/wangyang0210/p/10309348.html">10. Vue——轻松实现vue底部点击加载更多(1)</a></li></ul></div>
</div></div></div></div><script type="text/javascript">loadBlogSideColumn();</script>
			</div>
			
		</div><!--end: sideBarMain -->
	</div><!--end: sideBar 侧边栏容器 -->
	<div class="clear"></div>
    </div>
    
