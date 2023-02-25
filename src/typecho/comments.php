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
                                        <span id="btn_edit_comment" class="commentbox_tab active" title="编辑评论"><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a></span>
                                        <span id="btn_preview_comment" class="commentbox_tab" title="Logout"><a href="<?php $this->options->logoutUrl(); ?>" >退出</a></span>
                                        <a href="javascript:void(0);"><?php $comments->cancelReply(); ?></a>
                                    </div>
                                    <div class="commentbox_title_right">
                                        <span id="ubb_bold" class="comment_icon" alt="表情" title="OwO" style="display: none"></span>
                                        <span id="ubb_url" class="comment_icon" title="添加链接(Ctrl + K)" alt="链接">

                                        </span>
                                        <span id="ubb_code" class="comment_icon" title="添加代码(Ctrl + `)" alt="代码">

                                        </span>
                                        <span id="ubb_quote" class="comment_icon" title="添加引用(Ctrl + Q)" alt="引用">

                                        </span>
                                        <span id="ubb_img" class="comment_icon" alt="图片" title="上传图片(Ctrl + I)">

                                        </span>
                                    </div>
                                </div>
                            <?php else: ?>
                                <p>
                                    <label for="author" class="required"><?php _e('称呼'); ?></label>
                                    <input type="text" name="author" id="author" class="text"
                                           value="<?php $this->remember('author'); ?>" required/>
                                </p>
                                <p>
                                    <label
                                            for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                                    <input type="email" name="mail" id="mail" class="text"
                                           value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                                </p>
                                <p>
                                    <label
                                            for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
                                    <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>"
                                           value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                                </p>
                            <?php endif; ?>
                                <textarea name="text" id="tbCommentBody" placeholder="当年你退出文坛,我是极力反对的!" required></textarea>
                                <div class="commentbox_footer">
                                    <span>&nbsp;</span>
                                    <span id="ubb_auto_completion" class="comment_option">
<!--                                      <span class="inline_middle OwO" style="display: none">OwO</span>-->
                                    </span>
                                </div>
                        </div>
                        <p id="commentbox_opt">
                            <input id="btn_comment_submit" onclick="comments('<?php $this->commentUrl() ?>')" type="button" class="comment_btn" title="提交评论" value="提交评论">
                            <span class="OwO" style="display: none">OwO</span>
                        </p>
                    </form>
                </div>
            </div>
            <div class="ad_text_commentbox" id="ad_text_under_commentbox"></div>
    <?php else: ?>
        <p class="commentClose panel">o_o ....评论被关闭咯~</p>
    <?php endif; ?>
</div>
