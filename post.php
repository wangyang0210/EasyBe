<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <nav class="main-nav <?php if (isset($this->fields->pic)): ?>overlay<?php else: ?><?php endif; ?> clearfix">        
            <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
    </nav>
</header>
<main class="content" role="main">
    <article class="post">
        <header class="post-header">
            <h1 class="post-title"><?php $this->title() ?></h1>
            <section class="post-meta">
                <time class="post-date" datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>
            </section>
        </header>
        <section class="post-content">
            <p><?php $this->content(); ?></p>
        </section>
        <footer class="post-footer">
            <figure class="author-image">
                <a class="img" style="background-image: url(<?php $this->options->adminpicUrl() ?>)"></a>
            </figure>    
            <section class="author">
                <h4><?php $this->author(); ?></h4>
                    <p><?php $this->options->selfdiscribition() ?></p>
            </section>
<section class="share">
                <h4>Share this post</h4>
                <a class="icon-twitter" href="https://twitter.com/intent/tweet?text=<?php $this->title() ?>&amp;url=<?php $this->permalink() ?>"
                    onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                    <span class="hidden">Twitter</span>
                </a>
                <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>"
                    onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                    <span class="hidden">Facebook</span>
                </a>
                <a class="icon-google-plus" href="https://plus.google.com/share?url=<?php $this->permalink() ?>"
                   onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
                    <span class="hidden">Google+</span>
                </a>
</section>
        </footer>
<hr>

<?php $this->need('comments.php'); ?>
    </article>
</main>



<?php $this->need('footer.php'); ?>
