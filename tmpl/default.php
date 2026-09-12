<?php
/**
 * @package    mod_floating_advertising
 * @author     F.Yousefi - https://www.asiasun.ir
 * @copyright  (C) 2026 AsiaSun.ir, Pvt. Ltd. All rights reserved
 * @license    GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @version    2.0.0
 */

defined('_JEXEC') or die;
?>
<style>
	.floatingad {
		position: fixed;
		bottom: 0;
		left: 0;
		width: 100%;
		z-index: 1000;
	}
	.floatingad .floatingad-close {
		display: inline-block;
		font-size: 12px;
		background-color: #7e1a18;
		color: #f1f3f5;
		padding: 2px 8px;
		cursor: pointer;
		border: 0;
	}
</style>
<script>
	function adclose() {
		var element = document.getElementById('floating');
		if (element && element.parentNode) {
			element.parentNode.removeChild(element);
		}
	}
</script>
<div class="row">
	<div id="floating" class="floatingad<?php echo $visibilityClass ? ' ' . htmlspecialchars($visibilityClass, ENT_COMPAT, 'UTF-8') : ''; ?><?php echo $moduleclass_sfx ? ' ' . $moduleclass_sfx : ''; ?>"<?php echo $backgroundImage ? ' style="background-image:url(' . htmlspecialchars($backgroundImage, ENT_COMPAT, 'UTF-8') . ')"' : ''; ?>>
		<div class="inner">
			<button type="button" class="floatingad-close" onclick="adclose()" aria-label="Close">&times; Close</button>
			<?php foreach ($data as $value) : ?>
				<?php if (!empty($value['link']) && !empty($value['image'])) : ?>
					<a href="<?php echo htmlspecialchars($value['link'], ENT_COMPAT, 'UTF-8'); ?>" target="_blank" rel="nofollow noopener">
						<img class="img-responsive img-fluid" src="<?php echo htmlspecialchars($value['image'], ENT_COMPAT, 'UTF-8'); ?>" alt="">
					</a>
				<?php elseif (!empty($value['image'])) : ?>
					<img class="img-responsive img-fluid" src="<?php echo htmlspecialchars($value['image'], ENT_COMPAT, 'UTF-8'); ?>" alt="">
				<?php endif; ?>
				<?php if (!empty($value['script'])) : ?>
					<?php echo $value['script']; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</div>
