<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit;
} ?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
    <meta charset="utf-8">
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

<body>
    <div id="home">
        <div id="header">
            <div id="blogTitle">
                <a id="lnkBlogLogo" href="https://www.cnblogs.com/wangyang1225/">
                    <img id="blogLogo" src="/skins/custom/images/logo.gif" alt="返回主页">
                </a>
                <!--done-->
                <h1>
                    <a id="Header1_HeaderTitle" class="headermaintitle HeaderMainTitle" href="https://www.cnblogs.com/wangyang1225/">wangyang1225</a>
                </h1>
                <h2></h2>
            </div><!--end: blogTitle 博客的标题和副标题 -->
        </div>
