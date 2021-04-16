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

if(){
}
?>
