/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, wangyang.0210@foxmail.com
 * @Date 2022-08-09 23:14
 * ----------------------------------------------
 * @describe: 显示某分类下的文章列表、搜索结果列表显示时调用的文件
 */
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
                        <a class="postTitle2 vertical-middle" href="<?php $this->permalink() ?>">
                            <span>
                                <?php $this->title() ?>
                            </span>
                        </a>
                    </div>
                    <div class="postCon">
                        <div class="c_b_p_desc">
                            <?php $this->excerpt('200', '...'); ?>
                            <a class="read-more" href="<?php $this->permalink() ?>"
                            <a href="<?php $this->permalink() ?>" class="c_b_p_desc_readmore">阅读全文</a>
                        </div>
                    </div>
                    <div class="postDesc">
                        posted @   <?php $this->date("Y-m-d H:i:s"); ?> <?php $this->author(); ?>
                        <span class="post-view-count">阅读(<?php get_post_view($this) ?>)</span>
                        <span class="post-comment-count">评论(<?php $this->commentsNum('%d'); ?>)(</span>
                        <?php if ($this->user->hasLogin()) : ?>
                            <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid; ?>" target="_blank">编辑</a>
                        <?php endif; ?>
                    </div>
                </div>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <div class="topicListFooter">
            <div id="nav_next_page">
                <?php $this->pageLink('<xt class="newer-posts"><span aria-hidden="true"></span><span>上一页</span></xt>'); ?>
                <?php $this->pageLink('<xt class="older-posts"><span>下一页</span><span aria-hidden="true"></span></xt>', 'next'); ?>
            </div>
        </div>

    </div>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
