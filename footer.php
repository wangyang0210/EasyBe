<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="footer">
		
<!--done-->
Copyright ©2019 。思索
    <span id="amazingStatSpan"></span>
    <div>【学无止境<span id="footerTextIcon">❤️</span>谦卑而行】</div>
    <div>
        <span id="blogRunTimeSpan">This blog has running : 527 d 15 h 27 m 41 s</span>
        <span class="my-face">(^・ω・^ )( ^・ω・^)</span>
    </div>
    <div id="blogrollInfo">友情链接：
        <a href="http://www.wangyangyang.vip" target="_blank">王洋</a>
        <span style="margin: 0 3px;">/</span>
        <a href="https://msg.cnblogs.com/send/wangyang0210" target="_blank">申请坑位</a>
        <span style="margin: 0 3px;">/</span>
        <a href="https://msg.cnblogs.com/send/wangyang0210" target="_blank">申请坑位</a>
        <span style="margin: 0 3px;">/</span>
        <a href="https://msg.cnblogs.com/send/wangyang0210" target="_blank">申请坑位</a>
        <span style="margin: 0 3px;">/</span>
        <a href="https://msg.cnblogs.com/send/wangyang0210" target="_blank">申请坑位</a>
    </div>
    <div id="cnzzInfo">TodayIP:439 | TodayPV:663 | YesterdayIP:421 | YesterdayPV:640 | Online:2</div>
</div>
<!-- footer end -->
</div><!-- home end -->
<script src="<?php $this->options->themeUrl('static/js/jquery-2.2.0.min.js');?>"></script>
<!-- 鼠标点击 -->
<script src="<?php $this->options->themeUrl('static/js/mouseClick.js');?>"></script>
<!-- Banner气泡 -->
<script src="<?php $this->options->themeUrl('static/js/circleMagic.min.js');?>"></script>
<script>
    $(' #homeTopCanvas').circleMagic({
        elem: ' #homeTopCanvas',
        // radius: 10,
        // densety: .3,
        // color: 'rgba(255,255,255, .5)',
        // color: 'random',
        // clearOffset: .2
    });
</script>

<?php $this->footer(); ?>
</body>
</html>
