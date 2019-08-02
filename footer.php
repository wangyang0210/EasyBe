<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="footer">

<!-- 滚动进度 -->
<div id="bottomProgressBar"></div>

<!-- 音乐播放器 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer@1.10.0/dist/APlayer.min.css">
<script src="https://cdn.jsdelivr.net/npm/aplayer@1.10.0/dist/APlayer.min.js"></script>
<div id="aplayer" class="aplayer" data-id="1978921795" data-lrctype="0" data-server="netease" data-type="playlist" data-fixed="true" data-listfolded="true"></div>
<script src="https://unpkg.com/meting@1.2/dist/Meting.min.js"></script>

<!-- 右下角菜单 -->
<div id="rightMenu">
</div>

<!-- 鼠标点击 -->
<script src="https://files.cnblogs.com/files/wangyang0210/mouse-click.js"></script>
<canvas width="1777" height="841" style="position: fixed; left: 0px; top: 0px; z-index: 2147483647; pointer-events: none;"></canvas>


<!-- cnzz统计 -->
<div id="cnzzProtocol"  style="display: none;">
<span class="id_cnzz_stat_icon" id='cnzz_stat_icon_1275508084'></span>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1275508084'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/z_stat.php%3Fid%3D1275508084%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</div>
<!-- footer end -->
</div><!-- home end -->
<script src="<?php $this->options->themeUrl('static/js/jquery-2.2.0.min.js');?>"></script>
<!-- 鼠标点击 -->
<script src="<?php $this->options->themeUrl('static/js/mouseClick.js');?>"></script>

