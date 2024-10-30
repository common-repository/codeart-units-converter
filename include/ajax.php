<?php

//////////////////////////////////////////////////////////////////////////////////
//area
add_action('rest_api_init', function () {
    register_rest_route('CodeArtUnitsConverter/v1', '/area', array(
        'methods' => 'GET',
        'callback' => 'codeart_units_converter_area_register_rest_fields',
    ));
});
//callback
function codeart_units_converter_area_register_rest_fields(WP_REST_Request $request)
{
    $unit = $request->get_param( 'u' );
    $value = $request->get_param( 'v' );
    $content = file_get_contents("https://wordpress-units-converter-plugin.codeisart.net/wp-json/WebserviceCodeArtUnitsConverter/v1/area/?u=".$unit."&v=".$value);
    echo $content;
}
//////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////
//speed
add_action('rest_api_init', function () {
    register_rest_route('CodeArtUnitsConverter/v1', '/speed', array(
        'methods' => 'GET',
        'callback' => 'codeart_units_converter_speed_register_rest_fields',
    ));
});
//callback
function codeart_units_converter_speed_register_rest_fields(WP_REST_Request $request)
{
    $unit = $request->get_param( 'u' );
    $value = $request->get_param( 'v' );
    $content = file_get_contents("https://wordpress-units-converter-plugin.codeisart.net/wp-json/WebserviceCodeArtUnitsConverter/v1/speed/?u=".$unit."&v=".$value);
    echo $content;
}
//////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////
//weight
add_action('rest_api_init', function () {
    register_rest_route('CodeArtUnitsConverter/v1', '/weight', array(
        'methods' => 'GET',
        'callback' => 'codeart_units_converter_weight_register_rest_fields',
    ));
});
//callback
function codeart_units_converter_weight_register_rest_fields(WP_REST_Request $request)
{
    $unit = $request->get_param( 'u' );
    $value = $request->get_param( 'v' );
    $content = file_get_contents("https://wordpress-units-converter-plugin.codeisart.net/wp-json/WebserviceCodeArtUnitsConverter/v1/weight/?u=".$unit."&v=".$value);
    echo $content;
}
//////////////////////////////////////////////////////////////////////////////////