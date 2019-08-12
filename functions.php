<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $adminpicUrl = new Typecho_Widget_Helper_Form_Element_Text('adminpicUrl', null, null, _t('头像'), _t('填入一个图片URL地址, 博主头像'));
    $form->addInput($adminpicUrl);
    $adminName = new Typecho_Widget_Helper_Form_Element_Text('adminName', null, null, _t('昵称'), _t('填入昵称,用于侧边导航中展示'));
    $form->addInput($adminName);
    $adminWorker = new Typecho_Widget_Helper_Form_Element_Text('adminWorker', null, null, _t('职业'), _t('填入职业,用于侧边导航中展示'));
    $form->addInput($adminWorker);
    $adminCity = new Typecho_Widget_Helper_Form_Element_Text('adminCity', null, null, _t('居住地'), _t('填入居住地,用于侧边导航中展示'));
    $form->addInput($adminCity);
    $siteStatistics = new Typecho_Widget_Helper_Form_Element_Textarea('siteStatistics', array('style'=>"height:200px"), null, ('CNZZ统计'), _t('填入自己的CNZZ统计代码,用于底部站点统计'));
    $form->addInput($siteStatistics);
    $globalConfig = new Typecho_Widget_Helper_Form_Element_Textarea('globalConfig', array('style'=>"height:500px"), null, _t('全局配置'), _t('站点全局配置'));
    $form->addInput($globalConfig);
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

//阅读访问量
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


