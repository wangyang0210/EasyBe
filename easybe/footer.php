<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!--end: main -->
</div><!--end: home 自定义的最大容器 -->

<!--start: footer -->
  <div id="footer">
        <!--done-->
        Copyright © 2022 。思索
        <br><span id="poweredby">Powered by Typecho</span>

  </div>
<!--end: footer -->

<?php $this->options->globalConfig()?>

<?php $this->footer(); ?>

<!--事件监听-->
<script>
    // 点赞
    function agree(url, cid) {
        $.ajax({
            type: 'post',
            url: url,
            data: `agree=${cid}`,
            async: true,
            timeout: 30000,
            cache: false,
            //  请求成功的函数
            success: function (data) {
                $('#digg_count').text(data)
            },
            error: function () {
                // 错误处理
            },
        })
    };

    // 浏览器收藏
    function addFavorite(title, url) {
        try {
            window.external.addFavorite(url, title);
        } catch (e) {
            try {
                window.sidebar.addPanel(title, url, "");
            } catch (e) {
                alert("抱歉，您所使用的浏览器无法完成此操作，请使用Ctrl+D进行添加!");
            }
        }
    };

    // 分享到微博
    function shareWeibo(url, title, img = '', key = '') {
        let fullUrl = `https://service.weibo.com/share/share.php?url=${url}&title=${title}&pic=${img}&appkey=${key}`;
        window.open(fullUrl)
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
                // $('.comment-list').html($(".comment-list", data).html());
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
