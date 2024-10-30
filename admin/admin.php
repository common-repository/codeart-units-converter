<?php

include_once( plugin_dir_path( __FILE__ ) . 'include/about.php');
include_once( plugin_dir_path( __FILE__ ) . 'include/weight.php');

function tgc_codeart_units_converter_add_admin_menu(){

    add_menu_page('CodeArt Units Converter', 'CodeArt Units Converter', 'manage_options','codeart-units-converter','codeart_units_converter_about_and_shortcodes','dashicons-calculator', 56);   
    
    add_submenu_page(
        'codeart-units-converter',       // parent slug
        'CodeArt Units Converter - About',    // page title
        'about & shortcodes',             // menu title
        'manage_options',           // capability
        'codeart-units-converter', // slug
        'codeart_units_converter_about_and_shortcodes' // callback
    ); 
    
    
    // add_submenu_page(
    //     'codeart-units-converter',       // parent slug
    //     'CodeArt Units Converter - Weight Settings',    // page title
    //     'Weight Settings',             // menu title
    //     'manage_options',           // capability
    //     'codeart-units-converter-weight', // slug
    //     'codeart_units_converter_weight_settings' // callback
    // ); 
    
    // add_submenu_page(
    //     'codeart-units-converter',       // parent slug
    //     'Customer Bids',    // page title
    //     'Customer Bids',             // menu title
    //     'manage_options',           // capability
    //     'wc-acutions-customers-bids', // slug
    //     'acutions_customers_bids_list' // callback
    // );  
    
    }
    
    add_action('admin_menu','tgc_codeart_units_converter_add_admin_menu'); 