<!-- global var -->
<script type="text/javascript">

    //博客全局配置
    window.cnblogsConfig = {

        // ---- GitHub文件源配置 ----
        GhUserName: 'wangyang0210', 
        GhRepositories: 'Cnblogs-Theme-BNDong', 
        GhVersions : '6f664454fe3a7ef0dbfa5e96957b10d1c4d60892', 

        // ---- 基础信息配置 ----custom
        blogUser      : "。思索",
        blogAvatar    : "http://cache.wangyangyang.vip/12222222222222.jpg",
        blogStartDate : "2018-2-12", 
      
        // ---- 菜单配置 ----
        menuCustomList: { 
            
        },
        

       // ---- 网站配置 ----
        webpageTitleOnblur        : "(◍´꒳`◍) Hi, MyFriend", 
        webpageTitleOnblurTimeOut : 500, 
        webpageTitleFocus         : "(*´∇｀*) 欢迎回来！", 
        webpageTitleFocusTimeOut  : 1000, 
        webpageIcon : "https://files.cnblogs.com/files/wangyang0210/blog_logo.gif", 

        // ---- 进度条配置 ----
        progressBar: {
            id      : 'top-progress-bar',
            color   : '#77b6ff',
            height  : '2px',
            duration: 0.2
        },

        // ---- Loading配置 ----
        loading: {
            rebound: {
                tension: 16,
                friction: 5
            },
            spinner: {
                id: 'spinner',
                radius: 90,
                sides: 3,
                depth: 4,
                colors: {
                    background: '#f0f0f0',
                    stroke: '#272633',
                    base: null,
                    child: '#272633'
                },
                alwaysForward: true, // When false the spring will reverse normally.
                restAt: 0.5,         // A number from 0.1 to 0.9 || null for full rotation
                renderBase: false
            }
        },

        // ---- 页面动效配置 ----
        homeTopAnimationRendered: true, // true || false ,是否渲染主页头图动效
        homeTopAnimation: { // 主页头图动效设置
            radius: 15,
            density: 0.2,
            color: 'rgba(255,255,255, .2)', // 颜色设置，“random” 为随机颜色
            clearOffset: 0.3
        },

        essayTopAnimationRendered: true, // true || false ,是否渲染随笔页头图动效
        essayTopAnimation: { // 随笔页头图动效设置
            triW : 14,
            triH : 20,
            neighbours : ["side", "top", "bottom"],
            speedTrailAppear : .1,
            speedTrailDisappear : .1,
            speedTriOpen : 1,
            trailMaxLength : 30,
            trailIntervalCreation : 100,
            delayBeforeDisappear : 2,
            colors: [
                '#96EDA6', '#5BC6A9',
                '#38668C', '#374D84',
                '#BED5CB', '#62ADC6',
                '#8EE5DE', '#304E7B'
            ]
        },

        bgAnimationRendered: true, // true || false ,是否渲染背景动效
        backgroundAnimation : { // 背景动效设置
            colorSaturation: "60%",
            colorBrightness: "50%",
            colorAlpha: 0.5,
            colorCycleSpeed: 5,
            verticalPosition: "random",
            horizontalSpeed: 200,
            ribbonCount: 3,
            strokeSize: 0,
            parallaxAmount: -0.2,
            animateSections: true
        },

        // ---- 主页配置 ----
        homeTopImg    : [ 
            "http://cache.wangyangyang.vip/wallhaven-vgykv8.png",
            "http://cache.wangyangyang.vip/wallhaven-694674.jpg",
            "http://cache.wangyangyang.vip/wallhaven-x1991d.jpg"
        ],
        homeBannerText: "", 

        // ---- 随笔页配置 ----
        essayTopImg: [ 
            "http://cache.wangyangyang.vip/wall-bky.png"
        ],
        essayCodeHighlightingType: 'cnblogs', // 代码主题插件类型：cnblogs || highlightjs || prettify
        essayCodeHighlighting: 'cnblogs', // 代码高亮主题，具体主题参考文档
        essaySuffix:{ // 随笔后缀处配置
            aboutHtml    : '', // 关于博主，不配置使用默认
            copyrightHtml: '', // 版权声明，不配置使用默认
            supportHtml  : ''  // 声援博主，不配置使用默认
        },

        // ---- 页脚配置 ----
        bottomBlogroll: [ // 友情链接，[[链接名,链接]....]
            ["王洋", 'http://www.wangyangyang.vip'],
            ["申请坑位", 'https://msg.cnblogs.com/send/wangyang0210'],
            ["申请坑位", 'https://msg.cnblogs.com/send/wangyang0210'],
            ["申请坑位", 'https://msg.cnblogs.com/send/wangyang0210'],
            ["申请坑位", 'https://msg.cnblogs.com/send/wangyang0210'],
        ],
        bottomText: {  // 页脚标语
            icon: "❤️",
            left: "学无止境",
            right: "谦卑而行"
        },

        // ---- 控制台输出 ----
        consoleList: [
        ['wangyang0210 CNBlogs', 'https://www.cnblogs.com/wangyang0210'],
        ['wangyang0210 GitHub', 'https://github.com/wangyang0210'],
        ['wangyang0210 Email', '2752154874@qq.com']
        ],
    };

    // start cache
    $.ajaxSetup({cache: true});

    // load loadingJs
    $.getScript(getJsDelivrUrl('loading.js'), function () {

        // Loading start
        pageLoading.initRebound();
        pageLoading.initSpinner();
        pageLoading.spinner.init(pageLoading.spring, true);
        $.getScript(getJsDelivrUrl('jquery.mCustomScrollbar.min.js'), function () {
            $.getScript(getJsDelivrUrl('require.min.js'), function () {
                $.getScript(getJsDelivrUrl('config.js'), function () {
                    var staticResource = [
                        'optiscroll', 'ToProgress', 'rotate',
                        'snapSvg', 'classie', 'main4', 'tools'];
                    require(staticResource, function() {
                        require(['base'], function() {
                            (new Base).init();
                        });
                    });
                });
            });
        });
    });

    // get file url
    function getJsDelivrUrl(file, directory) {
        file = setFileNameMin(file, directory);
        return 'https://cdn.jsdelivr.net/gh/'+(window.cnblogsConfig.GhUserName)+'/'+(window.cnblogsConfig.GhRepositories)+'@'+(window.cnblogsConfig.GhVersions)+'/' + (file ? file : '');
    }

    // optimization file name
    function setFileNameMin(file, directory) {
        if (typeof file == 'undefined') return '';
        var suffix  = null,fileArr = file.split('.');
        if (fileArr.length > 0 && $.inArray(fileArr[(fileArr.length -1)], ['js', 'css']) != -1)
            {suffix    = fileArr.pop(); directory = suffix;}
        file.search('.min') == -1 && fileArr.push('min');
        suffix != null && fileArr.push(suffix);
        return (typeof directory !== 'undefined' ? (directory + '/' + fileArr.join('.')) : (fileArr.join('.')));
    }
</script>
</script>


<?php $this->footer(); ?>
</body>
</html>
