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
    <div id="floating" class="floatingad <?php if(empty($param->get('device_type'))) echo "hidden-lg hidden-md hidden-sm" ;?>">

    </div>
</div>
