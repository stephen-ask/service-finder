<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR);

/*
 *
 * Register Rest API Endpoint
 * Route: {URL}/wp-json/v1/auth/login
 *
*/

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

add_action('rest_api_init', 'wp_register_user_endpoints');
function wp_register_user_endpoints($request)
{
    register_rest_route('v1/auth', '/login', array(
        'methods' => 'POST',
        'callback' => 'login'
    ));

    register_rest_route('v1/auth', '/register', array(
		'methods' => 'POST',
		'callback' => 'register'
    ));
	
	register_rest_route('v1/user', '/become-influencer', array(
        'methods' => 'POST',
        'callback' => 'become_influencer',
    ));

    register_rest_route('v1/auth', '/forgot-password', array(
        'methods' => 'POST',
        'callback' => 'forgot_pwd',
    ));

    register_rest_route('v1/auth', '/reset-password', array(
        'methods' => 'POST',
        'callback' => 'reset_pwd',
    ));
	

    register_rest_route('v1/user', '/get-profile', array(
        'methods' => 'GET',
        'callback' => 'get_user_profile',
    ));

    register_rest_route('v1/user', '/update-profile', array(
        'methods' => 'POST',
        'callback' => 'update_profile',
    ));
	
	 register_rest_route('v1/user', '/search-influencer', array(
        'methods' => 'POST',
        'callback' => 'search_influencer',
    ));	
	
	register_rest_route('v1/user', '/languages/list', array(
		'methods' => 'GET',
		'callback' => 'get_language_list',
	));
	
	register_rest_route('v1/user', '/languages/search', array(
		'methods' => 'POST',
		'callback' => 'search_language',
	));
	
	register_rest_route('v1/user', '/language', array(
		'methods' => 'GET',
		'callback' => 'get_user_language',
	));
	
	register_rest_route('v1/user', '/prefered-language', array(
		'methods' => 'POST',
		'callback' => 'set_user_language'
	));
	
	register_rest_route('v1/user', '/address/update', array(
		'methods' => 'POST',
		'callback' => 'update_user_address'
	));
	
	register_rest_route('v1/user', '/address', array(
		'methods' => 'GET',
		'callback' => 'get_user_address'
	));

	register_rest_route('v1/meetings', '/get', array(
		'methods' => 'POST',
		'callback' => 'get_meetings'
	));
}

function login(WP_REST_Request $request)
{
    $response = array();
    $parameters = $request->get_params();

    $user_email = sanitize_text_field($parameters['email']);
    $password = sanitize_text_field($parameters['password']);

    // Error Handling.
    $error = new WP_Error();

    if (empty($user_email)) {
        $error->add(400, __("Email field is required", 'rest-api-endpoints'), array(
            'status' => 400
        ));

        return $error;
    }

    if (empty($password)) {
        $error->add(400, __("Password field is required", 'rest-api-endpoints'), array(
            'status' => 400
        ));

        return $error;
    }

    $user = wp_authenticate($user_email, $password);

    // If user found
    if (!is_wp_error($user)) {

        $unset_keys = array("cap_key", "roles", "filter", "roles", "allcaps", "caps", "ID", "user_status", "user_activation_key", "user_registered", "user_url", "user_pass");

        foreach ($unset_keys as $key => $data) {
            if (in_array($data, $unset_keys)) {
                unset($user->$data);
            }
            foreach ((array) $user->$data as $userdata) {
                if (in_array($userdata, $unset_keys)) {
                    unset($user->$userdata);
                }
            }
        }

        $response['status'] = 200;
        $response['user'] = $user;
        $key = 'abcdefghijklmonpqqrst';

        $payload = [
            'Host' => $_SERVER['HTTP_HOST'],
            'id' => $user->data->ID,
            'userdata' => $user,
            'iat' => 1356999524,
            'nbf' => 1357000000
        ];

        $response['token'] = JWT::encode($payload, $key, 'HS256');
    } else {
        // If user not found
        $error->add(406, __('Invalid Account', 'rest-api-endpoints'));
        return $error;
    }
    return new WP_REST_Response($response);
}


