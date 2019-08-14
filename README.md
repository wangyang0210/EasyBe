# EasyBe

名字是`easy`和`beautiful`的结合，意味着这个主题是一个简单且美观的博客主题，`EasyBe`基于本人博客园目前所使用的皮肤和typecho的默认主题开发。
* `EasyBe`以阅读为核心，尽可能的美化博客的显示效果，提高用户体验。
* 支持响应，尺寸分别为：(1200px,∞px)，(960px,1200px]，(720px,960px]，(0px,720px]

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
              ├─ jquery-2.2.0.min.js
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

## 个人信息
* 头像
* 昵称
* 职业
* 居住地
>在设置外观中直接设置即可

## 代码高亮
本主题整合了两个代码高亮插件分别是：
* [code-prettify](https://github.com/google/code-prettify) 
* [highlightjs](https://highlightjs.org/) 
>使用第三方代码高亮插件，对页面加载速度有一定影响，大家自己权衡！

### 高亮主题的配置
#### 配置代码高亮插件
代码高亮主题的类型配置：```essayCodeHighlightingType```

|value        |description|
|:------------|:----------|
|highlightjs  |使用 **highlightjs** 对代码进行渲染。|
|prettify     |使用 **code-prettify** 对代码进行渲染。|
#### 配置代码高亮主题
配置代码高亮主题的配置为：```essayCodeHighlighting```
```
essayCodeHighlighting 可配置范围：
任意，此配置不会对渲染产生影响。
```
* essayCodeHighlightingType: 'highlightjs'
<br>支持官方所有主题，样式参考：[GoTo](https://highlightjs.org/static/demo/)
```
essayCodeHighlighting 可配置范围：

default
a11y-dark
a11y-light
agate
an-old-hope
androidstudio
arduino-light
arta
ascetic
atelier-cave-dark
atelier-cave-light
atelier-dune-dark
atelier-dune-light
atelier-estuary-dark
atelier-estuary-light
atelier-forest-dark
atelier-forest-light
atelier-heath-dark
atelier-heath-light
atelier-lakeside-dark
atelier-lakeside-light
atelier-plateau-dark
atelier-plateau-light
atelier-savanna-dark
atelier-savanna-light
atelier-seaside-dark
atelier-seaside-light
atelier-sulphurpool-dark
atelier-sulphurpool-light
atom-one-dark-reasonable
atom-one-dark
atom-one-light
brown-paper
codepen-embed
color-brewer
darcula
dark
darkula
docco
dracula
far
foundation
github-gist
github
gml
googlecode
grayscale
gruvbox-dark
gruvbox-light
hopscotch
hybrid
idea
ir-black
isbl-editor-dark
isbl-editor-light
kimbie.dark
kimbie.light
lightfair
magula
mono-blue
monokai-sublime
monokai
nord
obsidian
ocean
paraiso-dark
paraiso-light
pojoaque
purebasic
qtcreator_dark
qtcreator_light
railscasts
rainbow
routeros
school-book
shades-of-purple
solarized-dark
solarized-light
sunburst
tomorrow-night-blue
tomorrow-night-bright
tomorrow-night-eighties
tomorrow-night
tomorrow
vs
vs2015
xcode
xt256
zenburn
```
* essayCodeHighlightingType: 'prettify'
<br>支持官方所有主题，样式参考：[GoTo](https://rawgit.com/google/code-prettify/master/styles/index.html)
```
essayCodeHighlighting 可配置范围：
prettify
desert
sunburst
obsidian
doxy
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

# 更新历史

## 2019-08-14
```
1. 增加设置备案信息
2. fix-出处链接自适应

```

### 2019-08-13 

```
1. fix-代码高亮
```


### 2019-08-12

```
1. 主题制作完成
2. 修复小BUG
```


### 2019-08-11

```
内容页完成
1. 评论区域
2. 文章区域
```
### 2019-08-02

```
首页内容基本完成
1. 样式
2. 特效
3. 展示
``` 


### 2019-07-25

```
1.首页内容
2.侧边导航内容
```

### 2019-07-24

```
1. 项目重构
```

### 2019-07-18

```
1. 项目建立
2. 修改目录结构
```



