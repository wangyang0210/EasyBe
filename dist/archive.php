<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-8" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            // TODO 文章内容

                <div class="day" role="article">

                    <div class="postTitle" role="heading" aria-level="2">
                        <a class="postTitle2 vertical-middle" href="<?php $this->permalink() ?>">
                            <span>
                                <?php $this->title() ?>
                            </span>
                        </a>
                    </div>
                    <div class="postCon">
                        <div class="c_b_p_desc" id="postlist_description_16535598">
                            <?php $this->content(); ?>
                            <a href="<?php $this->permalink() ?>" class="c_b_p_desc_readmore"><?php $this->content('阅读全文'); ?></a>
                        </div>
                    </div>
                    <div class="postDesc">posted @ <?php $this->date(); ?> <?php $this->author(); ?>
                        <span class="post-view-count">阅读(1)</span>
                        <span class="post-comment-count">评论(<?php $this->commentsNum('评论', '1', '%d'); ?>)</span>
                        <a href="https://i.cnblogs.com/EditPosts.aspx?postid=16535598" rel="nofollow">编辑</a>
                    </div>
                </div>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
