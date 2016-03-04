<?
/*
 * @package           jbzoo
 * @version           2.x.Pro
 * @template_author   German Martirosyan http://www.studio-aw.ru
 * @item              news    
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

$align  = $this->app->jbitem->getMediaAlign($item, $layout);
$tabsId = $this->app->jbstring->getId('tabs');
?>
<p class="cat-reg-bage"><?php echo $this->renderPosition('category'); ?></p>
<h1><?php echo $this->renderPosition('title'); ?></h1>
<?php if ($this->checkPosition('image')) : ?>
  <div class="fullstory-img"><?php echo $this->renderPosition('image'); ?></div>  
  <div class="fullstory-img"><?php echo $this->renderPosition('photograf'); ?></div>  
<?php endif; ?>
<div class="date-comm">
  <?php echo $this->renderPosition('date'); ?>
  <?php echo $this->renderPosition('comm'); ?>
</div>
<?php if ($this->checkPosition('fulltext')) : ?>
  <div class="fulltext">
    <?php echo $this->renderPosition('fulltext'); ?>
  </div>   
<?php endif; ?>

