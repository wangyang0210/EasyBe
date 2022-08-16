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

                <!-- 最新随笔 -->
                <div id="sidebar_recentposts" class="sidebar-block">
                    <div class="catListEssay">
                        <h3 class="catListTitle">最新随笔</h3>
                        <ul>
                            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)) : ?>
                                <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div id="sidebar_postcategory" class="catListPostCategory sidebar-block">
                    <h3 class="catListTitle">
                        <a class="sidebar-card-title-a">随笔分类</a>
                    </h3>
                    <ul>
                        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)) : ?>
                        <?php $this->widget('Widget_Metas_Category_List')->to($classify); ?>
                        <?php while($classify->next()): ?>
                            <li data-category-list-item-visible="true" style="display: block">
                                <a href="<?php $classify->permalink(); ?>" class="category-item-link" rel="" target=""> <?php $classify->name(); ?> (<?php $classify->count()?>)</a>
                            </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- 随笔档案 -->
                <div id="sidebar_categories">
                    <div id="sidebar_postarchive" class="catListPostArchive sidebar-block">
                        <h3 class="catListTitle">随笔档案</h3>
                        <ul>
                            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)) : ?>
                            <?php $this->widget('Widget_Contents_Post_Date', 'format=Y-m&type=month&limit=0')->parse('
                                <li data-category-list-item-visible="true" style="display: block">
                                    <a href="{permalink}"
                                       class="category-item-link" rel="" target="">{date} ({count})</a>
                                </li>
                            '); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- 我的标签 -->
                <div id="sidebar_toptags" class="sidebar-block">
                    <div class="catListTag">
                        <h3 class="catListTitle">我的标签</h3>
                        <ul>
                            <?php $this->widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
                            <?php while($tags->next()): ?>
                                <li><a rel="tag" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?><span class="tag-count">(<?php $tags->count()?>)</span></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>

                <!-- 阅读排行榜 -->
                <div id="sidebar_topviewedposts" class="sidebar-block">
                    <div class="catListView">
                        <h3 class="catListTitle">
                            <a href="https://www.cnblogs.com/wangyang1225/most-viewed" class="sidebar-card-title-a">
                                阅读排行榜
                            </a>
                        </h3>
                        <div id="TopViewPostsBlock">
<!--                            <ul style="word-break:break-all">-->
<!--                                <li>-->
<!--                                    <a href="https://www.cnblogs.com/wangyang1225/p/16533138.html">-->
<!--                                        1. 代码块(11)-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
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
<!--                            <ul style="word-break:break-all">-->
<!--                                <li>-->
<!--                                    <a href="https://www.cnblogs.com/wangyang1225/p/16524958.html">-->
<!--                                        1. 测试(3)-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </div>
                    </div>
                </div>

                <!-- 推荐排行榜 -->
                <div id="sidebar_topdiggedposts" class="sidebar-block"></div>

                <!-- 最新评论 -->
                <div id="sidebar_recentcomments" class="sidebar-block">
                    <div class="catListComment">
                        <h3 class="catListTitle">
                            <a href="https://www.cnblogs.com/wangyang1225/comments" class="sidebar-card-title-a">最新评论</a>
                        </h3>
                        <div class="RecentCommentBlock">
                            <ul>
                                <li class="recent_comment_title">
                                    <a href="https://www.cnblogs.com/wangyang1225/p/16535598.html">1. Re:文章内容测试</a>
                                </li>
                                <li class="recent_comment_body"><p>测试一下</p>
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