function register(WP_REST_Request $request)
{
    $response = array();
    $parameters = $request->get_params();
    $email = sanitize_text_field($parameters['email']);
    $username = sanitize_text_field($parameters['username']);
    $password = sanitize_text_field($parameters['password']);
    $user_type = sanitize_text_field($parameters['user_type']) ?? 1;

    // $role = sanitize_text_field($parameters['role']);
    $error = new WP_Error();
    if (empty($username)) {
        $error->add(400, __("Username field is required.", 'wp-rest-user'), array(
            'status' => 400
        ));
        return $error;
    }
    if (empty($email)) {
        $error->add(401, __("Email field is required.", 'wp-rest-user'), array(
            'status' => 400
        ));
        return $error;
    }
    if (empty($password)) {
        $error->add(404, __("Password field is required.", 'wp-rest-user'), array(
            'status' => 400
        ));
        return $error;
    }

    $user_id = username_exists($username);

    // $username .= ($user_id != false) ? rand() : "";

    if (email_exists($email) == false) {

        $user_id = wp_create_user($username, $password, $email);
        if (!is_wp_error($user_id)) {
            // Ger User Meta Data (Sensitive, Password included. DO NOT pass to front end.)
            $user = get_user_by('id', $user_id);

            // $user->set_role($role);
            if ($user_type == 2) {

                $user->set_role('provider');
            } else {
                $user->set_role('subscriber');
                if (class_exists('WooCommerce')) {
                    $user->set_role('customer');
                }
            }
			
			if(!update_usermeta($user->ID, 'provider_role', 'package_0')) {
				add_usermeta($user->ID, 'provider_role', 'package_0');
			}
			
            // Ger User Data (Non-Sensitive, Pass to front end.)
            $response['code'] = 200;
            $response['message'] = __("User '" . $username . "'Registration was Successful", "wp-rest-user");
        } else {
            return $user_id;
        }
    } else {
        $error->add(406, __("Email already exists, please try Another", 'wp-rest-user'), array(
            'status' => 400
        ));
        return $error;
    }
    return new WP_REST_Response($response, 123);
}

