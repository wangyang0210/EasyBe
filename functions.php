<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    // $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('填入一个图片 URL 地址, 网站标题前加上一个 LOGO'));
    // $form->addInput($logoUrl);
    // $blogLogo = new Typecho_Widget_Helper_Form_Element_Text('blogLogo', null, null, _t('站点favicon'), _t('填入一个图片 URL 地址, 网站标签栏上加上一个 LOGO'));
    // $form->addInput($blogLogo);
    // $indexpicUrl = new Typecho_Widget_Helper_Form_Element_Text('indexpicUrl', null, null, _t('首页Banner'), _t('填入一个图片URL地址, 首页Banner'));
    // $form->addInput($indexpicUrl);
    // $contentpicUrl = new Typecho_Widget_Helper_Form_Element_Text('contentpicUrl', null, null, _t('内容页Banner'), _t('填入一个图片URL地址, 内容页Banner'));
    // $form->addInput($contentpicUrl);
    $adminpicUrl = new Typecho_Widget_Helper_Form_Element_Text('adminpicUrl', null, null, _t('博主头像'), _t('填入一个图片URL地址, 博主头像'));
    $form->addInput($adminpicUrl);
    // $selfdiscribition = new Typecho_Widget_Helper_Form_Element_Text('selfdiscribition', null, null, _t('个性签名'), _t('请输入您的个性签名'));
    // $form->addInput($selfdiscribition);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox(
        'sidebarBlock', 
        array('ShowRecentPosts' => _t('显示最新文章'),
        // 'ShowRecentComments' => _t('显示最近回复'),
        'ShowCategory' => _t('显示分类'),
        'ShowArchive' => _t('显示归档'),
        'ShowOther' => _t('显示其它杂项')),
        array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示')
    );
    
    $form->addInput($sidebarBlock->multiMode());
}

// function header_class($archive)
// {
//     if ($archive->is('index')) {
//         $class = '';
//     }
//     if ($archive->is('post')) {
//         $class = 'post-head';
//     }
//     if ($archive->is('page')) {
//         $class = 'post-head';
//     }
//     if ($archive->is('archive')) {
//         $class = 'post-head';
//     }
//     echo $class;
// }
// function body_class($archive)
// {
//     if ($archive->is('index')) {
//         $class = 'home';
//     }
//     if ($archive->is('post')) {
//         $class = 'post-template';
//     }
//     if ($archive->is('page')) {
//         $class = 'post-template';
//     }
//     if ($archive->is('archive')) {
//         $class = 'archive';
//     }
//     echo $class;
// }
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
    }
    echo $row['views'];
}


