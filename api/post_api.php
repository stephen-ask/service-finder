<?php

trait Base_Api {

    function isuserLoggedin($request) {	
        var_dump('test');
        if(!session_id()) session_start();
        $authorization = $request->get_header('authorization');
        
        if(empty($authorization)) return false; 

    
        $token = str_replace('Bearer ','',$authorization);
        $tkn_user = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
        
        $userdata = !empty($tkn_user->id) ? get_userdata($tkn_user->id) : '';
        
        $usermeta = (!empty($authorization) && !empty($userdata)) ? get_user_meta($tkn_user->id) : ''; 
        $_SESSION['current_user_id'] = (!empty($authorization) && !empty($userdata)) ? $tkn_user->id : '';
        
        return true ; 
    }    
}

class Post_Api {

    use Base_Api;

    function __construct() {
        $this->action();
    }
    
    function action() {
        add_action('rest_api_init', [$this, 'rest_api_init']);
    }

    function rest_api_init() {
     
        register_rest_route('blog-post', 'add', array(
            'methods' => 'POST',
            'callback' => [$this, 'create_new_post'],
            // 'permission_callback' => [$this, 'isuserLoggedin'],
            // 'args'=> array(
            //     'title' => array (
            //         "validate" => [$this, "is_empty"]
            //     )
            // )
        ));
        register_rest_route('blog-post', 'edit', array(
            'methods' => 'POST',
            'callback' => [$this, 'edit_blog_post'],
            // 'permission_callback' => [$this, 'isuserLoggedin'],
            // 'args'=> array(
            //     'title' => array (
            //         "validate" => [$this, "is_empty"]
            //     )
            // )
        ));
        register_rest_route('blog-post', 'delete', array(
            'methods' => 'POST',
            'callback' => [$this, 'delete_blog_post'],
            // 'permission_callback' => [$this, 'isuserLoggedin'],
            // 'args'=> array(
            //     'title' => array (
            //         "validate" => [$this, "is_empty"]
            //     )
            // )
        ));
    }

    function is_empty( $request ) {
        return empty($param) ? false : true ;
    }

    function create_new_post($request) {
        
        $authorised = isuserLoggedin($request);
        $service_finder_Errors = new WP_Error();
        $parameters = $request->get_params();
        $files = $request->get_file_params();

        if($authorised) {
            $title = sanitize_text_field($parameters['title']);
            $content = sanitize_text_field($parameters['content']);
            $status = sanitize_text_field($parameters['status']) ?? 'publish';
            $user_id = $authorised['user_data']->id;
            
            $new = array(
                'post_title' => $title,
                'post_content' => $content,
                'post_status' => $status ,
                'post_author' => $user_id,
            );
            
            $post_id = wp_insert_post( $new ); 
            $response['status'] = $post_id ? "Success" : "Failure";
            $response['message'] = $post_id ? "Post successfully published!" : "Something went wrong, try again.";
            return new WP_REST_Response($response);
        }
        else {
            $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
            return $service_finder_Errors;
        }
    }
    
    function delete_blog_post($request) {
        $parameters = $request->get_params();
        $id = $parameters["id"];
        $service_finder_Errors = new WP_Error();
        $authorised = isuserLoggedin($request);
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));

        $response['status'] = wp_delete_post( $parameters["id"] ) ? "success" : "fails";
        return $response['status'] == "success" ? new WP_REST_Response($response) :  $service_finder_Errors ;
        
    }
    
    function edit_blog_post($request) {

        $authorised = isuserLoggedin($request);
        $service_finder_Errors = new WP_Error();
        $parameters = $request->get_params();
        $files = $request->get_file_params();

        if($authorised) {
            $title = sanitize_text_field($parameters['title']);
            $content = sanitize_text_field($parameters['content']);
            $status = sanitize_text_field($parameters['status']) ?? 'publish';
            $user_id = $authorised['user_data']->id;
            
            $new = array(
                'ID' => $parameters['id'],
                'post_title' => $title,
                'post_content' => $content,
                'post_status' => $status,
                'post_author' => $user_id,
            );
            
            $post_id = wp_update_post( $new ); 
            $response['status'] = $post_id ? "Success" : "Failure";
            $response['message'] = $post_id ? "Post successfully published!" : "Something went wrong, try again.";
            return new WP_REST_Response($response);
        }
        else {
            $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
            return $service_finder_Errors;
        }
    }
}

new Post_Api;


