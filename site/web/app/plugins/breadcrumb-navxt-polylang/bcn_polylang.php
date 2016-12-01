<?php
/*
Plugin Name: Breadcrumb NavXT Polylang Extensions
Plugin URI: http://mtekk.us/code/breadcrumb-navxt/
Description: Adds a compatibility layer for improved Polylang support.
Version: 1.0.0
Author: John Havlik
Author URI: http://mtekk.us/
License: GPL2
*/
/*  Copyright 2012-2016  John Havlik  (email : john.havlik@mtekk.us)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
require_once(dirname(__FILE__) . '/includes/block_direct_access.php');
//Do a PHP version check, require 5.2 or newer
if(version_compare(phpversion(), '5.2.0', '<'))
{
	//Only purpose of this function is to echo out the PHP version error
	function bcn_phpold()
	{
		printf('<div class="error"><p>' . __('Your PHP version is too old, please upgrade to a newer version. Your version is %1$s, Breadcrumb NavXT requires %2$s', 'breadcrumb-navxt') . '</p></div>', phpversion(), '5.2.0');
	}
	//If we are in the admin, let's print a warning then return
	if(is_admin())
	{
		add_action('admin_notices', 'bcn_phpold');
	}
	return;
}
add_action('bcn_before_fill', 'bcn_breadcrumb_settings_translator', 10);
/**
 * This function hooks into a filter, it handles settings translation for polylang
 * 
 * @param bcn_breadcrumb_trail $breadcrumb_trail The current breadcrumb trail instance to modify the settings of
 */
function bcn_breadcrumb_settings_translator($breadcrumb_trail)
{
	//Loop through the settings
	foreach($breadcrumb_trail->opt as $key=>$opt)
	{
		//For CPT roots, let's run through the pll_get_post function
		if($key !== 'apost_post_root' && $key !== 'apost_page_root' && strncmp($key, 'apost_', 6) === 0 && substr_compare($key, '_root', -5) === 0 && function_exists('pll_get_post'))
		{
			$breadcrumb_trail->opt[$key] = pll_get_post($opt);
		}
		//For strings, run through pll_ function
		if(($key[0] == 's' || $key[0] == 'S' || $key[0] == 'h' || $key[0] == 'H') && function_exists('pll__'))
		{
			$breadcrumb_trail->opt[$key] = pll__($opt);
		}
	}
}
/**
 * This function provides a common interface for registering strings for different multilingual plugins
 * 
 * @param string $context The context in which the string is being registered for
 * @param string $name The name of the string
 * @param string $value The string that needs to be translated
 */
function bcn_polylang_register_string($context, $name, $value)
{
	if(function_exists('pll_register_string'))
	{
		pll_register_string($name, $value, $context);
	}
}
add_action('current_screen', 'bcn_register_widget_strings', 10);
/**
 * This function hooks into the current_screen action and registers the pretext for all BCN widgets
 * Unfortunately, this has to occur on every page load due to how Polyglot deals with string registration 
 * 
 * @param WP_Screen $screen The screen object for the current admin screen
 */
function bcn_register_widget_strings($screen)
{
	//Only do things on the Polylang settings page/screen
	if($screen->id === 'settings_page_mlang')
	{
		global $wp_registered_widgets;
		$sidebars = wp_get_sidebars_widgets();
		foreach($sidebars as $sidebar => $widgets)
		{
			//No need to deal with empty sidebars or inactive widgets
			if($sidebar === 'wp_inactive_widgets' || empty($widgets))
			{
				continue;
			}
			foreach($widgets as $widget)
			{
				//Skip non-Breadcrumb NavXT widgets
				if(strncmp($widget, 'bcn_widget', 10) !== 0)
				{
					continue;
				}
				//Fetch the instance (settings and number)
				$widget_settings = $wp_registered_widgets[$widget]['callback'][0]->get_settings();
				$widget_number = $wp_registered_widgets[$widget]['params'][0]['number'];
				//Finally go about registering the pre text string
				if(isset($widget_settings[$widget_number]['pretext']))
				{
					bcn_polylang_register_string('Widget', 'Widget pre-text', $widget_settings[$widget_number]['pretext']);
				}
			}
		}
	}
}
//For multisite
add_filter('site_option_bcn_options', 'bcn_register_translation_strings', 10);
//For normal sites
add_filter('option_bcn_options', 'bcn_register_translation_strings', 10);
/**
 * This function hooks into a filter, but rather than filter, it registers polylang translation strings
 * 
 * @param array $opts The Breadcrumb NavXT options array
 * @return array The options array
 */
