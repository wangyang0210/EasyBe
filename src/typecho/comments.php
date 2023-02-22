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
<!--                                <div class="commentbox_title_left">-->
<!--                                    <span id="btn_edit_comment" class="commentbox_tab active" title="编辑评论">编辑</span>-->
<!--                                    <span id="btn_preview_comment" class="commentbox_tab" title="Markdown 预览">预览</span>-->
<!--                                </div>-->
<!--                                <div class="commentbox_title_right">-->
<!--            <span id="ubb_bold" class="comment_icon" alt="粗体" title="添加粗体(Ctrl + B)">-->
<!--                <svg class="comment_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <g fill-rule="evenodd">-->
<!--                        <path d="m13.221 19c1.4414 0 2.5793-0.27451 3.3759-0.82353 0.92931-0.66667 1.4034-1.7059 1.4034-3.1176 0-0.94118-0.22759-1.7059-0.66379-2.2549-0.45517-0.56863-1.119-0.94118-2.0103-1.1176 0.68276-0.27451 1.1948-0.64706 1.5552-1.1569 0.36034-0.54902 0.55-1.2157 0.55-2 0-1.0588-0.36034-1.902-1.0621-2.5294-0.75862-0.66667-1.8207-1-3.1672-1h-6.2017v14h6.2207zm-0.82196-8h-3.3987v-4h3.4367c0.91139 0 1.557 0.15686 1.9747 0.47059 0.37975 0.29412 0.58861 0.78431 0.58861 1.451 0 0.72549-0.20886 1.2549-0.58861 1.5882-0.39873 0.31373-1.0633 0.4902-2.0127 0.4902zm0.52612 6h-3.9249v-4h3.9855c1.052 0 1.8208 0.16216 2.3064 0.48649 0.46532 0.32432 0.70809 0.84685 0.70809 1.5856 0 0.72072-0.3237 1.2252-0.9711 1.5495-0.50578 0.25225-1.2139 0.37838-2.104 0.37838z" fill-rule="nonzero" stroke-width=".35"></path>-->
<!--                    </g>-->
<!--                </svg>-->
<!--            </span>-->
<!--                                    <span id="ubb_url" class="comment_icon" title="添加链接(Ctrl + K)" alt="链接">-->
<!--                <svg class="comment_svg comment_svg_stroke" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <g fill-rule="evenodd">-->
<!--                        <g transform="translate(4 4)" fill-rule="nonzero" stroke-width=".4">-->
<!--                            <path d="m6.304 9.696c-0.288-0.288-0.512-0.608-0.704-0.992-0.16-0.32-0.032-0.704 0.288-0.864 0.32-0.16 0.704-0.032 0.864 0.288 0.128 0.224 0.256 0.448 0.448 0.64 0.928 0.928 2.432 0.928 3.36 0l3.36-3.328c0.928-0.928 0.928-2.432 0-3.36s-2.432-0.928-3.36 0l-2.272 2.272c-0.256 0.256-0.64 0.256-0.896 0-0.256-0.256-0.256-0.64 0-0.896l2.272-2.272c1.44-1.44 3.744-1.44 5.184 0 1.44 1.44 1.44 3.744 0 5.184l-3.36 3.296c-0.704 0.704-1.632 1.088-2.592 1.088-0.928 0-1.856-0.352-2.592-1.056z"></path>-->
<!--                            <path d="m3.776 15.808c-0.992 0-1.888-0.384-2.592-1.056-1.44-1.44-1.44-3.744 0-5.184l3.328-3.328c1.44-1.44 3.744-1.44 5.184 0 0.288 0.288 0.544 0.64 0.736 1.024 0.16 0.32 0 0.704-0.32 0.864-0.32 0.16-0.704 0-0.864-0.32-0.128-0.256-0.288-0.48-0.48-0.672-0.928-0.928-2.432-0.928-3.36 0l-3.296 3.328c-0.928 0.928-0.928 2.432 0 3.36 0.448 0.448 1.056 0.704 1.664 0.704 0.608 0 1.248-0.256 1.664-0.704l2.112-2.112c0.256-0.256 0.64-0.256 0.896 0s0.256 0.64 0 0.896l-2.112 2.112c-0.672 0.704-1.568 1.088-2.56 1.088z"></path>-->
<!--                        </g>-->
<!--                    </g>-->
<!--                </svg>-->
<!--            </span>-->
<!--                                    <span id="ubb_code" class="comment_icon" title="添加代码(Ctrl + `)" alt="代码">-->
<!--                <svg class="comment_svg comment_svg_stroke" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <g fill-rule="evenodd">-->
<!--                        <g transform="translate(16 6)" stroke-linecap="round" stroke-width="2">-->
<!--                            <line x1=".5" x2="4.5" y1=".7" y2="6.3"></line>-->
<!--                            <line transform="translate(2.5 9.1) scale(1 -1) translate(-2.5 -9.1)" x1=".5" x2="4.5" y1="6.3" y2="11.9"></line>-->
<!--                        </g>-->
<!--                        <g transform="translate(3 6.1)" stroke-linecap="round" stroke-width="2">-->
<!--                            <line transform="translate(2.5 3.5) scale(-1 1) translate(-2.5 -3.5)" x1=".5" x2="4.5" y1=".7" y2="6.3"></line>-->
<!--                            <line transform="translate(2.5 9.1) scale(-1) translate(-2.5 -9.1)" x1=".5" x2="4.5" y1="6.3" y2="11.9"></line>-->
<!--                        </g>-->
<!--                        <path transform="translate(12 12.5) scale(1 -1) translate(-12 -12.5)" d="m10.778 7.1249c0.50008-0.11366 0.9978 0.16911 1.1643 0.64128l0.032406 0.11223 2 8.8c0.1224 0.53855-0.21496 1.0744-0.75351 1.1968-0.50008 0.11366-0.9978-0.16911-1.1643-0.64128l-0.032406-0.11223-2-8.8c-0.1224-0.53855 0.21496-1.0744 0.75351-1.1968z" fill-rule="nonzero" stroke-width=".25"></path>-->
<!--                    </g>-->
<!--                </svg>-->
<!--            </span>-->
<!--                                    <span id="ubb_quote" class="comment_icon" title="添加引用(Ctrl + Q)" alt="引用">-->
<!--                <svg class="comment_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <g fill-rule="evenodd">-->
<!--                        <g transform="translate(5 4)" fill-rule="nonzero" stroke-width=".25">-->
<!--                            <path d="m5.0013 15v-5.2702h-2.8008c-0.13413-3.3762 1.2004-6.2143 4.0009-8.5135l-1.2-1.2163c-3.335 2.2996-5.0013 5.8119-5.0013 10.54v4.4595h5.0013-1.285e-5zm8.7987 0v-5.2702h-2.8008c-0.13453-3.3762 1.2-6.2143 4.0009-8.5135l-1.2-1.2163c-3.335 2.2996-5.0013 5.8119-5.0013 10.54v4.4595h5.0013-1.28e-5z"></path>-->
<!--                        </g>-->
<!--                    </g>-->
<!--                </svg>-->
<!--            </span>-->
<!--                                    <span id="ubb_img" class="comment_icon" alt="图片" title="上传图片(Ctrl + I)">-->
<!--                <svg class="comment_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <g fill-rule="evenodd">-->
<!--                        <g transform="translate(3 3.8)" fill-rule="nonzero">-->
<!--                            <path d="m14.1 0.58235h-11.2c-1.32 0-2.4 1.0482-2.4 2.3294v10.871c0 1.2812 1.08 2.3294 2.4 2.3294h11.2c1.32 0 2.4-1.0482 2.4-2.3294v-10.871c0-1.2812-1.08-2.3294-2.4-2.3294zm0.7 13.569-3.63-3.4165 1.33-1.2909c0.21-0.20382 0.59-0.20382 0.8 0l1.6 1.5529v2.7856c0 0.13588-0.04 0.26206-0.1 0.36882zm-11.9-12.016h11.2c0.44 0 0.8 0.34941 0.8 0.77647v5.8915l-0.47-0.45618c-0.84-0.825-2.22-0.825-3.07 0l-1.35 1.3103-2.39-2.2421c-0.85-0.825-2.22-0.825-3.05-0.019412l-2.48 2.2615v-6.7456c0.01-0.42706 0.37-0.77647 0.81-0.77647zm-0.8 11.647v-1.9897l3.6-3.2806c0.21-0.20382 0.58-0.21353 0.81 0.0097059l6.43 6.0371h-10.04c-0.44 0-0.8-0.33971-0.8-0.77647z"></path>-->
<!--                            <ellipse cx="10.5" cy="6.4059" rx="1" ry="1"></ellipse>-->
<!--                        </g>-->
<!--                    </g>-->
<!--                </svg>-->
<!--            </span>-->
<!--                                </div>-->
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
