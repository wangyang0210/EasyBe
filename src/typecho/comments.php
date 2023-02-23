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
                                        <span id="ubb_bold" class="comment_icon OwO" alt="表情" title="OwO" style="display: none">OwO</span>
                                        <span id="ubb_url" class="comment_icon" title="添加链接(Ctrl + K)" alt="链接">
                                            <svg class="comment_svg comment_svg_stroke" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill-rule="evenodd">
                                                    <g transform="translate(4 4)" fill-rule="nonzero" stroke-width=".4">
                                                        <path d="m6.304 9.696c-0.288-0.288-0.512-0.608-0.704-0.992-0.16-0.32-0.032-0.704 0.288-0.864 0.32-0.16 0.704-0.032 0.864 0.288 0.128 0.224 0.256 0.448 0.448 0.64 0.928 0.928 2.432 0.928 3.36 0l3.36-3.328c0.928-0.928 0.928-2.432 0-3.36s-2.432-0.928-3.36 0l-2.272 2.272c-0.256 0.256-0.64 0.256-0.896 0-0.256-0.256-0.256-0.64 0-0.896l2.272-2.272c1.44-1.44 3.744-1.44 5.184 0 1.44 1.44 1.44 3.744 0 5.184l-3.36 3.296c-0.704 0.704-1.632 1.088-2.592 1.088-0.928 0-1.856-0.352-2.592-1.056z"></path>
                                                        <path d="m3.776 15.808c-0.992 0-1.888-0.384-2.592-1.056-1.44-1.44-1.44-3.744 0-5.184l3.328-3.328c1.44-1.44 3.744-1.44 5.184 0 0.288 0.288 0.544 0.64 0.736 1.024 0.16 0.32 0 0.704-0.32 0.864-0.32 0.16-0.704 0-0.864-0.32-0.128-0.256-0.288-0.48-0.48-0.672-0.928-0.928-2.432-0.928-3.36 0l-3.296 3.328c-0.928 0.928-0.928 2.432 0 3.36 0.448 0.448 1.056 0.704 1.664 0.704 0.608 0 1.248-0.256 1.664-0.704l2.112-2.112c0.256-0.256 0.64-0.256 0.896 0s0.256 0.64 0 0.896l-2.112 2.112c-0.672 0.704-1.568 1.088-2.56 1.088z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <span id="ubb_code" class="comment_icon" title="添加代码(Ctrl + `)" alt="代码">
                                            <svg class="comment_svg comment_svg_stroke" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill-rule="evenodd">
                                                    <g transform="translate(16 6)" stroke-linecap="round" stroke-width="2">
                                                        <line x1=".5" x2="4.5" y1=".7" y2="6.3"></line>
                                                        <line transform="translate(2.5 9.1) scale(1 -1) translate(-2.5 -9.1)" x1=".5" x2="4.5" y1="6.3" y2="11.9"></line>
                                                    </g>
                                                    <g transform="translate(3 6.1)" stroke-linecap="round" stroke-width="2">
                                                        <line transform="translate(2.5 3.5) scale(-1 1) translate(-2.5 -3.5)" x1=".5" x2="4.5" y1=".7" y2="6.3"></line>
                                                        <line transform="translate(2.5 9.1) scale(-1) translate(-2.5 -9.1)" x1=".5" x2="4.5" y1="6.3" y2="11.9"></line>
                                                    </g>
                                                    <path transform="translate(12 12.5) scale(1 -1) translate(-12 -12.5)" d="m10.778 7.1249c0.50008-0.11366 0.9978 0.16911 1.1643 0.64128l0.032406 0.11223 2 8.8c0.1224 0.53855-0.21496 1.0744-0.75351 1.1968-0.50008 0.11366-0.9978-0.16911-1.1643-0.64128l-0.032406-0.11223-2-8.8c-0.1224-0.53855 0.21496-1.0744 0.75351-1.1968z" fill-rule="nonzero" stroke-width=".25"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span id="ubb_quote" class="comment_icon" title="添加引用(Ctrl + Q)" alt="引用">
                                            <svg class="comment_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill-rule="evenodd">
                                                    <g transform="translate(5 4)" fill-rule="nonzero" stroke-width=".25">
                                                        <path d="m5.0013 15v-5.2702h-2.8008c-0.13413-3.3762 1.2004-6.2143 4.0009-8.5135l-1.2-1.2163c-3.335 2.2996-5.0013 5.8119-5.0013 10.54v4.4595h5.0013-1.285e-5zm8.7987 0v-5.2702h-2.8008c-0.13453-3.3762 1.2-6.2143 4.0009-8.5135l-1.2-1.2163c-3.335 2.2996-5.0013 5.8119-5.0013 10.54v4.4595h5.0013-1.28e-5z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <span id="ubb_img" class="comment_icon" alt="图片" title="上传图片(Ctrl + I)">
                                            <svg class="comment_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill-rule="evenodd">
                                                    <g transform="translate(3 3.8)" fill-rule="nonzero">
                                                        <path d="m14.1 0.58235h-11.2c-1.32 0-2.4 1.0482-2.4 2.3294v10.871c0 1.2812 1.08 2.3294 2.4 2.3294h11.2c1.32 0 2.4-1.0482 2.4-2.3294v-10.871c0-1.2812-1.08-2.3294-2.4-2.3294zm0.7 13.569-3.63-3.4165 1.33-1.2909c0.21-0.20382 0.59-0.20382 0.8 0l1.6 1.5529v2.7856c0 0.13588-0.04 0.26206-0.1 0.36882zm-11.9-12.016h11.2c0.44 0 0.8 0.34941 0.8 0.77647v5.8915l-0.47-0.45618c-0.84-0.825-2.22-0.825-3.07 0l-1.35 1.3103-2.39-2.2421c-0.85-0.825-2.22-0.825-3.05-0.019412l-2.48 2.2615v-6.7456c0.01-0.42706 0.37-0.77647 0.81-0.77647zm-0.8 11.647v-1.9897l3.6-3.2806c0.21-0.20382 0.58-0.21353 0.81 0.0097059l6.43 6.0371h-10.04c-0.44 0-0.8-0.33971-0.8-0.77647z"></path>
                                                        <ellipse cx="10.5" cy="6.4059" rx="1" ry="1"></ellipse>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <textarea name="text" class="OwO-textarea" id="tbCommentBody" placeholder="当年你退出文坛,我是极力反对的!" required></textarea>
                                <div class="commentbox_footer">
                                    <span>&nbsp;</span>
                                    <span href="javascript:void(0)" id="ubb_auto_completion" class="comment_option">
                                        <svg style="display: inline-block;" id="comment_auto_completion_on" viewBox="0 0 1080 1080" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M406.724 908.504c-89.02 0-157.885-32.319-206.594-96.957-49.549-64.639-73.903-155.795-73.903-274.299 0-116.017 24.354-206.345 73.903-270.155 48.71-63.81 117.574-95.3 206.594-95.3h19.316l-7.559 72.925h-3.359c-65.505 0-115.054 25.69-150.326 77.069-35.272 50.55-52.908 122.647-52.908 215.461 0 94.472 17.636 168.226 52.908 220.434 35.272 51.379 84.82 77.897 150.326 77.897h3.36l7.558 72.925h-19.316zm266.548 0c89.02 0 157.885-32.319 206.594-96.957 49.55-64.639 73.904-155.795 73.904-274.299 0-116.017-24.355-206.345-73.904-270.155-48.709-63.81-117.573-95.3-206.594-95.3h-19.315l7.558 72.925h3.36c65.505 0 115.054 25.69 150.326 77.069 35.272 50.55 52.908 122.647 52.908 215.461 0 94.472-17.636 168.226-52.908 220.434-35.272 51.379-84.821 77.897-150.327 77.897h-3.359l-7.558 72.925h19.315zm-94.068-65.897c0 31.514.854 54.433 1.708 68.758 1.709 14.325 3.417 25.784 6.835 34.38 2.563 8.594 6.834 14.324 12.814 20.054 5.126 5.73 14.523 11.46 27.337 17.189v34.38H451.914v-34.38c17.086-7.162 29.046-15.757 35.026-24.352 5.126-10.027 9.398-22.92 11.106-38.676 1.709-17.19 2.563-42.974 2.563-77.353V238.109c0-32.947-.854-55.866-1.709-71.623-1.708-14.325-4.271-25.784-6.834-32.947-3.417-8.595-7.689-15.757-12.814-20.054-5.126-5.73-14.523-10.027-27.338-17.19V61.916h175.984v34.38c-11.96 5.73-21.357 11.459-26.483 15.756-5.125 5.73-9.397 11.46-12.814 20.055-3.417 7.162-5.98 18.622-6.834 34.379-1.709 15.757-2.563 38.676-2.563 71.623v604.498z" fill-rule="nonzero"></path></svg>
                                        <svg id="comment_auto_completion_off" viewBox="0 0 1080 1080" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" style="display: none;"><path d="M242.96 223.172l59.627 58.009c-14.277 10.773-26.874 24.032-37.791 40.606-35.272 50.55-52.908 122.647-52.908 215.461 0 94.472 17.636 168.226 52.908 220.434 35.272 51.379 84.82 77.897 150.326 77.897h3.36l7.558 72.925h-19.316c-89.02 0-157.885-32.319-206.594-96.957-49.549-64.639-73.903-155.795-73.903-274.299 0-116.017 24.354-206.345 73.903-270.155 12.597-16.574 26.874-31.49 42.83-43.921zm36.952-23.204c36.112-19.06 78.943-28.175 126.812-28.175h19.316l-7.559 72.925h-3.359c-27.714 0-52.908 4.144-74.743 14.088l-60.467-58.838zM805.123 770.94l60.466 58.01c-47.869 53.036-111.695 79.554-192.317 79.554h-19.315l7.558-72.925h3.36c59.626 0 105.816-21.546 140.248-64.638zm23.515-37.29c26.034-49.723 39.47-115.19 39.47-196.402 0-92.814-17.635-164.91-52.907-215.461-35.272-51.38-84.821-77.069-150.327-77.069h-3.359l-7.558-72.925h19.315c89.02 0 157.885 31.49 206.594 95.3 49.55 63.81 73.904 154.138 73.904 270.155 0 108.56-20.996 194.744-62.146 257.725l-62.986-61.324zM500.609 474.465l78.595 75.92v292.222c0 31.514.854 54.433 1.708 68.758 1.709 14.325 3.417 25.784 6.835 34.38 2.563 8.594 6.834 14.324 12.814 20.054 5.126 5.73 14.523 11.46 27.337 17.189v34.38H451.914v-34.38c17.086-7.162 29.046-15.757 35.026-24.352 5.126-10.027 9.398-22.92 11.106-38.676 1.709-17.19 2.563-42.974 2.563-77.353V474.465zm0-60.164V238.11c0-32.947-.854-55.866-1.709-71.623-1.708-14.325-4.271-25.784-6.834-32.947-3.417-8.595-7.689-15.757-12.814-20.054-5.126-5.73-14.523-10.027-27.338-17.19v-34.38h175.984v34.38c-11.96 5.73-21.357 11.459-26.483 15.756-5.125 5.73-9.397 11.46-12.814 20.055-3.417 7.162-5.98 18.622-6.834 34.379-1.709 15.757-2.563 38.676-2.563 71.623v253.545l-78.595-77.353z"></path><path d="M153.103 132.024l805.45 783.706-44.277 45.505-805.45-783.706z"></path></svg>
                                        <span class="inline_middle">自动补全</span>
                                    </span>
                                </div>
                        </div>
                        <p id="commentbox_opt">
                            <input id="btn_comment_submit" onclick="comments('<?php $this->commentUrl() ?>')" type="button" class="comment_btn" title="提交评论" value="提交评论">
                        </p>
                    </form>
                </div>
            </div>
            <div class="ad_text_commentbox" id="ad_text_under_commentbox"></div>
            <?php else: ?>
                注册用户登录后才能发表评论，请 <a href="<?php $this->options->siteUrl(); ?>admin/login.php">登录</a> 或<a href="<?php $this->options->siteUrl(); ?>admin/register.php">注册</a>
            <?php endif; ?>
    <?php else: ?>
        <p class="commentClose panel">o_o ....评论被关闭咯~</p>
    <?php endif; ?>
</div>
