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
<ul class="latestnews <?php echo $moduleclass_sfx; ?>">
<?php if(isset($intro)) : ?>
	<div class="intro">
	<?php echo $intro; ?>
	</div>
<?php endif; ?>

<?php foreach ($list as $item) : ?>
	<li itemscope itemtype="http://schema.org/Article">
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
		<time datetime="<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC4')); ?>" itemprop="datePublished">
			<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC4')); ?>
		</time>
	</li>
<?php endforeach; ?>
</ul>
<p class="readmore"><a href="<?php echo JUri::root().$customlinkurl; ?>"><?php echo $customlinktitle; ?></a></p>