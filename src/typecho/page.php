<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (isset($_POST['digg']) && $_POST['digg'] == $this->cid) exit( strval(digg($this->cid)) ); ?>
<?php if (isset($_POST['bury']) && $_POST['bury'] == $this->cid) exit( strval(bury($this->cid)) ); ?>
<?php $this->need('header.php'); ?>
<div id="mainContent">
    <div class="forFlow">
        <div id="post_detail">
            <!--done-->
            <div id="topics">
                <div class="post">
                    <h1 class="postTitle" style="display: none">
                        <a id="cb_post_title_url" class="postTitle2 vertical-middle" href="<?php $this->permalink() ?>">
                            <span role="heading" aria-level="2"><?php $this->title() ?></span>
                        </a><button class="cnblogs-toc-button" title="显示目录导航" aria-expanded="false"></button>
                    </h1>
                    <div class="clear"></div>
                    <div class="postBody">
                        <div id="cnblogs_post_body" class="blogpost-body cnblogs-markdown">
                            <?php $this->content() ?>
                        </div>
                        <div class="clear"></div>
                        <div id="blog_post_info_block" role="contentinfo">
                            <div id="EntryTag">
                                标签: <?php $this->tags(', ', true, 'none'); ?>
                            </div>
                            <div id="blog_post_info">
                                <div id="green_channel">
                                    <?php $digg = $this->hidden ? array('digg' => 0, 'recording' => true) : getDiggNum($this->cid); ?>
                                    <?php $bury = $this->hidden ? array('bury' => 0, 'recording' => true) : getBuryNum($this->cid); ?>
                                    <a href="javascript:void(0);" id="green_channel_digg" onclick="digg('<?php $this->permalink(); ?>', <?php echo $this->cid; ?>)">推荐该文(<?php echo $digg['digg']; ?>)</a>
                                    <a id="green_channel_follow" onclick="follow();" href="javascript:void(0);">关注我</a>
                                    <a id="green_channel_wechat" href="javascript:void(0);" title="打赏博主" onclick="sponsor()"></a>
                                </div>
                                <div id="author_profile">
                                    <div class="clear"></div>
                                    <div id="author_profile_honor"></div>
                                </div>
                                <div id="div_digg">
                                    <div class="diggit" onclick="digg('<?php $this->permalink(); ?>', <?php echo $this->cid; ?>)">
                                        <span class="diggnum" id="digg_count"><?php echo $digg['digg']; ?></span>
                                    </div>
                                    <div class="buryit" onclick="bury('<?php $this->permalink(); ?>', <?php echo $this->cid; ?>)">
                                        <span class="burynum" id="bury_count"><?php echo $bury['bury']; ?></span>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="diggword" id="digg_tips">
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div><!--end: topics 文章、评论容器-->
        </div>
            <?php $this->need('comments.php'); ?>
    </div><!--end: forFlow -->
</div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
