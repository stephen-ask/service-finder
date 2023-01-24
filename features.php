<?php

$files_array = array(
	get_template_directory(). "/vendor/Zoom/index.php"
);

// INCLUDES FILES IN ARRAY ONLY IF FILE EXISTS 
array_filter($files_array, function($value, $key) {
	if(file_exists($value)) require_once $value;
}, ARRAY_FILTER_USE_BOTH);

add_shortcode('featured-influencers-slider', 'featured_influencers_slider');
function featured_influencers_slider($atts) {
	global $wpdb;
	$html = '';
	$classes = '';
	$users = (object) array();
	
	$args = array(
		'role'    => 'provider',
		'order'   => $atts['orderby'] ?? 'DESC',
		'number' => $atts['number'] ?? -1,
	);
	
	if(!empty($atts['category_ids'])) {
		$category_ids = $atts['category_ids'];
		$qry = "SELECT service_finder_providers.wp_user_id as ID, wp_users.user_login, wp_users.user_nicename, wp_terms.name FROM service_finder_providers 
INNER JOIN 
wp_terms ON service_finder_providers.category_id = wp_terms.term_id
INNER JOIN wp_users ON service_finder_providers.wp_user_id = wp_users.ID
where service_finder_providers.category_id in ($category_ids);";
		
		$users = $wpdb->get_results($qry);
	} else {
		$classes .= ' custom-slicx-container';
		$users = get_users( $args );
	}
	
	if(!empty($users)) {
		$html .= '<div class="owl-carousel ';
		if(!empty($atts['class']) && $atts['class'] == 'left') {
			$html .= ' custom-slicx-left';
		} else if(!empty($atts['class']) && $atts['class'] == 'right') {
			$html .= ' custom-slicx-right';
		} else {
			$html .= $classes;
		}
			$html .= '">';
			foreach ( $users as $user ) {
				$user_id = $user->ID;
				$user_meta = array();
				
				$user_name = $user->user_login;
				$user_nicename = $user->user_nicename;	
				
				if(empty($user->name)) {
					$sql = "SELECT wp_terms.name FROM service_finder_providers INNER JOIN wp_terms ON service_finder_providers.category_id = wp_terms.term_id  WHERE wp_user_id ='".$user_id."'";
					$user_meta = $wpdb->get_results($sql);
				} else {
					$user_meta[0] = (object) array(
						'name' => $user->name
					);
				}
				
				$image_url = service_finder_get_avatar_by_userid( $user_id );//, array('size' => 450) ); 
				
				$html .= '<div class="slicx-slide-wrap">';
					$html .= '<div class="slider-image-box" style="background-image: url(';
						if($image_url) {		
							$html .= $image_url;
						}
						$html .= ');">';
						$html .= '<a class="card-hp-link" href="'.get_author_posts_url(get_the_author_meta($user_id )).$user_nicename.'"></a>';
						$html .= '<h3><a href="'.get_author_posts_url(get_the_author_meta($user_id )).$user_nicename.'">'. $user_name .'</a></h3>';
						if(count($user_meta) > 0) {
							$html .= '<h5>'. $user_meta[0]->name .'</h5>';
						}
					$html .= '</div>';
				$html .= '</div>';
			}
		$html .= '</div>';
	}
	return $html;
}


//add_shortcode('create-zoom-meetup', 'create_zoom_meetup');
function create_zoom_meetup($atts) {
	global $wpdb;
	$meeting = new Meeting();
	$html = '';
	
	$data = [
		'topic' => 'A new zoom meeting',
		'agenda' => 'our meeting desc',
		'settings' => [
			'host_video' => false,
			'participant_video' => true,
			'join_before_host' => true,
			'audio' => true,
			'approval_type' => 2,
			'waiting_room' => false,
		],
	];
	
	echo 'in';
	$meeting = $meeting->create($data);
}

add_action('wp_ajax_priv_influencer_create_product', 'dashboard_create_new_product');
add_action('wp_ajax_nopriv_influencer_create_product', 'dashboard_create_new_product');
function dashboard_create_new_product() {
	var_dump('test'); exit;
	$product = new WC_Product_Simple();
	$title = sanitize_text_field($_POST['title']); 
	$slug = sanitize_text_field($_POST['slug']); 
	$description = sanitize_textarea_field($_POST['description']); 
	$price = sanitize_text_field($_POST['price']); 
	$category_ids = sanitize_text_field($_POST['category_ids']);
	
	
	$files = $_FILES;
	
	$product->set_name( $title ); // product title
	$product->set_slug( $slug );
	$product->set_regular_price( $price ); // in current shop currency

	$product->set_short_description( $description );
	
	if (!empty($files)) {
		$upload_overrides = array('test_form' => false);
		foreach ($files as $key => $file) {
			$attachment_id = media_handle_upload($key, $challengeID);
			if (is_wp_error($attachment_id)) {
				$product->set_image_id( $attachment_id );
				break;
			} 
		}
	}	
	
	$product->set_category_ids( array( $category_ids ) );

	$product->save();
}

