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
                <span id="comment_<?php $comments->sequence(); ?>_avatar" style="display:none"><?php $comments->gravatar('40', ''); ?></span>
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
                                <div class="commentbox_title">
                                    <div class="commentbox_title_left">
                                        <div class="el-input-group">
                                            <?php if ($this->user->hasLogin()): ?>
                                                <span id="btn_edit_comment" class="commentbox_tab active" title="用户名称"><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a></span>
                                                <span id="btn_preview_comment" class="commentbox_tab" title="Logout"><a href="<?php $this->options->logoutUrl(); ?>" >退出</a></span>
                                                <a href="javascript:void(0);"><?php $comments->cancelReply(); ?></a>
                                            <?php else: ?>
                                                <div class="el-input">
                                                    <div class="el-input-group_prepend">昵称</div>
                                                    <input type="text" required autocomplete="off" name="author" placeholder="请输入昵称" id="author" class="el-input_inner" value="<?php $this->remember('author'); ?>">
                                                </div>
                                                <div class="el-input">
                                                    <div class="el-input-group_prepend" >邮箱</div>
                                                    <input type="email" autocomplete="off" name="mail" id="mail" placeholder="请输入邮箱" class="el-input_inner" value="<?php $this->remember('mail'); ?>">
                                                </div>
                                                <div class="el-input">
                                                    <div class="el-input-group_prepend">网址</div>
                                                    <input type="text" autocomplete="off" name="url" placeholder="请输入网址" class="el-input_inner" value="<?php $this->remember('url'); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <textarea name="text" id="tbCommentBody" placeholder="当年你退出文坛,我是极力反对的!" required></textarea>
                                <div class="commentbox_footer">
                                    <span>
                                         <span class="OwO" style="display: none"></span>
                                        <span class="img-upload">
                                            <svg t="1677556438944" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1149" width="200" height="200">
                                                <path d="M716.78 609.59L604.8 525.61c-16.97-12.72-40.62-12.72-57.59 0l-98.58 73.92L317.2 494.39c-16.48-13.19-39.28-14.19-56.81-2.39L128 581.02V224h704v352c0 17.67 14.33 32 32 32s32-14.33 32-32V221.31c0-33.81-27.5-61.31-61.31-61.31H125.31C91.5 160 64 187.5 64 221.31v581.38C64 836.5 91.5 864 125.31 864H608c17.67 0 32-14.33 32-32s-14.33-32-32-32H128V658.16l158.36-106.48 161.02 128.8L576 584l102.38 76.78c14.19 10.67 34.23 7.73 44.8-6.39 10.6-14.14 7.74-34.2-6.4-44.8z" fill="#888888" p-id="1150"></path><path d="M576 384c0 52.94 43.06 96 96 96s96-43.06 96-96-43.06-96-96-96-96 43.06-96 96z m128 0c0 17.64-14.36 32-32 32s-32-14.36-32-32 14.36-32 32-32 32 14.36 32 32zM928 768h-64v-64c0-17.67-14.33-32-32-32s-32 14.33-32 32v64h-64c-17.67 0-32 14.33-32 32s14.33 32 32 32h64v64c0 17.67 14.33 32 32 32s32-14.33 32-32v-64h64c17.67 0 32-14.33 32-32s-14.33-32-32-32z" fill="#888888" p-id="1151"></path>
                                            </svg>
                                        </span>
                                        <span id="ubb_auto_completion" class="comment_option">
                                      <input id="btn_comment_submit" onclick="comments('<?php $this->commentUrl() ?>')" type="button" class="comment_btn" title="提交评论" value="提交评论">
                                    </span>
                                    </span>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ad_text_commentbox" id="ad_text_under_commentbox"></div>
    <?php else: ?>
        <p class="commentClose panel">o_o ....评论被关闭咯~</p>
    <?php endif; ?>
</div>
