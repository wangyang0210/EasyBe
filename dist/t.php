<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<div id="sideBar">
    <div id="sideBarMain">
        <div id="sidebar_news" class="newsItem">

            <div id="blog-news">
                <div id="profile_block">
                    昵称：
                    <a id="info_name" href="javascript:void(0)">
                        。思索
                    </a>
                    <br>
                    职业：
                    <a id="info_job" href="javascript:void(0)">
                        野生猿
                    </a>
                    <br>
                    坐标：
                    <a id="info_postion" href="javascript:void(0)">
                        上海
                    </a>
                    <br>
                    格言：
                    <a id="info_proverb" href="javascript:void(0)">
                        学无止境,谦卑而行
                    </a>
                </div>
            </div>

        </div>
        <div id="sidebar_c3"></div>
        <div id="blog-calendar" style=""></div>
        <div id="leftcontentcontainer">
            <div id="blog-sidecolumn"><!-- 搜索 -->
                <div id="sidebar_search" class="sidebar-block">
                    <div id="sidebar_search" class="mySearch">
                        <h3 class="catListTitle">搜索</h3>
                        <div id="sidebar_search_box">
                            <div id="widget_my_zzk" class="div_my_zzk">
                                <form method="post">
                                    <input type="text" id="q" name="s" class="input_my_zzk" />
                                    <input type="button" value="找找看" id="btnZzk" class="btn_my_zzk">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 常用链接 -->
                <div id="sidebar_shortcut" class="sidebar-block">
                    <div class="catListLink">
                        <h3 class="catListTitle">
                            常用链接
                        </h3>
                        <ul>
                            <li><a href="https://www.cnblogs.com/wangyang1225/p/" title="我的博客的随笔列表">我的随笔</a></li>
                            <li><a href="https://www.cnblogs.com/wangyang1225/MyComments.html"
                                   title="我的发表过的评论列表">我的评论</a></li>
                            <li><a href="https://www.cnblogs.com/wangyang1225/OtherPosts.html"
                                   title="我评论过的随笔列表">我的参与</a></li>
                            <li><a href="https://www.cnblogs.com/wangyang1225/comments" title="我的博客的评论列表">最新评论</a></li>
                            <li><a href="https://www.cnblogs.com/wangyang1225/tag/" title="我的博客的标签列表">我的标签</a></li>

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
                            <li>

                                <a href="https://www.cnblogs.com/wangyang1225/p/16533332.html">2.友联测试</a>

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
                                28
                            </li>
                            <li class="liRank">
                                排名 -
                                467000
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
                            <a href="https://www.cnblogs.com/wangyang1225/most-viewed" class="sidebar-card-title-a">
                                阅读排行榜
                            </a>

                        </h3>
                        <div id="TopViewPostsBlock">
                            <ul style="word-break:break-all">
                                <li>
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16533138.html">
                                        1. 代码块(11)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16533332.html">
                                        2. 友联测试(7)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16524958.html">
                                        3. 测试(6)
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
                            <a href="https://www.cnblogs.com/wangyang1225/most-commented" class="sidebar-card-title-a">评论排行榜</a>

                        </h3>
                        <div id="TopFeedbackPostsBlock">
                            <ul style="word-break:break-all">
                                <li>
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16524958.html">
                                        1. 测试(3)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16535598.html">
                                        2. 文章内容测试(2)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16533138.html">
                                        3. 代码块(1)
                                    </a>
                                </li>
                            </ul>
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
                            <ul>
                                <li class="recent_comment_title"><a
                                            href="https://www.cnblogs.com/wangyang1225/p/16535598.html">1. Re:文章内容测试</a>
                                </li>
                                <li class="recent_comment_body"><p>测试一下</p>
                                </li>
                                <li class="recent_comment_author">--WangYang1225</li>
                                <li class="recent_comment_title"><a
                                            href="https://www.cnblogs.com/wangyang1225/p/16535598.html">2. Re:文章内容测试</a>
                                </li>
                                <li class="recent_comment_body"><p>学而思</p>
                                </li>
                                <li class="recent_comment_author">--WangYang1225</li>
                                <li class="recent_comment_title"><a
                                            href="https://www.cnblogs.com/wangyang1225/p/16533138.html">3. Re:代码块</a>
                                </li>
                                <li class="recent_comment_body"><p>vfgg</p>
                                </li>
                                <li class="recent_comment_author">--WangYang1225</li>
                                <li class="recent_comment_title"><a
                                            href="https://www.cnblogs.com/wangyang1225/p/16524958.html">4. Re:测试</a>
                                </li>
                                <li class="recent_comment_body"><p>..............123</p>
                                </li>
                                <li class="recent_comment_author">--WangYang1225</li>
                                <li class="recent_comment_title"><a
                                            href="https://www.cnblogs.com/wangyang1225/p/16524958.html">5. Re:测试</a>
                                </li>
                                <li class="recent_comment_body"><p>????</p>
                                </li>
                                <li class="recent_comment_author">--WangYang1225</li>
                            </ul>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div><!--end: sideBarMain -->
</div>
