<?php

function codeart_units_converter_about_and_shortcodes(){
    echo <<<HTML
            <style>
            #the-great-converter-shortcodes-table table, #the-great-converter-shortcodes-table th, #the-great-converter-shortcodes-table td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            #the-great-converter-shortcodes-table{
                width: 98%;
                border-collapse: collapse;
            }
            </style>
            <H1>CodeArt Units Converter - About</H1>
            Thank You for using CodeArt Units Converter
            <br><br>
            <H2>Short Codes</H2>
            <b>Add the following shortcodes to any page or post in wordpress to show any of CodeArt Units Converter calculators.</b>
            <br><br>
            <table id="the-great-converter-shortcodes-table">
                <tr style="text-align:left;">
                    <th>&nbsp;Calculator</th>
                    <th>&nbsp;Short Code</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>&nbsp;Weight</td>
                    <td>&nbsp;[codeart_units_converter_weight]</td>
                    <td>&nbsp;This calculator can convert values between the common weight units.</td>
                </tr>
                <tr>
                    <td>&nbsp;Speed</td>
                    <td>&nbsp;[codeart_units_converter_speed]</td>
                    <td>&nbsp;This calculator can Convert values between the common speed units. </td>
                </tr>
                <tr>
                    <td>&nbsp;Area</td>
                    <td>&nbsp;[codeart_units_converter_area]</td>
                    <td>&nbsp;This calculator can Convert values between the common area units.</td>
                </tr>
            <table>
        HTML;
}










//////////////////////////////////////////////////////////////////////////
// ads
// Add the admin notice function
function codeisart_admin_notice() {

    $admin_page_slug = get_current_screen()->parent_file;

    // echo $admin_page_slug;

    // Check if the current page is the settings page
    if ( $admin_page_slug === 'codeart-units-converter' ) {
      // Display the admin notice
      echo '<div class="notice notice-info is-dismissible">
        <h1><a href="https://www.codeisart.net/" >CodeIsArt.NET: Custom WordPress Development for Your Business</a></h1>
        <p>We create custom WordPress websites that are both visually stunning and functional. Our team of experienced developers will work with you to create a website that meets your specific needs and goals.</p>
        <a href="https://www.codeisart.net/" type="button" class="button button-primary" style="margin-bottom: 10px; ">Contact Us Now!</a>
        </div>';
    }
  }
  
  // Hook the admin notice function to the admin_notices action hook
  add_action( 'admin_notices', 'codeisart_admin_notice' );
//////////////////////////////////////////////////////////////////////////