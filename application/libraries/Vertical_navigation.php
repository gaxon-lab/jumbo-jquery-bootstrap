<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vertical_navigation
{
	function renderNavigation($menus = array())
	{
		$navigation = '<ul class="dt-side-nav">';
		foreach ($menus as $key => $menu) {
			if ($menu['type'] === 'item') {
				$navigation .= $this->itemNavigation($menu);
			} elseif ($menu['type'] === 'section') {
				$navigation .= $this->sectionNavigation($menu);
			} elseif ($menu['type'] === 'collapse') {
				$navigation .= $this->collapseNavigation($menu);
			}
		}
		$navigation .= '</ul>';

		return $navigation;
	}

	private function sectionNavigation($menu)
	{
		$menuSection = '<li class="dt-side-nav__item dt-side-nav__header">';
		if (isset($menu['icon']) && $menu['icon'])
			$menuSection .= '<i class="icon icon-fw icon-' . $menu['icon'] . '"></i>';

		$menuSection .= '<span class="dt-side-nav__text">' . $menu['title'] . '</span>';
		$menuSection .= '</li>';

		if (isset($menu['children'])) {
			foreach ($menu['children'] as $key => $subMenu) {
				if ($subMenu['type'] === 'item') {
					$menuSection .= $this->itemNavigation($subMenu);
				} elseif ($subMenu['type'] === 'collapse') {
					$menuSection .= $this->collapseNavigation($subMenu);
				}
			}
		}

		return $menuSection;
	}

	private function collapseNavigation($menu)
	{
		$menuCollapse = '<li class="dt-side-nav__item">';
		$menuCollapse .= '<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">';

		if (isset($menu['icon']) && $menu['icon'])
			$menuCollapse .= '<i class="icon icon-fw icon-' . $menu['icon'] . '"></i>';

		$menuCollapse .= '<span class="dt-side-nav__text">' . $menu['title'] . '</span>';
		$menuCollapse .= '</a>';

		if (isset($menu['children'])) {
			$menuCollapse .= '<ul class="dt-side-nav__sub-menu">';
			foreach ($menu['children'] as $key => $subMenu) {
				if ($subMenu['type'] === 'item') {
					$menuCollapse .= $this->itemNavigation($subMenu);
				} elseif ($subMenu['type'] === 'section') {
					$menuCollapse .= $this->sectionNavigation($subMenu);
				}
			}

			$menuCollapse .= '</ul>';
		}

		$menuCollapse .= '</li>';

		return $menuCollapse;
	}

	private function itemNavigation($menu)
	{
		$menuItem = '<li class="dt-side-nav__item">';
		$menuItem .= '<a href="' . $menu['url'] . '" class="dt-side-nav__link">';

		if (isset($menu['icon']) && $menu['icon'])
			$menuItem .= '<i class="icon icon-fw icon-' . $menu['icon'] . '"></i>';

		$menuItem .= '<span class="dt-side-nav__text">' . $menu['title'] . '</span>';
		$menuItem .= '</a>';
		$menuItem .= '</li>';

		return $menuItem;
	}
}
