# EasyBe

名字是`easy`和`beautiful`的结合，意味着这个主题是一个简单且美观的博客主题，`EasyBe`基于本人[博客园](https://www.cnblogs.com/wangyang0210/)目前所使用的皮肤和typecho的默认主题开发。
>博客园的皮肤来源于[BNDong](https://github.com/BNDong/Cnblogs-Theme-SimpleMemory)
* `EasyBe`以阅读为核心，尽可能的美化博客的显示效果，提高用户体验。
* 支持响应，尺寸分别为：(1200px,∞px)，(960px,1200px]，(720px,960px]，(0px,720px]
* 页面效果[EasyBe](https://www.wangyangyang.vip/)

# 目录结构
```
EasyBe
│
├─ 404.php
├─ README.md
├─ archive.php
├─ comments.php
├─ footer.php
├─ functions.php
├─ header.php
├─ index.php
├─ page.php
├─ post.php
├─ screenshot.png
├─ sidebar.php
└─ static
       ├─ css
       │    ├─ baguetteBox.min.css
       │    ├─ base.css
       │    ├─ base.min.css
       │    ├─ codeDesert.css
       │    ├─ codeDoxy.css
       │    ├─ codeObsidian.css
       │    ├─ codePrettify.css
       │    ├─ codeSunburst.css
       │    ├─ gallery-clean.css
       │    ├─ jquery.mCustomScrollbar.css
       │    ├─ marvin.nav2.css
       │    ├─ menu_bubble.css
       │    └─ optiscroll.css
       ├─ imgs
       │    ├─ comment_bg.jpg
       │    └─ home_top_bg.jpg
       └─ js
              ├─ MyTween.js
              ├─ RibbonsEffect.js
              ├─ ToProgress.min.js
              ├─ TweenMax.min.js
              ├─ articleStatement.js
              ├─ articleTitle.js
              ├─ baguetteBox.min.js
              ├─ base.js
              ├─ bootstrap.min.js
              ├─ circleMagic.js
              ├─ classie.js
              ├─ config.js
              ├─ css.min.js
              ├─ highlight.min.js
              ├─ jquery.js
              ├─ jquery.mCustomScrollbar.min.js
              ├─ jquery.optiscroll.js
              ├─ jquery.rotate.min.js
              ├─ loading.min.js
              ├─ main4.js
              ├─ marvin.nav2.js
              ├─ mouse-click.js
              ├─ require.min.js
              ├─ run_prettify.js
              ├─ snap.svg-min.js
              └─ tools.js
```
# 使用说明

>首先您可以直接克隆或者fork该仓库

## 个人信息
* 头像
* 昵称
* 职业
* 居住地
>在设置外观中直接设置即可


## 全局配置
>设置外观全局配置中设置
```
<!-- global var -->
<script type="text/javascript">

    //博客全局配置
    window.cnblogsConfig = {

        // ---- GitHub文件源配置 ----
        GhUserName: 'wangyang0210', 
        GhRepositories: 'EasyBe', 
        GhVersions : '2fe1857351f385f3712cbdd293aff31d96856d4e', 

        // ---- 基础信息配置 ----custom
        blogUser      : "。思索",
        blogAvatar    : 
        "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/nothome_top_bg.webp",
        blogStartDate : "2019-8-1", 
      
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
             "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-j55w9p_1920x1080.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-dgzkw3_1920x1080.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/home_top_bg.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-x1wroo.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/nothome_top_bg.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-13gom9.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-vg7lv3.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-odej2m.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-j5mz95.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/19059-wallhaven-3911w9.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-6k3oox.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/for.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-737jo3.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/42476-wallhaven-oxzk8m.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-oxdyvl.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/44817-wallhaven-p8rdq9.webp"
        ],
        homeBannerText: "", 

        // ---- 随笔页配置 ----
        essayTopImg: [ 
               "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/nothome_top_bg.webp",
            "https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@theme-simpleMemory/img/webp/wallhaven-13gom9.webp"
        ],
        essayCodeHighlightingType: 'highlightjs', // 代码主题插件类型：cnblogs || highlightjs || prettify
        essayCodeHighlighting: 'monokai-sublime', // 代码高亮主题，具体主题参考文档
        essaySuffix:{ // 随笔后缀处配置
            aboutHtml    : '', // 关于博主，不配置使用默认
            copyrightHtml: '', // 版权声明，不配置使用默认
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
        return 'https://cdn.jsdelivr.net/gh/'+(window.cnblogsConfig.GhUserName)+'/'+(window.cnblogsConfig.GhRepositories)+'@'+(window.cnblogsConfig.GhVersions)+'/static/' + (file ? file : '');
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
```

## 网站统计
本主题整合 CNZZ 网站统计，并对样式进行了优化。如果需要本功能，请首先去 [CNZZ](https://www.umeng.com/) 配置网站的统计，然后修改下面的代码，添加至`CNZZ统计`配置中。
```html
 <span class="id_cnzz_stat_icon" id='cnzz_stat_icon_你的统计ID'></span>
 <script src='https://s19.cnzz.com/z_stat.php?id=你的统计ID&online=1&show=line' type='text/javascript'></script>
```

## 备案信息
本主题整合 备案信息,如果需要本功能,请首先去[全国互联网管理平台](http://www.beian.gov.cn/portal/index.do)备案, 然后修改西面代码, 添加至`备案信息`配置中
```html
<div style="width:300px;margin:0 auto; padding:20px 0;">
    <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=你的备案号" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
        <img src="http://cache.wangyangyang.vip/beian_icon.png" style="float:left;">
        <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">你的备案信息</p>
    </a>
</div>

```

>使用该主题,请注明来源
