<?php

// $files_array = array(
// 	get_template_directory() . '/vendor/zoom-int/autoload.php',
// );

// // INCLUDES FILES IN ARRAY ONLY IF FILE EXISTS 
// array_filter($files_array, function($value, $key) {
// 	if(file_exists($value)) require_once $value;
// }, ARRAY_FILTER_USE_BOTH);

global $wpdb;

class wp_zoom_api {
	public $user_id; 
	function __construct()
	{
		$this->init_zoom_api_endpoints();
		
	}

	function init_zoom_api_endpoints()
	{
		add_action('rest_api_init', function(){
			register_rest_route('zoom', '/settings', array(
				'methods' => 'POST',
				'callback' => [$this, 'zoom_settings']
			));
		});
	}

	function create_zoom_meet($request)
	{
		$response = array();
		$error = new WP_Error();
		$parameters = $request->get_params();
	}
	function zoom_settings($request) {
		$parameters = $request->get_params();
		$api_key = sanitize_text_field($parameters['api_key']);
		$secret_key = sanitize_text_field($parameters['secret_key']);
		$authorised = isuserLoggedin($request);

		if($authorised) {
			$user_id = $authorised['user_data']->id;
			
			update_user_meta($user_id, "zoom_api_key", $api_key );
			update_user_meta($user_id,"zoom_secret_key", $secret_key );
			echo 'success';
		}
		
	}
}

new wp_zoom_api;