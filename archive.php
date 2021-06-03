<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="mainContent">
    <div class="forFlow">
        <h1 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('文章分类 - %s'),
            'search'    =>  _t('关键字 - %s'),
            'tag'       =>  _t('标签 - %s '),
            'author'    =>  _t('作者 - %s')
        ), '', ''); ?></h1>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
                <div class="day">
                    <div class="postTitle">
                        <a id="homepage1_HomePageDays_DaysList_ctl00_DayList_TitleUrl_0" class="postTitle2"
                           href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </div>
                    <div class="postCon">
                        <div class="c_b_p_desc">
                            <?php $this->excerpt('200', '...'); ?><a class="read-more"
                                                                     href="<?php $this->permalink() ?>"
                            <a href="<?php $this->permalink() ?>" class="c_b_p_desc_readmore">阅读全文</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="postDesc">
                        <img class="author-thumb" src="<?php $this->options->adminpicUrl(); ?>">
                        <?php $this->author(); ?>
                        <?php $this->date("Y-m-d H:i:s"); ?>
                        阅读(<?php get_post_view($this) ?>)
                        评论(<?php $this->commentsNum('%d'); ?>)
                        <?php if ($this->user->hasLogin()) : ?>
                            <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid; ?>"
                               target="_blank">编辑</a>
                        <?php endif; ?>
                    </div>
                    <div class="clear"></div>

                    <div class="postSeparator"></div>

                </div>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>
</div>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
