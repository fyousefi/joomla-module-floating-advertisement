<?php
  /**
  * @package
  * @subpackage
  *
  * @copyright
  * @license     GNU General Public License version 2 or later
  */

defined('_JEXEC') or die;
$data = array();
if($params->def('prepare_content', 1)){
  JPluginHelper::importPlugin('content');
  $module->content = JHtml::_('content.prepare', $module->content, '', 'mod_floating_ad.content');
}

if($params->get('banner_script')){
  $data[0][ 'script' ] = $params->get('banner_script');
}

if($params->get('banner_image')){
  $data[0][ 'image' ] = $params->get('banner_image');
}

if($params->get('banner_link')){
  $data[0][ 'link' ] = $params->get('banner_link');
}

if($params->get('device_type')){
  $data[0][ 'device' ] = $params->get('device_type');
}
?>
