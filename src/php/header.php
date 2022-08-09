<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('simpleMemory.css'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<!--done-->
<div id="home">
    <div id="header">
        <div id="blogTitle">
            <a id="lnkBlogLogo" href="https://www.cnblogs.com/wangyang1225/">
                <img id="blogLogo" src="/skins/custom/images/logo.gif" alt="返回主页">
            </a>
            <!--done-->
            <h1>
                <a id="Header1_HeaderTitle" class="headermaintitle HeaderMainTitle" href="https://www.cnblogs.com/wangyang1225/">wangyang1225</a>
            </h1>
            <h2></h2>
        </div><!--end: blogTitle 博客的标题和副标题 -->
        <div id="navigator">
            <ul id="navList">
                <li>
                    <a id="blog_nav_sitehome" class="menu" href="https://www.cnblogs.com/">博客园</a>
                </li>
                <li>
                    <a id="blog_nav_myhome" class="menu" href="https://www.cnblogs.com/wangyang1225/">首页</a>
                </li>
                <li>
                    <a id="blog_nav_newpost" class="menu" href="https://i.cnblogs.com/EditPosts.aspx?opt=1">新随笔</a>
                </li>
                <li>
                    <a id="blog_nav_contact" class="menu" href="https://msg.cnblogs.com/send/WangYang1225">联系</a></li>
                <li>
                    <a id="blog_nav_rss" class="menu" href="javascript:void(0)" data-rss="https://www.cnblogs.com/wangyang1225/rss/">订阅</a>
                    <!--<partial name="./Shared/_XmlLink.cshtml" model="Model" /></li>--></li>
                <li>
                    <a id="blog_nav_admin" class="menu" href="https://i.cnblogs.com/">管理</a>
                </li>
            </ul>
            <div class="blogStats">
                <span id="stats_post_count">随笔 - 4&nbsp; </span>
                <span id="stats_article_count">文章 - 0&nbsp; </span>
                <span id="stats-comment_count">评论 - 4&nbsp; </span>
                <span id="stats-total-view-count">阅读 -<span title="总阅读数: 23">23</span></span>
            </div><!--end: blogStats -->
        </div><!--end: navigator 博客导航栏 -->
    </div><!--end: header 头部 -->
    <div id="main">
        <div id="sideBar">
            <div id="sideBarMain">
                <div id="sidebar_news" class="newsItem"><!--done-->
                    <h3 class="catListTitle">公告</h3>
                    <div id="blog-news">
                        <div id="profile_block">
                            昵称：
                            <a href="https://home.cnblogs.com/u/wangyang1225/">
                                WangYang1225
                            </a>
                            <br>
                            园龄：
                            <a href="https://home.cnblogs.com/u/wangyang1225/" title="入园时间：2022-07-25">
                                15天
                            </a>
                            <br>
                            粉丝：
                            <a class="follower-count" href="https://home.cnblogs.com/u/wangyang1225/followers/">
                                0
                            </a>
                            <br>
                            关注：
                            <a class="folowing-count" href="https://home.cnblogs.com/u/wangyang1225/followees/">
                                1
                            </a>
                            <div id="p_b_follow" class="follow-tip"></div>
                        </div>
                    </div>
                </div>
                <div id="sidebar_c3"></div>
                <div id="blog-calendar" style="">

                </div>
                <div id="leftcontentcontainer">
                    <div id="blog-sidecolumn"><!-- 搜索 -->
                        <div id="sidebar_search" class="sidebar-block">
                            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                                <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                                <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>"/>
                                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                            </form>
                        </div>

                        <!-- 常用链接 -->
                        <div id="sidebar_shortcut" class="sidebar-block">
                            <div class="catListLink">
                                <h3 class="catListTitle">
                                    常用链接
                                </h3>
                                <ul>
                                    <li><a href="https://www.cnblogs.com/wangyang1225/p/" title="我的博客的随笔列表">我的随笔</a>
                                    </li>
                                    <li><a href="https://www.cnblogs.com/wangyang1225/MyComments.html"
                                           title="我的发表过的评论列表">我的评论</a></li>
                                    <li><a href="https://www.cnblogs.com/wangyang1225/OtherPosts.html"
                                           title="我评论过的随笔列表">我的参与</a></li>
                                    <li><a href="https://www.cnblogs.com/wangyang1225/comments"
                                           title="我的博客的评论列表">最新评论</a></li>
                                    <li><a href="https://www.cnblogs.com/wangyang1225/tag/" title="我的博客的标签列表">我的标签</a>
                                    </li>

                                </ul>
                            </div>

                        </div>

                        <!-- 最新随笔 -->
                        <div id="sidebar_recentposts" class="sidebar-block">
                            <div class="catListEssay">
                                <h3 class="catListTitle">最新随笔</h3>
                                <ul>
                                    <li>

                                        <a href="https://www.cnblogs.com/wangyang1225/p/16535598.html">1.文章内容测试</a>

                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- 我的标签 -->
                        <div id="sidebar_toptags" class="sidebar-block"></div>

                        <!-- 积分与排名 -->
                        <div id="sidebar_scorerank" class="sidebar-block">
                            <div class="catListBlogRank">
                                <h3 class="catListTitle">积分与排名</h3>
                                <ul>
                                    <li class="liScore">
                                        积分 -
                                        23
                                    </li>
                                    <li class="liRank">
                                        排名 -
                                        469648
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <!-- 随笔分类、随笔档案、文章分类、新闻分类、相册、链接 -->
                        <div id="sidebar_categories">

                            <div id="sidebar_postarchive" class="catListPostArchive sidebar-block">
                                <h3 class="catListTitle">

                                    随笔档案<span class="sidebar-category-item-count">
    (4)
</span>


                                </h3>

                                <ul>

                                    <li data-category-list-item-visible="true" style="display: block">

                                        <a href="https://www.cnblogs.com/wangyang1225/archive/2022/07.html"
                                           class="category-item-link" rel="" target="">2022年7月(4)</a>

                                    </li>

                                </ul>


                            </div>
                        </div>

                        <!-- 最新评论 -->
                        <!-- 阅读排行榜 -->
                        <div id="sidebar_topviewedposts" class="sidebar-block">
                            <div class="catListView">
                                <h3 class="catListTitle">
                                    <a href="https://www.cnblogs.com/wangyang1225/most-viewed"
                                       class="sidebar-card-title-a">
                                        阅读排行榜
                                    </a>

                                </h3>
                                <div id="TopViewPostsBlock">
                                    <ul style="word-break:break-all">
                                        <li>
                                            <a href="https://www.cnblogs.com/wangyang1225/p/16533138.html">
                                                1. 代码块(10)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.cnblogs.com/wangyang1225/p/16533332.html">
                                                2. 友联测试(7)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 评论排行榜 -->
                        <div id="sidebar_topcommentedposts" class="sidebar-block">
                            <div class="catListFeedback">
                                <h3 class="catListTitle">
                                    <a href="https://www.cnblogs.com/wangyang1225/most-commented"
                                       class="sidebar-card-title-a">评论排行榜</a>
                                </h3>
                                <div id="TopFeedbackPostsBlock">

                                </div>
                            </div>
                        </div>

                        <!-- 推荐排行榜 -->
                        <div id="sidebar_topdiggedposts" class="sidebar-block"></div>
                        <div id="sidebar_recentcomments" class="sidebar-block">
                            <div class="catListComment">
                                <h3 class="catListTitle"><a href="https://www.cnblogs.com/wangyang1225/comments"
                                                            class="sidebar-card-title-a">最新评论</a></h3>
                                <div class="RecentCommentBlock">
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div><!--end: sideBarMain -->
        </div><!--end: sideBar 侧边栏容器 -->

