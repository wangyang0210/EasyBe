<?php
/**
 * EasyBe Themes
 * @package EasyBe
 * @author WangYang
 * @version 2.1.8
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="mainContent">
    <div class="forFlow">

        <?php  $posts = getAllPosts($this->currentPage, $this->options->pageSize); ?>
        <?php foreach ($posts as $post) {
            $res = Typecho_Widget::widget('Widget_Abstract_Contents')->push($post);
        ?>
            <div class="day" role="article" >
                <div class="postTitle" role="heading" aria-level="2">
                    <a class="postTitle2 vertical-middle" href="<?php echo $res['permalink']; ?>">
                        <span><?php echo $res['title']; ?><?php if(!empty($res['sticky'])) : ?>[置顶]<?php endif; ?></span>
                    </a>

                </div>
                <div class="postCon">
                    <div class="c_b_p_desc" >
                        摘要：<?php echo ($res['password'] && !$this->user->hasLogin()) ? '文章被加密了，不可以偷看哦🍉' : preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,200}).*#s', '$1', $res['text']); ?>
                        <a href="<?php echo $res['permalink']; ?>" class="c_b_p_desc_readmore">阅读全文</a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="postDesc">posted @ <?php echo date("Y-m-d H:i:s", $res['created']); ?>
                    <?php $this->author(); ?>
                    <span class="post-view-count">阅读(<?php echo $res['views'];?>)</span>
                    <span class="post-comment-count">评论(<?php echo $res['commentsNum']; ?>)</span>
                    <?php $digg = $res['password'] ? 0 : $res['digg']; ?>
                    <span class="post-digg-count">推荐(<?php echo $digg; ?>)</span>
                </div>
                <div class="clear"></div>
            </div>
        <?php } ?>
        <div class="topicListFooter">
            <div id="nav_next_page">
                <?php $this->pageLink('<xt class="newer-posts"><span aria-hidden="true"></span><span>上一页</span></xt>'); ?>
                <?php $this->pageLink('<xt class="older-posts"><span>下一页</span><span aria-hidden="true"></span></xt>', 'next'); ?>
            </div>
        </div>
    </div><!--end: forFlow -->
</div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
