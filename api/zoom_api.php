<?php

$files_array = array(
	get_template_directory() . '/vendor/zoom-int/autoload.php',
);

// INCLUDES FILES IN ARRAY ONLY IF FILE EXISTS 
array_filter($files_array, function($value, $key) {
	if(file_exists($value)) require_once $value;
}, ARRAY_FILTER_USE_BOTH);

global $wpdb;

function wp_zoom_api_endpoints($request)
{
    register_rest_route('users/{userId}', '/meetings', array(
        'methods' => 'POST',
        'callback' => 'create_zoom_meet'
    ));
}

public function create_zoom_meet(WP_REST_Request $request)
{
	$response = array();
	$error = new WP_Error();
	$parameters = $request->get_params();
}