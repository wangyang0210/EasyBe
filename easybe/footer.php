<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!--end: main -->
</div><!--end: home 自定义的最大容器 -->

<!--start: footer -->
  <div id="footer">

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
                    data = JSON.parse(data)
                    $('.rightDiggitSpan').text(data.digg)
                    $('#digg_count').text(data.digg);
                    $('.btn-11').text('感谢推荐!');
                    $('#digg_tips').text(data.msg);
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
                    data = JSON.parse(data)
                    $('.rightBuryitSpan').text(data.bury)
                    $('#bury_count').text(data.bury);
                    $('#digg_tips').text(data.msg);
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
        // win11 判断
        if (typeof navigator.userAgentData != 'undefined') {
            navigator.userAgentData.getHighEntropyValues(['platformVersion']).then(function (ua) {
                if (navigator.userAgentData.platform === 'Windows') {
                    const majorPlatformVersion = parseInt(ua.platformVersion.split('.')[0])
                    if (majorPlatformVersion >= 13) {
                        $("#windows").attr('value', '11');
                    } else {
                        $("#windows").attr('value', '10');
                    }
                }
            })
        }

        let data = $('#comment-form').serializeArray()
        console.log(data)
        const commentObj = {
            "author": '昵称',
            "mail": '邮箱',
            "text": '评论内容'
        }
        let status = data.map(item => {
            if ((item.name in commentObj) && !item.value) {
                $("#notification").show()
                $(".el-notification__content p").text(`${commentObj[item.name]}不能为空哦👻`)
                return false
            }
            if (item.name == 'mail' && item.value && !(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(item.value))) {
                $("#notification").show()
                $(".el-notification__content p").text('邮箱格式貌似不正确哦🤔')
                return false
            }
            let notificationTid = setTimeout(() => {
                $("#notification").fadeOut()
                clearTimeout(notificationTid)
            }, 3000)
            return true
        })

        $(".el-notification__closeBtn").click(() => {
            $("#notification").hide()
        })


        if (status.indexOf(false) === -1) {
            $.ajax({
                type: 'post',
                url: url,
                data:  data,
                async: true,
                timeout: 30000,
                cache: false,
                success: function (data) {
                    $('.comment-list').html($(".comment-list", data).html());
                    $('#tbCommentBody').val("");
                },
                error: function () {
                    $("#notification").show()
                    $(".el-notification__content p").text('对不起, 您的发言过于频繁, 请稍侯再次发布')
                },
            })
        }

    };

</script>

</body>
</html>
