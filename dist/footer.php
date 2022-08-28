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
                console.log('agree', data);
                // var re = /\d/;  //  匹配数字的正则表达式
                // //  匹配数字
                // if (re.test(data)) {
                //     //  把点赞按钮中的点赞数量设置为传回的点赞数量
                //     $('#agree .agree-num').html(data);
                // }
                //
                // //这里可以添加点赞成功后的效果代码，根据自身需求添加
                //
                // $('#agree').get(0).disabled = true;  //  禁用点赞按钮
            },
            error: function () {
                // 错误处理
            },
        })
    };

</script>

</body>
</html>
