<?php
/**
 * EasyBe是一款
 * 
 * @package EasyBe 
 * @author wangyang
 * @version 0.1
 * @link http://www.wangyangyang.vip
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


<div id="mainContent">
    <div class="forFlow">
    <?php while($this->next()): ?>

<div class="day">
            <div class="postTitle">
                <a id="homepage1_HomePageDays_DaysList_ctl00_DayList_TitleUrl_0" class="postTitle2" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </div>
            <div class="postCon">
                <div class="c_b_p_desc">
                <?php $this->excerpt('200', '...');?><a class="read-more" href="<?php $this->permalink() ?>"
                <a href="<?php $this->permalink() ?>" class="c_b_p_desc_readmore">阅读全文</a> 
                </div>
            </div>
            <div class="clear"></div>
            <div class="postDesc" >
                <img class="author-thumb" src="<?php  $this->options->adminpicUrl(); ?>">
                <?php $this->author(); ?>
                <?php $this->date("Y-m-d H:i:s"); ?>
                阅读(<?php get_post_view($this) ?>) 
                评论(<?php $this->commentsNum('%d'); ?>)
                <?php if($this->user->hasLogin()) :?>
                    <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
                <?php endif;?>
            </div>
            <div class="clear"></div>
        
            <div class="postSeparator"></div>
        
</div>
<?php endwhile; ?>

<nav class="pagination" role="navigation">
        
        
       
</nav> 

<div class="topicListFooter">
    <div id="nav_next_page">
        <?php $this->pageLink('<xt class="newer-posts"><span aria-hidden="true"></span><span>上一页</span></xt>'); ?>
        <?php $this->pageLink('<xt class="older-posts"><span>下一页</span><span aria-hidden="true"></span></xt>', 'next'); ?>
        <span>
            <?php if ($this->_currentPage>1) {echo $this->_currentPage;} else {echo 1;}?> 
                / 
            <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
        </span>
    </div>

</div>

    
    </div><!--end: forFlow -->
</div>
<div class="clear"></div>

    <?php $this->need('sidebar.php'); ?>
    <?php $this->need('footer.php'); ?>