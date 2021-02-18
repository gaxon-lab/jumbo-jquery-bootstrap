<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

function verticalNavigation($menus = array())
{
	$CI = &get_instance();

	return $CI->vertical_navigation->renderNavigation($menus);
}
