<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<?php  function threadedComments($comments, $options) {?>
    <div class="feedbackItem">
        <div class="feedbackCon">
            <div class="feedbackListSubtitle">
                <div class="feedbackManage">
                    <span class="comment_actions">
                            <?php $comments->reply(); ?>
                    </span>
                </div>
                <!-- <a href="#" class="layer">#楼</a> -->
                <a id="a_comment_author" href="<?php $comments->permalink(); ?>" target="_blank"><?php $comments->author(); ?></a>
                <span class="comment_date"><?php $comments->date('Y-m-d H:i:s'); ?></span>
            </div>
            <div id="<?php $comments->theId(); ?>">
                    <img class="comment-avatar" src="http://cache.wangyangyang.vip/avatar-img/avatar-<?php echo mt_rand(928680, 1266901); ?>.jpg">
                    <div id="comment_body" class="blog_comment_body hvr-bob">
                        <?php $comments->content(); ?>
                    </div>
            </div>
        </div>
    </div>
    <?php if ($comments->children) { ?>
            <?php $comments->threadedComments($options); ?>
    <?php } ?>
<?php } ?>




<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="feedback_area_title">评论列表</div>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
    <div id="comment_form_container">
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
                <div id="commentform_title">发表评论</div>
                <p>
                    昵称：<input type="text" id="tbCommentAuthor" class="author" disabled="disabled" size="50" value="<?php $this->user->screenName(); ?>">
                    <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> </a>
                </p>
                <div class="commentbox_main">
                    <div class="commentbox_title">
                        <div class="commentbox_title_left">评论内容：</div>
                        <div class="commentbox_title_right">
                            
                        </div>
                    </div>
                    <div class="clear"></div>
                <textarea id="tbCommentBody" name="text" class="comment_textarea"></textarea>
                </div>
                <p id="commentbox_opt">
                    <input id="btn_comment_submit" type="submit" class="comment_btn" value="提交评论">
                    <a href="javascript:void(0);"><?php $comments->cancelReply(); ?></a>
                </p>
            <?php else: ?>
                注册用户登录后才能发表评论，请 <a href="<?php $this->options->siteUrl(); ?>admin/login.php">登录</a> 或<a href="<?php $this->options->siteUrl(); ?>admin/register.php">注册</a>
            <?php endif; ?>
        </form>
    </div>
        <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
        <?php endif; ?>
    </div>
</div>
