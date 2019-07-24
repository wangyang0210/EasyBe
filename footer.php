<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<footer class="site-footer clearfix">
            <section class="copyright"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> &copy; <?php echo date('Y'); ?></section>
            <section class="poweredby">Theme by <a href="https://wangyangyang.vip/">wangyang</a><br/>Proudly published with <a href="http://typecho.org">Typecho</a></section>
        </footer>
</div>


<script src="//cdn.bootcss.com/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('static/js/jquery.fitvids.js');?>"></script>
<script src="<?php $this->options->themeUrl('static/js/index.js');?>"></script>
<script>
$(document).ready(function(){$("a[href*='://']:not(a[href^='<?php $this->options->siteUrl(); ?>'])").attr({target:"_blank"})});
</script>


<?php $this->footer(); ?>
</body>
</html>
