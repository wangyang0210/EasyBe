<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit;
} ?>
<?php $this->need('header.php'); ?>

<div id="main">
    <div id="mainContent">
        <div class="forFlow">
            <div id="post_detail">
                <!--done-->
                <div id="topics">
                    <div class="post">
                        <h1 class="postTitle">
                            <a id="cb_post_title_url" class="postTitle2 post-del-title" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                        </h1>
                        <div class="clear"></div>
                        <div class="postBody">
                            <div id="cnblogs_post_body" class="blogpost-body cnblogs-markdown">
                                <?php $this->content(); ?>
                            </div>
                            <div class="clear"></div>
                            <div id="blog_post_info_block">
                                <div id="BlogPostCategory">
                                    分类: <?php $this->category(','); ?>
                                </div>
                                <div id="EntryTag">
                                    标签: <?php $this->tags(', ', true, 'none'); ?>
                                </div>
                                <div id="green_channel">
                                    <a href="javascript:void(0);" id="green_channel_digg" onclick="alert('开发中')">好文要顶</a>
                                    <a id="green_channel_follow" onclick="alert('开发中')" href="javascript:void(0);">关注我</a>
                                    <a id="green_channel_favorite" onclick="alert('开发中')" href="javascript:void(0);">收藏该文</a> 
                                </div>
                                <div class="clear"></div>
                                <div id="post_next_prev">
                                    上一篇：  <?php $this->thePrev('%s', '没有了'); ?>
                                    <br>
                                    下一篇:   <?php $this->theNext('%s', '没有了'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="postDesc">
                            <img src="<?php  $this->options->adminpicUrl(); ?>" class="author-thumb" alt="">
                            <span id="post-date"> <?php $this->date("Y-m-d H:i:s"); ?></span>&nbsp;
                            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->author(); ?></a> 
                            阅读(<span id="post_view_count"><?php get_post_view($this) ?></span>) 
                            评论(<span id="post_comment_count"><?php $this->commentsNum('%d'); ?></span>) 
                            <?php if($this->user->hasLogin()) :?>
                                <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div><!--end: topics 文章、评论容器-->
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
