<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

function themeConfig($form)
{
    $indexpicUrl = new Typecho_Widget_Helper_Form_Element_Text('indexpicUrl', null, null, _t('首页大图'), _t('在这里填入一个图片URL地址, 用于显示首页大图<br>推荐！'));
    $form->addInput($indexpicUrl);
    $adminpicUrl = new Typecho_Widget_Helper_Form_Element_Text('adminpicUrl', null, null, _t('博主头像'), _t('在这里填入一个图片URL地址, 用于显示博主头像'));
    $form->addInput($adminpicUrl);
    $selfdiscribition = new Typecho_Widget_Helper_Form_Element_Text('selfdiscribition', null, null, _t('自我介绍'), _t('在这里填入一段话, 用于文章末尾显示介绍，不要过长'));
    $form->addInput($selfdiscribition);
}

function themeInit($archive)
{
    if ($archive->is('index')) {
        $archive->parameter->pageSize = 5; // 自定义首页分页条数
    }
}

function header_class($archive)
{
    if ($archive->is('index')) {
        $class = '';
    }
    if ($archive->is('post')) {
        $class = 'post-head';
    }
    if ($archive->is('page')) {
        $class = 'post-head';
    }
    if ($archive->is('archive')) {
        $class = 'post-head';
    }
    echo $class;
}
function body_class($archive)
{
    if ($archive->is('index')) {
        $class = 'home';
    }
    if ($archive->is('post')) {
        $class = 'post-template';
    }
    if ($archive->is('page')) {
        $class = 'post-template';
    }
    if ($archive->is('archive')) {
        $class = 'archive';
    }
    echo $class;
}
