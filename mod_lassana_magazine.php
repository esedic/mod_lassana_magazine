<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lassana_magazine
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list            = ModLassanaMagazineHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$customlinkurl = $params->get('customlinkurl');
$customlinktitle = $params->get('customlinktitle');
$menuitemid = $params->get('itemid');
$intro = $params->get('intro');

require JModuleHelper::getLayoutPath('mod_lassana_magazine', $params->get('layout', 'default'));
