<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!--end: main -->
</div><!--end: home 自定义的最大容器 -->

<!--start: footer -->
  <div id="footer">
        <!--done-->
        Copyright © 2023 王洋
        <br><span id="poweredby">Powered by Typecho</span>

  </div>
<!--end: footer -->

<?php $this->options->globalConfig(); ?>

<?php $this->footer(); ?>

<!--事件监听-->
<script>

    // 点赞
    function digg(url, cid) {
        $.ajax({
            type: 'post',
            url: url,
            data: `digg=${cid}`,
            async: true,
            timeout: 30000,
            cache: false,
            success: function (data) {
                if(data) {
                    $('.rightDiggitSpan').text(data)
                    $('#digg_count').text(data);
                    $('.btn-11').text("感谢推荐!");
                    $('#digg_tips').text("感谢支持");

                }
            },
            error: function (e) {
                console.error(e)
            },
        })
    };

    // 踩
    function bury(url, cid) {
        $.ajax({
            type: 'post',
            url: url,
            data: `bury=${cid}`,
            async: true,
            timeout: 30000,
            cache: false,
            success: function (data) {
                if(data) {
                    $('.rightBuryitSpan').text(data)
                    $('#bury_count').text(data);
                    $('#digg_tips').text("感谢批评,我会再接再厉的(づ￣ 3￣)づ");
                }
            },
            error: function (e) {
                console.error(e)
            },
        })
    };

    // 关注博主
    function follow() {
        $('.hideRightMenu').show();
        $('#rightDashang .rightMenuSpan').hide();
        $('#rightGzh .rightMenuSpan').show();
    };

    // 打赏博主
    function sponsor() {
        $('.hideRightMenu').show();
        $('#rightGzh .rightMenuSpan').hide();
        $('#rightDashang .rightMenuSpan').show();
    };

    // 评论
    function comments(url) {
        $.ajax({
            type: 'post',
            url: url,
            data:  $('#comment-form').serializeArray(),
            async: true,
            timeout: 30000,
            cache: false,
            success: function (data) {
                $('#comments').html($("#comments", data).html());
                $('#tbCommentBody').val("");
            },
            error: function () {
                alert('评论提交失败(っ °Д °;)っ');
            },
        })
    };

</script>

</body>
</html>
