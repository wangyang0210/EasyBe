<?php
/**
 * EasyBe 简单且美观的博客主题
 *
 * @package EasyBe-For-Typecho
 * @author wangyang
 * @version 0.1
 * @link https://wangyangyang.vip/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
 $this->need('header.php');
?>

    <nav class="main-nav overlay clearfix">
        <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
    </nav>
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title"><?php $this->options->title() ?></h1>
            <h2 class="page-description"><?php $this->options->description() ?></h2>
        </div>
    </div>
    <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>

<main id="content" class="content" role="main">
    <div class="extra-pagination inner">
    <nav class="pagination" role="navigation">
        <span class="page-number">Page <?php if ($this->_currentPage>1) {
            echo $this->_currentPage;
                                       } else {
                                           echo 1;
                                       }?> of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
        <?php $this->pageNav('上一页', '下一页', '3', '...', array('itemTag' => '', 'currentClass' => 'page-number' ,'prevClass' => 'newer-posts', 'nextClass' => 'older-posts'));?>
</nav>
</div>

<?php while ($this->next()) : ?>
<article class="post">
    <header class="post-header">
        <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    </header>
    <section class="post-excerpt">
        <p><?php $this->excerpt('500', '...');?><a class="read-more" href="<?php $this->permalink() ?>">»</a></p>
    </section>
    <footer class="post-meta">
        <img class="author-thumb" src="<?php $this->options->adminpicUrl() ?>" alt="<?php $this->author(); ?>" nopin="nopin" />
        <?php $this->author(); ?>
        分类：<?php $this->category(','); ?> 标签：<?php $this->tags(', ', true, 'none'); ?>
        <time class="post-date" datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>
    </footer>
</article>
<?php endwhile;?>

<nav class="pagination" role="navigation">
        <?php $this->pageLink('<xt class="newer-posts"><span aria-hidden="true">←</span><span>上一页</span></xt>'); ?>
        <span class="page-number">Page <?php if ($this->_currentPage>1) {
            echo $this->_currentPage;
                                       } else {
                                           echo 1;
                                       }?> of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
        <?php $this->pageLink('<xt class="older-posts"><span>下一页</span><span aria-hidden="true">→</span></xt>', 'next'); ?>
</nav>
</main>


<?php $this->need('footer.php'); ?>
