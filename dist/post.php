<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (isset($_POST['agree']) && $_POST['agree'] == $this->cid) exit( strval(agree($this->cid)) ); ?>
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
                            <?php $this->content(); ?>
                        </div>
                        <div class="clear"></div>
                        <div id="blog_post_info_block" role="contentinfo">
                            <div id="EntryTag">
                                标签: <?php $this->tags(', ', true, 'none'); ?>
                            </div>
                            <div id="blog_post_info">
                                <div id="green_channel">
                                    <?php $agree = $this->hidden?array('agree' => 0, 'recording' => true):agreeNum($this->cid); ?>
                                    <a href="javascript:void(0);" id="green_channel_digg" onclick="agree('<?php $this->permalink(); ?>', <?php echo $this->cid; ?>)">推荐该文(<?php echo $agree['agree']; ?>)</a>
                                    <a id="green_channel_follow" onclick="follow();" href="javascript:void(0);">关注我</a>
                                    <a id="green_channel_favorite" onclick="addFavorite('<?php $this->title() ?>', '<?php $this->permalink(); ?>')" href="javascript:void(0);">收藏该文</a>
                                    <a id="green_channel_weibo" href="javascript:void(0);" title="分享至新浪微博" onclick="shareWeibo('<?php $this->permalink(); ?>', '<?php $this->title() ?>')"></a>
                                    <a id="green_channel_wechat" href="javascript:void(0);" title="分享至微信" onclick="shareOnWechat()"></a>
                                </div>
                                <div id="author_profile">
                                    <div id="author_profile_info" class="author_profile_info">
<!--                                        <a href="" target="_blank"><img src="" class="author_avatar" alt=""></a>-->
<!--                                        <div id="author_profile_detail" class="author_profile_info">-->
<!--                                            <a href="https://home.cnblogs.com/u/wangyang1225/">WangYang1225</a><br>-->
<!--                                            <a href="https://home.cnblogs.com/u/wangyang1225/followers/">粉丝 - <span class="follower-count">0</span></a>-->
<!--                                            <a href="https://home.cnblogs.com/u/wangyang1225/followees/">关注 - <span class="following-count">1</span></a><br>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="clear"></div>
                                    <div id="author_profile_honor"></div>
                                    <div id="author_profile_follow" class="follow-tip">
                                        <a href="javascript:void(0);" onclick="follow('50a7e35e-e940-4247-3515-08da6c40fc10');return false;">+加关注</a>
                                    </div>
                                </div>
                                <div id="div_digg">
                                    <div class="diggit" onclick="agree('<?php $this->permalink(); ?>', <?php echo $this->cid; ?>)">
                                        <span class="diggnum" id="digg_count"><?php echo $agree['agree']; ?></span>
                                    </div>
                                    <div class="buryit" onclick="votePost(16631057,'Bury')">
                                        <span class="burynum" id="bury_count">0</span>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="diggword" id="digg_tips">
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div id="post_next_prev">
                                <a class="p_n_p_prefix">« </a> 上一篇： <?php $this->thePrev('%s', '我也是有上限的哦,(✿◡‿◡)'); ?> </a>
                                <br>
                                <a class="p_n_p_prefix">» </a> 下一篇： <?php $this->theNext('%s', '我可是有下限的哦,(●ˇ∀ˇ●)'); ?> </a>
                            </div>
                        </div>
                    </div>
                    <div class="postDesc">posted @
                        <span id="post-date"><?php $this->date("Y-m-d H:i:s"); ?></span>
                        <a href="<?php $this->options->siteUrl(); ?>"><?php $this->author(); ?></a>
                        阅读(<span id="post_view_count"><?php getPostView($this) ?></span>)
                        评论(<span id="post_comment_count"><?php $this->commentsNum('%d'); ?></span>)
                        <?php if($this->user->hasLogin()) :?>
                            <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
                        <?php endif;?>
                    </div>
                </div><!--end: topics 文章、评论容器-->
            </div>
            <?php $this->need('comments.php'); ?>
        </div><!--end: forFlow -->
    </div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
