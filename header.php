<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
    <link rel="stylesheet" type="text/css" href="//fonts.proxy.ustclug.org/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/c7sky.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/screen.css'); ?>">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.comment-respond {
    background: #FFF;
}
@media (max-width: 568px) {
.pagination {
    display: block!important;
}
}
</style>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="<?php body_class($this)?> nav-closed">

<!-- 菜单 -->
<div class="nav">
    <h3 class="nav-title">Menu</h3>
    <a href="#" class="nav-close">
        <span class="hidden">Close</span>
    </a>
    <ul>
        <li class="nav-<?php if ($this->is('index')) :
            ?> nav-current<?php
                       endif; ?>"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while ($pages->next()) : ?>
<li class="nav- <?php if ($this->is('page', $pages->slug)) :
    ?>nav-current<?php
                endif; ?>" role="presentation"><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
<?php endwhile; ?>
    </ul>
<a class="subscribe-button icon-feed" href="<?php $this->options->siteUrl(); ?>feed">订阅</a>
</div>
<span class="nav-cover"></span>
<div class="site-wrapper">

<?php if ($this->is('index')) : ?>
  <header class="main-header " style="background-image: url(<?php $this->options->indexpicUrl() ?>)">
<?php else : ?>
  <header class="main-header <?php header_class($this)?> <?php if (isset($this->fields->pic)) :
        ?><?php
                             else :
                                    ?>no-cover<?php
                             endif; ?>" <?php if (isset($this->fields->pic)) :
    ?>style="background-image: url(<?php $this->fields->pic(); ?>)"<?php
                             endif; ?>>
<?php endif;?>



