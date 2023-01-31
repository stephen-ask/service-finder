<?php

class wp_zoom_api extends WP_Rest_Response {

	public $zoom_api_key;
    public $zoom_api_secret;

	private $api_url = 'https://api.zoom.us/v2/';


	function __construct()
	{
		if(session_status() === PHP_SESSION_NONE) session_start();
		$this->config();
		$this->init_zoom_api_endpoints();
	}

	function config() {
		$user_id = get_current_user_id();
		$this->zoom_api_key = get_user_meta($user_id, 'zoom_api_key', true);
		$this->zoom_api_secret = get_user_meta($user_id, 'zoom_secret_key',true);
	}

	function init_zoom_api_endpoints()
	{
		add_action('rest_api_init', function(){
			
			register_rest_route('zoom', '/settings', array(
				'methods' => 'POST',
				'callback' => [$this, 'zoom_settings']
			));

			register_rest_route('zoom', 'user/list', array(
				'methods' => 'GET',
				'callback' => [$this, 'zoom_get_users_list']
			));

		}, 10, 1);
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
		$data = array();
		if($authorised) {
			$user_id = $authorised['user_data']->id;
			
			update_user_meta($user_id, "zoom_api_key", $api_key );
			update_user_meta($user_id,"zoom_secret_key", $secret_key );
			$data['status'] = 'success'; 
			
		} else {
			$data['status'] = 'failed'; 
		}
		wp_send_json($data);
	}

	function zoom_get_users_list($request) {
	
		$request_url = $this->api_url.'/users';
		$authorised = isuserLoggedin($request);
		
		if($authorised) {
			$user_id = $authorised['user_data']->id;
		
			$key    = get_user_meta($user_id, 'zoom_api_key', true);
			$secret = get_user_meta($user_id, 'zoom_secret_key',true);

			// $key    = 'P8PIb0K_RyO21fR-2UTV3w' ; //$this->zoom_api_key;
			// $secret = 'KHRuu2QLs8QHVnKdCBokdR5Fvex9bWuJq36u' ;//$this->zoom_api_secret ?? 'abcdef';    
		
			$token = array(
				"aud" => null,
				"iss" => $key,
				"exp" => time() + 3600 * 3600, //60 seconds as suggested
				"iat" => time()
			);

			$args = array( 'headers' => 
				array(
					'Authorization' => 'Bearer ' . jwt_encode($token,  $secret),
					'Content-Type'  => 'application/json',
					'Accept'  => 'application/json'
				) );
			$args['body'] = [];
			
			echo wp_remote_retrieve_body( wp_remote_get( $request_url, $args ) );
		}
	}
	function remove_zoom_meeting() {
		
	}
}

new wp_zoom_api;