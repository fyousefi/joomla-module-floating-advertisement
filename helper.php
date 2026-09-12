<?php
/**
 * @package    mod_floating_advertising
 * @author     F.Yousefi - https://www.asiasun.ir
 * @copyright  (C) 2026 AsiaSun.ir, Pvt. Ltd. All rights reserved
 * @license    GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @version    2.0.0
 */

defined('_JEXEC') or die;

class modFloatingAdvertisingHelper
{
	public static function mediaPath($value)
	{
		if (is_object($value)) {
			if (!empty($value->imagefile)) {
				$value = $value->imagefile;
			} elseif (!empty($value->path)) {
				$value = $value->path;
			} else {
				$value = '';
			}
		}

		$value = trim((string) $value);

		if ($value === '') {
			return '';
		}

		$parts = explode('#', $value);

		return $parts[0];
	}

	public static function visibilityClass($devices)
	{
		if (!is_array($devices)) {
			$devices = $devices ? array($devices) : array();
		}

		$devices = array_values(array_filter($devices));

		if (!$devices) {
			return 'd-none hidden';
		}

		$phone = in_array('phone', $devices, true);
		$tablet = in_array('tablet', $devices, true);
		$desktop = in_array('desktop', $devices, true);

		$classes = array();

		if ($phone && $tablet && $desktop) {
			return '';
		}

		if ($phone && $tablet && !$desktop) {
			return 'd-block d-lg-none visible-xs-block visible-sm-block hidden-md hidden-lg';
		}

		if ($phone && $desktop && !$tablet) {
			return 'd-block d-md-none d-lg-block visible-xs-block hidden-sm visible-md visible-lg';
		}

		if ($tablet && $desktop && !$phone) {
			return 'd-none d-md-block hidden-xs';
		}

		if ($phone) {
			return 'd-block d-md-none visible-xs-block hidden-sm hidden-md hidden-lg';
		}

		if ($tablet) {
			return 'd-none d-md-block d-lg-none hidden-xs visible-sm-block hidden-md hidden-lg';
		}

		if ($desktop) {
			return 'd-none d-lg-block hidden-xs hidden-sm visible-md visible-lg';
		}

		return implode(' ', $classes);
	}
}
