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
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '
    ); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1313314_6fostf6qsl6.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/base.css'); ?>">
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body style="overflow: auto;">
    <div id="pageAnimationOffOn" data="off"
        style="z-index:  999;position:  absolute;top: 15px;right: 20px;font-size: 14px;color: #f9f9f9;cursor: pointer;">
        <span id="pageAnimationOffOnIcon" class="iconfont icon-shandian"
            style="display: inline-block; transform: rotate(0deg); transform-origin: 50% 50%;"></span>
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