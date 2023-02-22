<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="box" id="topics">
    <div class="box-ghost">
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>
        <div class="symbol"></div>

        <div class="box-ghost-container">
            <div class="box-ghost-eyes">
                <div class="box-eye-left"></div>
                <div class="box-eye-right"></div>
            </div>
            <div class="box-ghost-bottom">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="box-ghost-shadow"></div>
    </div>

    <div class="box-description">
        <div class="box-description-container">
            <div class="box-description-title">o_o ....</div>
            <div class="box-description-text">你竟然来到了无人区</div>
            <form method="post">
                <input type="text" name="s" class="text n-input" autofocus placeholder="找找看" />
                <button type="submit" class="box-button">搜索</button>
            </form>
        </div>
    </div>

</div>

<script>
    let pageX = $(document).width();
    let pageY = $(document).height();
    let mouseY=0;
    let mouseX=0;

    $(document).mousemove(function( event ) {
        mouseY = event.pageY;
        let yAxis = (pageY/2-mouseY)/pageY*300;
        mouseX = event.pageX / -pageX;
        let xAxis = -mouseX * 100 - 100;
        $('.box-ghost-eyes').css({ 'transform': 'translate('+ xAxis +'%,-'+ yAxis +'%)' });
    });


</script>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
