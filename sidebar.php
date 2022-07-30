<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit;} ?>

<div class="container">
    <div class="menu-wrap optiscroll" id="menuWrap" style="display:none">
        <nav class="menu">
            <!-- 个人简介 -->
            <div class="introduce-box">
                <div class="introduce-head">
                    <div class="introduce-via" id="menuBlogAvatar"></div>
                </div>
                <div id="introduce">
                    昵称：
                    <a href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->adminName() ?>
                    </a>
                    <br>
                    职业：
                    <a href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->adminWorker() ?>
                    </a>
                    <br>
                    城市：
                    <a href="<?php $this->options->siteUrl(); ?>">
                    <?php $this->options->adminCity() ?>
                    </a>
                    <br>
                </div>
            </div>

            <!-- 导航 -->
            <div class="nav-title"></div>
            <div class="icon-list">
                <ul>
                    <li><a href="<?php $this->options->siteUrl(); ?>" target="_self">首页</a></li>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2752154874&amp;site=qq&amp;menu=yes" target="_blank">联系</a></li>
                    <li><a href="<?php $this->options->siteUrl(); ?>admin" target="_blank">管理</a></li>
                    <li><a href="<?php $this->options->siteUrl(); ?>admin/write-post.php" target="_blank">添加随笔</a></li>
                    <li><a href="https://github.com/wangyang0210" target="_blank">GitHub</a></li>
                    <li><a href="https://www.cnblogs.com/wangyang0210/" target="_blank">CNBlogs</a></li>
                </ul>
            </div>
            <!-- 最新随笔 -->
            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)) : ?>
                <div class="m-list-title" style="display: block;"><span><?php _e('最新文章'); ?></span></div>
                <div class="m-icon-list" id="sb-sidebarRecentposts">
                    <ul>
                        <li>
                        <?php $this->widget('Widget_Contents_Post_Recent')->parse(
                            '
                                <a href="{permalink}">
                                    <span class="iconfont icon-time_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>
                                    {title}
                                </a>
                            '
                        ); ?>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- 我的标签 -->
            <div class="m-list-title" style="display: block;"><span><?php _e('我的标签'); ?></span></div>
            <div class="m-icon-list" id="sb-toptags">
            <?php $this->widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
            <?php while($tags->next()): ?>
            <ul>
                <li>
                    <a rel="tag" href="<?php $tags->permalink(); ?>">
                        <span class="iconfont icon-label_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>
                        <?php $tags->name(); ?> (<?php $tags->count()?>)
                    </a>

                </li>
            </ul>
            <?php endwhile; ?>
            </div>

            <!-- 随笔分类 -->
            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)) : ?>
                <div class="m-list-title" style="display: block;"><span><?php _e('文章分类'); ?></span></div>
                <?php $this->widget('Widget_Metas_Category_List')->to($classify); ?>
                <?php while($classify->next()): ?>
                <div class="m-icon-list" id="sb-classify">
                    <ul>
                        <li>
                            <a rel="clsaaify" href="<?php $classify->permalink(); ?>">
                                <span class="iconfont icon-marketing_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>
                                <?php $classify->name(); ?> (<?php $classify->count()?>)
                            </a>
                        </li>
                    </ul>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <!-- 随笔档案 -->
            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)) : ?>
                <div class="m-list-title" style="display: block;"><span><?php _e('文章档案'); ?></span></div>
                <div class="m-icon-list" id="sb-record">
                    <ul>
                        <?php $this->widget('Widget_Contents_Post_Date', 'format=Y-m&type=month&limit=0')->parse(
                            '<li>
                                <a href="{permalink}">
                                    <span class="iconfont icon-task_fill" style="color: #888;font-size: 14px;margin-right: 5px;"></span>
                                    {date} ({count})
                                </a>
                            </li>'
                        ); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <!-- 阅读排行 -->
            <div class="m-list-title"><span>阅读排行</span></div>
            <div class="m-icon-list" id="sb-topview"></div>

            <!-- 推荐排行 -->
            <div class="m-list-title"><span>推荐排行</span></div>
            <div class="m-icon-list" id="sb-topDiggPosts"></div>

            <!-- 自定义列表 -->
            <span id="menuCustomList"></span>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
        <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                <path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
            </svg>
        </div>
    </div>
    <button class="menu-button" id="open-button">MENU</button>
    <div class="content-wrap" id="content-wrap"></div><!-- /content-wrap -->
</div>
<!-- menu html end -->

<!-- banner html -->
<div class="main-header">
    <canvas id="notHomeTopCanvas" style=" position: absolute;margin: auto;width: 100%;height: 100%;top: 0;bottom: 0;left: 0;right: 0;"></canvas>
    <div class="vertical">
        <div class="main-header-content inner">
            <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
            <h1 class="page-title" style="font-family: 'Playball', cursive;" id="homeTopTitle"></h1>
            <h2 class="page-description" id="hitokoto"></h2>
            <h3 class="page-author" id="hitokotoAuthor"></h3>
        </div>
    </div>
    <a class="scroll-down" href="javascript:void(0);" data-offset="-45">
        <span class="hidden">Scroll Down</span>
        <i class="scroll-down-icon iconfont icon-fanhui"></i>
    </a>
</div>
<!-- banner html end -->
