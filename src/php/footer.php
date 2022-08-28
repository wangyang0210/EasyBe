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
        $('.hideRightMenu').show()
        $('#rightGzh .rightMenuSpan').show()
    };

    // 打赏博主
    function sponsor() {
        $('.hideRightMenu').show()
        $('#rightDashang .rightMenuSpan').show()
    }

    // 评论
    function comments() {
        $(`<li id="li-comment-25" class="comment-body comment-parent comment-odd comment-by-author">

        <div class="feedbackItem" id="comment-25" style="padding-bottom: 0px;"><div class="feedbackAvatar img-rounded"><a href="http://test.easybe.org/index.php/archives/20/#comment-22" target="_blank"><img src="https://cdn.jsdelivr.net/gh/wangyang0210/pic/avatar-img/avatar-358.jpg"></a></div>
            <div class="feedbackListSubtitle feedbackListSubtitle-louzhu">
                <div class="feedbackManage">
                <span class="comment_actions">
                    <a href="http://test.easybe.org/index.php/archives/20/?replyTo=25#respond-post-20" rel="nofollow" onclick="return TypechoComment.reply('comment-25', 25);">回复</a>                </span>
                </div>
                <a href="javascript:void(0);" class="layer">#7楼</a>
                <span class="louzhu">[楼主]</span>                                <span class="comment_date">2022-08-28 23:32</span>
                <a id="a_comment_author_7" href="http://test.easybe.org/index.php/archives/20/#comment-25"></a><a href="https://www.wangyangyang.vip/" rel="external nofollow">王洋</a>
            </div>
            <div class="feedbackCon">
                <div id="comment_body_7" class="blog_comment_body">
                    <p>
                        <a></a>
                        <br></p><p>你好啊,测试下22222222</p>                    <p></p>
                </div>
                <div class="comment_vote">
                    <span class="comment_error" style="color: red"></span>
                </div>
                <span id="comment_7_avatar" style="display:none">
             https://cdn.jsdelivr.net/gh/wangyang0210/pic/avatar-img/avatar-260.jpg
            </span>
            </div>
        </div>

            </li>`).appendTo('.comment-list #li-comment-25')
    }

</script>

</body>
</html>
