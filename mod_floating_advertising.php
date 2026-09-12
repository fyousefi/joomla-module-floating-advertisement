<?php
/**
 * @package    mod_floating_advertising
 * @author     F.Yousefi - https://www.asiasun.ir
 * @copyright  (C) 2026 AsiaSun.ir, Pvt. Ltd. All rights reserved
 * @license    GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @version    2.0.0
 */

defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

if ($params->def('prepare_content', 0)) {
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_floating_advertising.content');
}

$data = array();
$item = array(
	'script' => trim((string) $params->get('banner_script', '')),
	'image'  => modFloatingAdvertisingHelper::mediaPath($params->get('banner_image', '')),
	'link'   => trim((string) $params->get('banner_link', '')),
	'device' => $params->get('device_type', array()),
);
$data[] = $item;

$moduleclass_sfx = htmlspecialchars((string) $params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');
$visibilityClass = modFloatingAdvertisingHelper::visibilityClass($item['device']);
$backgroundImage = modFloatingAdvertisingHelper::mediaPath($params->get('backgroundimage', ''));

require JModuleHelper::getLayoutPath('mod_floating_advertising', $params->get('layout', 'default'));
