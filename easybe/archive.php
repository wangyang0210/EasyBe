<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="mainContent">
    <div class="forFlow">
        <h1 class="PostListTitle">
            <?php $this->archiveTitle(array(
                'category'  =>  _t('文章分类 - %s'),
                'search'    =>  _t('关键字 - %s'),
                'tag'       =>  _t('标签 - %s '),
                'author'    =>  _t('作者 - %s')
            ), '', ''); ?>
        </h1>
        <?php if ($this->have()): ?>
            <?php while($this->next()): ?>
                <div class="pager"></div>
                <div id="myposts">
                    <div class="PostList" role="article">
                        <div class="postTitl2" role="heading" aria-level="2">
                            <a id="PostsList1_rpPosts_TitleUrl_1" class="vertical-middle" href="<?php $this->permalink() ?>">
                                <span><?php $this->title() ?></span>
                            </a>
                        </div>
                        <div class="postDesc2">
                            <?php $this->author(); ?> <?php $this->date("Y-m-d H:i:s"); ?>
                            <span data-post-id="16535598" class="post-view-count">阅读(<?php getPostView($this) ?>)</span>
                            <span data-post-id="16535598" class="post-comment-count">评论(<?php $this->commentsNum('%d'); ?>)</span>
                            <?php if ($this->user->hasLogin()) : ?>
                                <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid; ?>" target="_blank">编辑</a>
                            <?php endif; ?>
                        </div>
                        <div class="postText2">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="pager">
            </div>
        </div>
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