function become_influencer(WP_REST_Request $request)
{
    global $wpdb;
	$service_finder_Errors =  new WP_Error();
	$userData = isuserLoggedin($request);
	$parameters = $request->get_params();
	$files = $request->get_file_params();
	
    if($userData['user_role'] == 'provider' || in_array('provider', $userData['user_role'])) {
		$service_finder_Errors->add( 500 , esc_html__('User already a Influencer', 'service-finder'));
        return $service_finder_Errors;
	}
	
    if($userData) {
		$args['phone'] = $request['phone'];
		$args['country'] = $request['country'];
		$args['category'] = $request['category'];
		$args['full_name'] = $request['name'];
		$args['email'] = $request['email'];
		$args['bio'] = $request['bio'];
		
		$user_id = $args['wp_user_id'] = $userData['user_data']->id;
		$provider = $request['signup_user_role'] ?? 'provider';
		
        $user = new WP_User($user_id);
	
		// update user records 
		if(!empty($args)) {
			$result = $wpdb->update('service_finder_providers', $args, array('wp_user_id' => $user_id));

			if ($result === FALSE || $result < 1) {
				$wpdb->insert('service_finder_providers', $args);	
			}
				
			$user->set_role($provider);
		}
		
	// 	Profile image 
			if (!empty($files)) {
				$upload_overrides = array('test_form' => false);
				foreach ($files as $key => $file) {
					$attachment_id = media_handle_upload($key, $challengeID);
					if (is_wp_error($attachment_id)) {
						$output['status'] = 'error';
						$output['message'] = '- Unable to update profile image.';

						return new WP_REST_Response($output); 
					} else {
						// Success
						update_user_meta($user_id, 'user_avatar', $attachment_id);
						
						if(!update_usermeta($user->ID, 'provider_role', 'package_0')) {
							add_usermeta($user->ID, 'provider_role', 'package_0');
						}

						$output['status'] = 'success';
						$output['message'] = 'Profile updated.';
						return new WP_REST_Response($output); 
					}
				}
			}	

      
        $response = array(
            'status' => 'Success',
			'message' => 'User register successfully.'
        );
        return new WP_REST_Response($response);
    } else {
	
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function forgot_pwd(WP_REST_Request $request)
{
    global $service_finder_Errors, $wpdb, $service_finder_Params, $service_finder_Tables, $service_finder_options;

    $service_finder_Errors = new WP_Error();
    $user_login = $request['email'];
    $success = '';

    if (email_exists(trim($request['email'])) || username_exists(trim($request['email']))) {

        if (email_exists(trim($user_login))) {
            $user = get_user_by('email', $user_login);
        } elseif (username_exists(trim($user_login))) {
            $user = get_user_by('login', $user_login);
        }

        $key = get_password_reset_key($user);

        if (is_wp_error($key)) {
            $service_finder_Errors->add('username_exist', esc_html__('key not found!', 'service-finder'));
            return $service_finder_Errors;
        } else {

            if ($service_finder_options['password-reset-mail'] != "") {
                $message = $service_finder_options['password-reset-mail'];
            } else {
                $message = 'Someone requested that the password be reset for the following account:<br/>
					Username: %USERNAME%<br/>
					Email: %EMAIL%<br/>
					If this was a mistake, just ignore this email and nothing will happen.<br/>
					To reset your password, visit the following address:<br/>
					%RESETLINK%';
            }

            $otp = generateNumericOTP();

            $reset_link = '<a href="#"> Reset Password</a>';

            $tokens = array('%USERNAME%', '%EMAIL%', '%RESETLINK%');
            $replacements = array($user->user_login, $user->user_email, $reset_link);
            $msg_body = str_replace($tokens, $replacements, $message);

            if ($service_finder_options['password-reset-subject'] != "") {
                $msg_subject = $service_finder_options['password-reset-subject'];
            } else {
                $msg_subject = esc_html__('Account Password Reset', 'service-finder');
            }

            if (!empty(get_user_meta($user->ID, 'reset_password_otp'))) {
                update_user_meta($user->ID, 'reset_password_otp', $otp);
            } else {
                add_user_meta($user->ID, 'reset_password_otp', $otp);
            }
            $response = array(
                'status' => 'Success',
                'otp' => $otp
            );

            return new WP_REST_Response($response);
        }
    } else {
        $service_finder_Errors->add('username_exist', esc_html__('ERROR: There is no user registered with that username/email address.', 'service-finder'));
        return $service_finder_Errors;
    }
}

function reset_pwd(WP_REST_Request $request)
{
    global $service_finder_Errors, $wpdb;
    $service_finder_Errors = new WP_Error();

    $new_pass = (isset($request['password'])) ? sanitize_text_field($request['password']) : '';
    $otp = (isset($request['otp'])) ? sanitize_text_field($request['otp']) : '';
    $login = get_user_by('email', $request['email']);

    if (empty($login) || $login == false) {
        $service_finder_Errors->add('username_exists', esc_html__('ERROR: Invalid Email', 'service-finder'));
        return $service_finder_Errors;
    }

    $user_otp = @get_user_meta($login->ID, 'reset_password_otp')[0];

    if ($user_otp == $otp) {
        wp_set_password($new_pass, $login->ID);

        $success = array(
            'status' => 'success',
            'suc_message' => esc_html__('Password reset successfully.', 'service-finder')
        );
        return new WP_REST_Response($success);
    } else {
        $service_finder_Errors->add('400', esc_html__('ERROR: Invalid OTP ', 'service-finder'));
        return $service_finder_Errors;
    }
}

function get_user_profile(WP_REST_Request $request)
{

    global $wpdb;

    $error = new WP_Error();
    $parameters = $request->get_params();

    $response = $profile_fields = array();
    $fetchUserdata = isuserLoggedin($request);

    if ($fetchUserdata == false) {
        $error->add(401, __('Unauthorized', 'rest-api-endpoints'));
        return $error;
    }

    $userdata = $fetchUserdata['user_data'];
    $usermeta = $fetchUserdata['user_meta'];
    $member_type = $fetchUserdata['user_role'];

	$unset_keys = array("cap_key", "roles", "filter", "roles", "allcaps", "caps", "ID", "user_status", "user_activation_key", "user_registered", "user_url", "user_pass", "user_nicename", "display_name");

	// Unset keys from user object 
	$userdata = unset_keys_from_user_data($unset_keys, $userdata);

	$profile_fields = array('first_name', 'last_name');

    // get profile fields from user meta
    foreach ($usermeta as $meta_key => $meta_value) {
        if (in_array($meta_key, $profile_fields)) {
            $userdata->data->$meta_key =  $meta_value[0] ?? '';
        }
    }
	
	$profile_image = !empty($usermeta['user_avatar']) ? get_post($usermeta['user_avatar'][0]) : get_post(5026);
	$userdata->data->profile_image = $profile_image->guid;

    if ($member_type == 'subscriber' || in_array('subscriber', $member_type)) {
		$fields = array(
            'phone',  'city', 'state', 'zipcode',
            'country'
        );
    } else {
        $fields = array(
             'full_name',
            'email', 'phone', 'category', 'bio',
			'country'
        );	
    }
	
	$response_data = fetch_user_data($fields, $userdata);
    
	$response = array(
        'profile' => $response_data
    );
    return new WP_REST_Response($response);
}
 
function fetch_user_data($fields, $userdata){
	global $wpdb;
	$columns = (is_array($fields) || empty($fields)) ? implode(',', $fields) : '*';
	$query = "Select " . $columns . " from `service_finder_providers` where wp_user_id ='$userdata->ID'";
	$provideresData = $wpdb->get_results($query);

	if (is_array($provideresData) && !empty($provideresData)) {
		foreach ($provideresData as $field => $data) {
			foreach ($data as $subKey => $value) {
				$userdata->data->$subKey = $value;
			}
		}
	}
	return $userdata;
}

function unset_keys_from_user_data($unset_keys, $userdata) {
	// 	Removes the index of userdata array
	 foreach ($unset_keys as $key => $data) {
        if (in_array($data, $unset_keys)) {
            unset($userdata->$data);
        }
        foreach ((array) $user->$data as $userdata) {
            if (in_array($userdata, $unset_keys)) {
                unset($userdata->$data);
            }
        }
    }
	return $userdata;
}

function update_profile(WP_REST_Request $request)
{
    // declare global variables
	global $wpdb;
	$error =  new WP_Error(); 
	$authorized = isuserLoggedin($request);
	$parameters = $request->get_params();
	$files = $request->get_file_params();
	
	
	// check for the authendication 
	if($authorized != false) {
		$user_id = $authorized['user_data']->id;
		$user_login = $existing_username = $authorized['user_data']->data->user_login;
		 
		$new_user_login = $parameters['username'];
		$password = !empty($parameters['new_password']) ? md5($parameters['new_password']) : '';
		$current_password = $parameters['current_password'] ;
	
		$update_user_data = array();
		if(empty($new_user_login) && empty($password) && empty($update_user_data) && empty($files)) {
			$output['status'] = 'fails';
			$output['message'] = 'Profile fields were empty.';
			return new WP_REST_Response($output); 
		}
		
		// check username 
		if($existing_username != $new_user_login && !empty($new_user_login)) {
			$update_user_data['user_login'] = $new_user_login;		
		}
		
		if(!empty($password)) {
			$user_pass = get_user_by('login', $user_login)->user_pass;
		
			if(wp_check_password($current_password, $user_pass, $user_id )) {
				$update_user_data['user_pass'] = $password;			
			} else {
				$output['status'] = 'fails';
				$output['message'] = 'Invalid password';
				return new WP_REST_Response($output); 
			}
		} 
		
		if(!empty($update_user_data)) {
			$wpdb->update(
				$wpdb->users, 
				$update_user_data, 
				['ID' => $user_id]
			);		
		}
		
		// 	Profile image 
		if (!empty($files)) {
			$upload_overrides = array('test_form' => false);
			foreach ($files as $key => $file) {
				$attachment_id = media_handle_upload($key, $challengeID);
				if (is_wp_error($attachment_id)) {
					$output['status'] = 'error';
					$output['message'] = '- Unable to update profile image.';
					
					return new WP_REST_Response($output); 
				} else {
					// Success
					update_user_meta($user_id, 'user_avatar', $attachment_id);
				}
			}
		}	
		
		$output['status'] = 'success';
		$output['message'] = 'Profile updated.';
		
		return new WP_REST_Response($output); 
	}
}

function search_influencer(WP_REST_Request $request)
{
	global $wpdb, $service_finder_Tables;
	$service_finder_Errors = new WP_Error(); 
    $userData = isuserLoggedin($request);
	$parameters = $request->get_params();
	$search_term = sanitize_text_field($parameters['search_term']);
    
	if(empty($search_term)){
	    $service_finder_Errors->add(404, esc_html__('Invalid Search term', 'service-finder'));
        return $service_finder_Errors;	
	}
	
    if($userData) {
		$qry = "SELECT distinct users.ID, users.user_login as username, category FROM service_finder_providers as provider 
		inner join wp_usermeta as um on um .user_id = provider.wp_user_id 
		inner join wp_users as users on users.ID = provider.wp_user_id  
 		WHERE  provider.full_name like  '%".$search_term."%' or provider.email like  '%".$search_term."%' 
		or  ( um.meta_key = 'first_name' and um.meta_value like  '%".$search_term."%')  or ( um.meta_key = 'last_name' and um.meta_value like  '%".$search_term."%') or users.display_name like '%".$search_term."%' or users.user_login like '%".$search_term."%'";
		$provider = $wpdb->get_results($qry);
		
		if(!empty($provider)) {
			foreach ($provider as $user) {
				$profile_image = !empty($usermeta['user_avatar']) ? get_post($usermeta['user_avatar'][0]) : get_post(5026);
				$user->profile_image = $profile_image->guid;
			}	
		}
		
		if(!empty($provider)) {
			 $response = array(
				'status' => 'Success',
				'data' => $provider
			);
		} else {
			 $response = array(
				'status' => 'Fails',
				'message' => 'No record found',
				'data' => [],
			);
		} 
        return new WP_REST_Response($response);
    } else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function get_language_list(WP_REST_Request $request) {
	global $wpdb;
	
	// 	FETCHES USER LANGUAGES FROM DB 
	$query = 'SELECT * from languages';
	$languages = $wpdb->get_results($query);

	$response_data['success'] = 'Success';
	$response_data['data'] = $languages;
	
	// 	SEND RESPONSE 	
	return new WP_Rest_Response($response_data);
}
function get_user_language(WP_Rest_Request $request) { 
	$error = new WP_Error();
	$authendicated = isuserLoggedin($request);
	$parameters = $request->get_params();
												  
	if($authendicated) {
		$user_id = $authendicated['user_data']->id;
		$response['success'] = 'Success';
	
		$response['user_language'] = @get_user_meta($user_id, 'prefered_language')[0];	
		
		return new WP_Rest_Response($response);
	} else {
		$error->add( 401,'Unauthorised');
		return $error; 
	}
}
function set_user_language(WP_Rest_Request $request) { 
	$error = new WP_Error();
	$authendicated = isuserLoggedin($request);
	$parameters = $request->get_params();
	$user_language = $parameters['language'];
	
	if(empty($user_language)) {
		$response['status'] = 'Failed';
		$response['message'] = 'language should not be empty';	
	}			
	
	if($authendicated) {
		$user_id = $authendicated['user_data']->id;
		$response['status'] = 'Success';
		$response['message'] = 'User language updated';	
		if(!empty(get_user_meta($user_id, 'prefered_language' ))) {
			update_user_meta($user_id , 'prefered_language', $user_language);
			return new WP_Rest_Response($response);
		}
		add_user_meta($user_id, 'prefered_language', $user_language);
		return new WP_Rest_Response($response);
	} else {
		$error->add( 401,'Unauthorised');
		return $error; 
	}
}
function search_language(WP_Rest_Request $request){ 
	global $wpdb;
	$parameters = $request->get_params(); 
	$search_term = $parameters['search_term'];
	if(empty($search_term)) {
		$response_data['success'] = 'Fails';
		$response_data['message'] = 'Invalid search term';	
		return new WP_Rest_Response($response_data);
	}
	$query = 'select * from languages where value like "%'.$search_term.'%";';
	$languages = $wpdb->get_results($query);

	$response_data['success'] = 'Success';
	$response_data['data'] = $languages;
	
	// 	SEND RESPONSE 	
	return new WP_Rest_Response($response_data);
		
}
function update_user_address(WP_Rest_Request $request){ 
	global $wpdb; 
	$error = new WP_Error();
	$parameters = $request->get_params(); 
	$authendicated = isuserLoggedin($request);
	if($authendicated) {
		$user_id = $authendicated['user_data']->id;
		$user_type = $authendicated['user_role'];
		$table = ( $authendicated['user_role'] == 'provider' ) ? 'service_finder_providers' : 'service_finder_customers';

		$address_1 = $parameters['address_1'];
		$address_2 = $parameters['address_2'];
		$country = $parameters['country'];
		$zip_code = $parameters['zip_code'];

		
		$address_type = $parameters['type'] ?? 0;
		
		$address_data = array();
		if($address_type == 1) {
			$address_data = array(
				'home_address' => $address_1,
				'home_address_2' => $address_2,
				'home_country' =>$country,
				'home_zipcode' => $zip_code,
				'wp_user_id' => $user_id
			);	
		} elseif ($address_type == 2) {
			$address_data = array(
				'office_address' => $address_1,
				'office_address_2' => $address_2,
				'office_country' =>$country,
				'office_zipcode' => $zip_code,
				'wp_user_id' => $user_id
			);
		} elseif ($address_type == 3) {
			$address_data = array(
				'other_address' => $address_1,
				'other_address_2' => $address_2,
				'other_country' =>$country,
				'other_zipcode' => $zip_code,
				'wp_user_id' => $user_id
			);
		}  else {
			$address_data = array(
				'address' => $address_1,
				'address_2' => $address_2,
				'country' =>$country,
				'zipcode' => $zip_code,
				'wp_user_id' => $user_id
			);
		}
		
		$result = $wpdb->get_results("select * from $table where wp_user_id ='$user_id'"); 
		
		if(empty($result)){
			$wpdb->insert($table, $address_data); 
		} else {
			$wpdb->update($table, $address_data, ['wp_user_id' => $user_id]); 
		}		
		$response_data['success'] = 'Success';
		$response_data['message'] = 'Profile updated.';

		// 	SEND RESPONSE 	
		return new WP_Rest_Response($response_data);
	}
	else {
		$error->add(401,'Unauthorised');
		return $error;
	}
}
function get_user_address(WP_Rest_Request $request){ 
	global $wpdb; 
	$error = new WP_Error();
	$parameters = $request->get_params(); 
	$authendicated = isuserLoggedin($request);
	if($authendicated) { 
		$user_id = $authendicated['user_data']->id;
		$user_type = $authendicated['user_role'];
		$table = ( $authendicated['user_role'] == 'provider' ) ? 'service_finder_providers' : 'service_finder_customers';
		$address_fields = array(
			'home_address',
			'home_address_2',
			'home_country',
			'home_zipcode',
			'office_address',
			'office_address_2',
			'office_country',
			'other_address',
			'other_address_2',
			'other_country',
			'other_zipcode',
			'address',
			'address_2',
			'country',
			'zipcode',
			'office_zipcode' 
		);
		$address = $wpdb->get_results("select ".implode(',', $address_fields)." from $table where wp_user_id ='$user_id'"); 
		if(empty($address)) {
			
			$response['status'] = false;
			$response['message'] = "Invalid user address.";
		} else {
			$response['status'] = true;
			$response['data'] = $address;			
		}
		return new WP_Rest_Response($response);
	} else {
		$error->add(401,'Unauthorised');
		return $error;
	}
}
function generateNumericOTP()
{

    $n = 6;
    $generator = "1357902468";

    $result = "";

    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }
    return $result;
}

function create_new_post(WP_REST_Request $request) {
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	$parameters = $request->get_params();
	$files = $request->get_file_params();
	
	if($authorised) {
		$title = sanitize_text_field($_POST['title']);
		$content = sanitize_text_field($_POST['content']);
		$status = sanitize_text_field($_POST['status']) ?? 'publish';
		$user_id = $authorised['user_data']->id;
		
		$new = array(
			'post_title' => $title,
			'post_content' => $content,
			'post_status' => $status ,
			'post_author' => $user_id,
		);
		
		$post_id = wp_insert_post( $new ); 
		$res['status'] = $post_id ? "Success!" : "Failed";
		$res['message'] = $post_id ? "Post successfully published!" : "Something went wrong, try again.";
		return new WP_REST_Response($res);
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function get_meetings( WP_REST_Request $request ) {
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	$parameters = $request->get_params();
	$response = array();
	
	if($authorised) {
		$id = $authorised['user_data']->id;
		// $args = array(
		// 	'post_author' => (int) $id,
		// 	'ID' =>	(int) $parameters['event_id']
		// );
		
		
		$response = array(
			'meetings' => get_post($parameters['event_id']) ?? 'empty', 
			'post_meta' => get_post_meta($parameters['event_id']) ?? 'empty'
		);

		return new WP_REST_Response($response);
	}
	else {
		$service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
		return $service_finder_Errors;
	}
}

function remove_meeting( WP_REST_Request $request ) {
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	$parameters = $request->get_params();
	global $wpdb;
	if($authorised) {
		$id = $authorised['user_data']->id;
		$args = array(
			'ID' =>	(int) $parameters['event_id']
		);

		$response['status'] = wp_delete_post($args) ?? 'Failed';

		return new WP_REST_Response($response);
	}
	else {
		$service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
		return $service_finder_Errors;
	}
}