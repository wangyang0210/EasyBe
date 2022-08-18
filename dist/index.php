<?php
/**
 *
 * @package EasyBe
 * @author WangYang
 * @version 2.0
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="mainContent">
    <div class="forFlow">
        <?php while ($this->next()): ?>
            <div class="day" role="article" >
                <div class="postTitle" role="heading" aria-level="2">
                    <a class="postTitle2 vertical-middle" href="<?php $this->permalink() ?>">
                        <span><?php $this->title() ?></span>
                    </a>
                </div>
                <div class="postCon">
                    <div class="c_b_p_desc" >
                        摘要：<?php $this->excerpt('200', '...'); ?>
                        <a href="<?php $this->permalink() ?>" class="c_b_p_desc_readmore">阅读全文</a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="postDesc">posted @ <?php $this->date("Y-m-d H:i:s"); ?>
                    <?php $this->author(); ?>
                    <span class="post-view-count">阅读(<?php get_post_view($this) ?>)</span>
                    <span class="post-comment-count">评论(<?php $this->commentsNum('%d'); ?>)</span>
                    <span class="post-digg-count">推荐(0)</span>
                    <?php if ($this->user->hasLogin()) : ?>
                        <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid; ?>"
                           target="_blank">编辑</a>
                    <?php endif; ?>
                </div>
                <div class="clear"></div>
            </div>
        <?php endwhile; ?>
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
