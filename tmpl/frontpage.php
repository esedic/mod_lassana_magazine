<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lassana_magazine
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="latestnews <?php echo $moduleclass_sfx; ?>">
<?php if(isset($intro)) : ?>
	<div class="intro">
	<?php echo $intro; ?>
	</div>
<?php endif; ?>

<?php foreach ($list as $item) : ?>
	<?php $images = json_decode($item->images); ?>
	<div itemscope itemtype="http://schema.org/Article">

		<a class="mag__cat-title" href="<?php echo $item->category_route; ?>" title="<?php echo $item->category_title; ?>"><?php echo $item->category_title; ?></a>

		<h2 class="mag__item-title">
			<a href="<?php echo $item->link; ?>" itemprop="url">
				<span itemprop="name">
					<?php echo $item->title; ?>
				</span>
			</a>
		</h2>
		<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
			<div class="mag__item-img">
				<img src="<?php echo JUri::root().$images->image_intro;?>" alt="<?php echo $item->title; ?>">
			</div>
		<?php endif; ?>
		
		<div class="mag__item-intro">
			<?php echo $item->introtext; ?>
		</div>

		<time class="mag__item-date" datetime="<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC4')); ?>" itemprop="datePublished">
			<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC5')); ?>
		</time>
	</div>
<?php endforeach; ?>
</div>