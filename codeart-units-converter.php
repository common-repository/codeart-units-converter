<?php
/*
Plugin Name: CodeArt Units Converter
Plugin URI: https://wordpress-units-converter-plugin.codeisart.net/
description: provides an online conversion calculator for many types of measurement units. for list of short codes visit admin settings page.
Version: 1.0.6
Author: CodeIsArt.NET
License: GPL3
Author URI: https://www.codeisart.net/
 */

if (!defined('ABSPATH')) {
    die;
    exit;
}

//include css and javascript files
function tgc_codeart_units_converter_java_css_Func()
{
    //echo plugins_url();
    // style
    wp_enqueue_style('tgc_codeart_units_converter_style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    // script
    wp_enqueue_script('tgc_codeart_units_converter_script', plugin_dir_url(__FILE__) . 'assets/script/script.js', array('jquery'), false, true);
    //ajax
    wp_localize_script('tgc_codeart_units_converter_script', 'CodeArtUnitsConverter', array('ajax_url' => admin_url('admin-ajax.php'), 'homeUrl' => esc_url(home_url())));
}
add_action('wp_enqueue_scripts', 'tgc_codeart_units_converter_java_css_Func');

//include common
include_once plugin_dir_path(__FILE__) . 'include/common.php';
//include ajax
include_once plugin_dir_path(__FILE__) . 'include/ajax.php';
//include admin
include_once plugin_dir_path(__FILE__) . 'admin/admin.php';

//include unit calculators
//weight
include_once plugin_dir_path(__FILE__) . 'units/weight/weight.php';
//speed
include_once plugin_dir_path(__FILE__) . 'units/speed/speed.php';
//area
include_once plugin_dir_path(__FILE__) . 'units/area/area.php';

//include shortcodes
include_once plugin_dir_path(__FILE__) . 'include/shortcodes.php';
