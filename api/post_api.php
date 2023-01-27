<?php

class Post_Api extends Base_Api {

    function __construct() {
        $this->action();
    }
    
    function action() {
        add_action('rest_api_init', [$this, 'rest_api_init']);
    }

    function rest_api_init() {
        echo 'init';
        register_rest_route('blog-post', 'add', array(
            'methods' => 'POST',
            'callback' => [$this, 'create_new__post'],
            'permission_callback' => [$this, 'is_user_logged_in'],
            'args'=> array(
                'title' => array (
                    "validate" => [$this, "is_empty"]
                )
            )
        ));
    }

    function is_empty($param, $request, $key) {
        return empty($param) ? true : false;
    }

    function create_new__post($request) {
        
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
}

new Post_Api;