function bcn_register_translation_strings($opts)
{
	foreach($opts as $key=>$opt)
	{
		//For strings, register translatable string via icl_register_string function
		if(($key[0] == 's' || $key[0] == 'S' || $key[0] == 'h' || $key[0] == 'H') && $key !== 'Spolylang_key')
		{
			bcn_polylang_register_string('Breadcrumb NavXT', $key, $opt);
		}
	}
	return $opts;
}
add_filter('widget_text', 'bcn_polylang_widget_text', 10, 2);
function bcn_polylang_widget_text($pretext, $instance)
{
	if(isset($instance['pretext']))
	{
		if(function_exists('pll__'))
		{
			$pretext = pll__($pretext);
		}
	}
	return $pretext;
}
add_filter('bcn_settings_init', 'bcn_polylang_settings_setup');
/**
 * Adds in default settings needed for Breadcrumb NavXT Polylang Extensions
 * 
 * @param array $settings The settings array
 * @return array The filtered/updated settings array
 */
function bcn_polylang_settings_setup($settings)
{
	if(!isset($settings['Spolylang_key']))
	{
		//Add our 'default' polylang_key option
		$settings['Spolylang_key'] = '';
	}
	if(!isset($settings['Jpolylang_key_status']))
	{
		//Add our 'default' polylang_key_status option
		$settings['Jpolylang_key_status'] = 'inactive';
	}
	return $settings; 
}
add_filter('pll_sanitize_string_translation', 'bcn_polylang_sanitize', 9, 3);
function bcn_polylang_sanitize($translation, $name, $context)
{
	//Kill the normal filter, we call it for non-BCN items
	remove_filter('pll_sanitize_string_translation', array('PLL_Admin_Strings', 'sanitize_string_translation'));
	//If it isn't a Breadcrumb NavXT setting, use the nornal filter
	if($context !== "Breadcrumb NavXT")
	{
		return PLL_Admin_Strings::sanitize_string_translation($translation, $name);
	}
	if(($name[0] === 'H' || $name[0] === 'h'))
	{
		//Determine what HTML is allowed, kill the rest
		$allowed_html = apply_filters('bcn_allowed_html', wp_kses_allowed_html('post'));
		$translation = wp_kses(stripslashes($translation), $allowed_html);
	}
	else if($name[0] === 'S' || $name[0] === 's')
	{
		$translation = esc_html($translation);
	}
	return $translation;
}
add_action('plugins_loaded', 'bcn_polylang_admin_init', 16);
function bcn_polylang_admin_init()
{
	//If this is the admin, should load the admin settings update code
	if(is_admin() && class_exists('mtekk_adminKit'))
	{
		//Check to see if someone else has setup the extensions settings tab
		if(has_action('bcn_after_settings_tabs', 'bcn_extensions_tab') === false)
		{
			require_once(dirname(__FILE__) . '/includes/function.bcn_extensions_tab.php');
			add_action('bcn_after_settings_tabs', 'bcn_extensions_tab');
		}
		require_once(dirname(__FILE__) . '/class.bcn_polylang_admin.php');
		$bcn_polylang_admin = new bcn_polylang_admin(plugin_basename(__FILE__));
	}
}