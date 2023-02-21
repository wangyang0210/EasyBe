<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $options)
{
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    }
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
    ?>

    <li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">

        <div class="feedbackItem" id="<?php $comments->theId(); ?>">
            <div class="feedbackListSubtitle">
                <div class="feedbackManage">
                <span class="comment_actions">
                    <?php $comments->reply(); ?>
                </span>
                </div>
                <a href="javascript:void(0);" class="layer">#<?php $comments->sequence(); ?>楼</a>
                <?php if ($comments->authorId) {
                    if ($comments->authorId == $comments->ownerId) {
                        echo "<span class='louzhu'>[楼主]</span>";
                    } ?>
                <?php } ?>
                <span class="comment_date"><?php $comments->date('Y-m-d H:i'); ?></span>
                <a id="a_comment_author_<?php $comments->sequence(); ?>"
                   href="<?php $comments->permalink(); ?>"><?php $comments->author(); ?></a>
            </div>
            <div class="feedbackCon">
                <div id="comment_body_<?php $comments->sequence(); ?>" class="blog_comment_body cnblogs-markdown">
                    <p>
                        <a><?php echo getPermalinkFromCoid($comments->parent); ?></a>
                        <br><?php $comments->content(); ?>
                    </p>
                </div>
                <div class="comment_vote">
                    <span class="comment_error" style="color: red"></span>
                </div>
                <span id="comment_<?php $comments->sequence(); ?>_avatar" style="display:none">
             https://cdn.jsdelivr.net/gh/wangyang0210/pic/avatar-img/avatar-<?php echo mt_rand(1, 377); ?>.jpg
            </span>
            </div>
        </div>

        <?php if ($comments->children) { ?>
            <?php $comments->threadedComments($options); ?>
        <?php } ?>
    </li>
<?php } ?>


<div id="comments" class="commentform">
    <div id="divCommentShow"></div>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <div id="blog-comments-placeholder">
            <div id="comment_pager_top"></div>
            <br>
            <div class="feedback_area_title">评论列表</div>
            <div class="feedbackNoItems">
                <div class="feedbackNoItems"></div>
            </div>
            <?php $comments->listComments(); ?>
            <div id="comment_pager_bottom">
                <?php $comments->pageNav('«', '»', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'layui-laypage layui-laypage-molv', 'itemTag' => '', 'currentClass' => 'current',)); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div id="commentform_title">发表评论</div>
            <div id="comment_form_container">
                <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                    <div class="commentbox_main comment_textarea">
                        <?php if ($this->user->hasLogin()): ?>
                            <div class="commentbox_title">
                                <div class="commentbox_title_left">
                                    <a id="btn_edit_comment" class="commentbox_tab"
                                       href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>
                                    <a id="btn_preview_comment" class="commentbox_tab"
                                       href="<?php $this->options->logoutUrl(); ?>" title="Logout">退出</a>
                                    <a href="javascript:void(0);"><?php $comments->cancelReply(); ?></a>
                                </div>
                                <div class="commentbox_title_right">
                                    <div class="OwO" style="display: none">OwO</div>
                                </div>
                            </div>
                            <textarea name="text" class="OwO-textarea" id="tbCommentBody" placeholder="当年你退出文坛,我是极力反对的!" required></textarea>
                    </div>
                    <p id="commentbox_opt">
                        <input id="btn_comment_submit" onclick="comments('<?php $this->commentUrl() ?>')" type="button" class="comment_btn" title="提交评论" value="提交评论">
                    </p>
                </form>
            </div>
        </div>
            <?php else: ?>
                注册用户登录后才能发表评论，请 <a href="<?php $this->options->siteUrl(); ?>admin/login.php">登录</a> 或<a href="<?php $this->options->siteUrl(); ?>admin/register.php">注册</a>
            <?php endif; ?>
    <?php else: ?>
        <p class="commentClose panel">o_o ....评论被关闭咯~</p>
    <?php endif; ?>
</div>
