<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit;
} ?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(
        array(
            'category'  =>  _t('分类 - %s'),
            'search'    =>  _t('关键字 - %s'),
            'tag'       =>  _t('标签 - %s'),
            'author'    =>  _t('作者 - %s')
        ), '', ' - '
    ); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('simpleMemory.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body style="overflow: auto;">
    <div id="pageAnimationOffOn" >
        <span id="pageAnimationOffOnIcon" class="iconfont icon-shandian"></span>
        <span id="pageAnimationOffOnText">关闭页面特效</span>
    </div>
    <a name="top"></a>

    <!-- Loading 底层遮罩 -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
            </div>
        </div>
    </div>


    <!--[if lt IE 8]>
        <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    <![endif]-->
    <div class="clear"></div>
    <div id="home" style="margin-top: 1434px;">