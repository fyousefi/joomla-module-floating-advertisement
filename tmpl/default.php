<?php
  /**
  * @package     Joomla.Site
  * @subpackage  mod_floating_advertising
  * @author      F.Yousefi
  *
  * @copyright   Copyright (C) AsiaSun.ir All rights reserved.
  * @license     GNU General Public License version 2 or later
  */

defined('_JEXEC') or die;

$count = count($data);
?>

<script>
    function adclose() {
        var element = document.getElementById("floating");
        element.remove("div #floating");
    }
</script>

<style>
    .floatingad {
        position: fixed;
        bottom: 0%;
        width: 100%;
        z-index: 1000;
    }
</style>

<div class="row">
    <div id="floating" class="floatingad <?php if(empty($params->get('device_type'))) echo "hidden-lg hidden-md hidden-sm hidden-xs";?>
         <?php foreach($params->get('device_type') as $x => $x_value) {
            if($x_value == 'tablet') echo "visible-sm-block ";
            if($x_value == 'phone') echo "visible-xs-block ";
         }?> <?php echo $moduleclass_sfx; ?>"
         <?php if($params->get('backgroundimage')): ?>
               style="background-image:url(<?php echo $params->get('backgroundimage');?>)"
               <?php endif; ?>>
        <div class="inner">
             <span style="font-size: 10px; background-color: #7e1a18; color: #f1f3f5" onclick="adclose()" aria-hidden="true"><i class="fa fa-times-circle"><i>Close</span>
             <?php foreach($data as $index=>$value): ?>
                <?php if(isset($value['link']) and !empty($value['link']) ): ?>
                  <a href="<?php echo $value['link']; ?>" target="_blank" rel="nofollow">
                     <?php if(isset($value['image']) and !empty($value['image'])): ?>
                     <img class="" src="">
                  </a>
                <?php endif; ?>
             <?php endforeach; ?>
        </div>
    </div>
</div>
