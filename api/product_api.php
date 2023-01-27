<?php


use Firebase\JWT\JWT;
use Firebase\JWT\Key;

if( defined( 'WC_ABSPATH' )) {
	include_once WC_ABSPATH . 'includes/wc-cart-functions.php';
	include_once WC_ABSPATH . 'includes/wc-notice-functions.php';
	include_once WC_ABSPATH . 'includes/wc-template-hooks.php'; 
}
        
global $product, $wpdb;

add_action('rest_api_init', 'wp_product_endpoints');
function wp_product_endpoints($request)
{
    /**
     * Handle Register User request.
     */
    register_rest_route('v1/product', '/get-products', array(
        'methods' => 'POST',
        'callback' => 'get_products'
    ));
	
	register_rest_route('v1/product', '/get-products/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_products_by_id'
    ));

    register_rest_route('v1/product', '/filter-products', array(
        'methods' => 'POST',
        'callback' => 'filter_products',
    ));

    register_rest_route('v1/product', '/get-orders', array(
        'methods' => 'GET',
        'callback' => 'get_orders',
    ));
	
	register_rest_route('v1/product', '/add/', array(
        'methods' => 'POST',
        'callback' => 'create_new_products'
    ));

	register_rest_route('v1/product', '/add-orders', array(
        'methods' => 'POST',
        'callback' => 'add_to_orders',
    ));

    register_rest_route('v1/product', '/search-orders', array(
        'methods' => 'POST',
        'callback' => 'search_orders',
    ));

    register_rest_route('v1/product', '/add-cart', array(
        'methods' => 'POST',
        'callback' => 'add_to_cart',
    ));

    register_rest_route('v1/product', '/cart-lists', array(
        'methods' => 'GET',
        'callback' => 'cart_lists',
    ));
	
	register_rest_route('v1/product', '/remove-cart', array(
        'methods' => 'POST',
        'callback' => 'remove_from_cart',
    ));
	
	register_rest_route('v1/product', '/new-order', array(
		'methods' => 'POST',
		'callback' => 'add_new_order',
	));
	
	register_rest_route('v1/product', '/categories', array(
		'methods' => 'GET',
		'callback' => 'categories',
	));
	
    register_rest_route('v1/product', '/notification', array(
        'methods' => 'POST',
        'callback' => 'notification',
    ));
	
	register_rest_route('v1/product', '/review/add', array(
		'methods' => 'POST',
		'callback' => 'add_review',
	));
	
	register_rest_route('v1/product', '/reviews/(?P<product_id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'get_product_reviews',
	));
	
	register_rest_route('v1/product', '/related-products/(?P<id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'related_products',
	));
	
	register_rest_route('v1/product', 'cart/remove', array(
		'methods' => 'POST',
		'callback' => 'remove_from_cart_by_id',
	));
	
	
	register_rest_route('v1/product', '/wishlist/add', array(
		'methods' => 'POST',
		'callback' => 'add_wishlist',
	));
	
	register_rest_route('v1/product', '/wishlists', array(
		'methods' => 'GET',
		'callback' => 'get_wishlist',
	));
		
	register_rest_route('v1/product', '/wishlist/remove', array(
		'methods' => 'POST',
		'callback' => 'remove_product_from_wishlist',
	));
	
	register_rest_route('v1/product', '/search', array(
		'methods' => 'POST',
		'callback' => 'search_product',
	));	
}

function get_products(WP_REST_Request $request)
{
	$response = array();
	$products_array = array();
	$error = new WP_Error();
	$parameters = $request->get_params();
	
	//$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$paged = ( sanitize_text_field($parameters['page']) ) ? sanitize_text_field($parameters['page']) : 1;
	
	$args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'paged' => $paged );
	$filter = $parameters['filter'];
	if(!empty($filter)) {
		$sort_query = array(
			'meta_query' => array(
				'price' => array(
					'key' => '_price',
					'type' => 'NUMERIC',
				),
			),
		);
		if($filter == 'low-to-high') {
			$sort_query = array_merge($sort_query,array(
					'orderby' => array(
						'_price' => 'ASC'
					)
				)
			);
		} else if( $filter == 'high-to-low') {
			$sort_query = array_merge($sort_query,array(
				'orderby' => array(
						'_price' => 'DESC'
					)
				)
			);
		} else if( $filter == 'newest-first') {
			$sort_query = array_merge($sort_query,array(
				'orderby' => array(
						'post_date' => 'DESC'
					)
				)
			);
		}
		else if( $filter == 'oldest-first') {
			$sort_query = array_merge($sort_query,array(
				'orderby' => array(
						'post_date' => 'ASC'
					)
				)
			);
		}
		 $args = array_merge($sort_query , $args);
	}
	$products = get_posts( $args );
	
	if($authorised = isuserLoggedin($request)) {
		if (!empty($products)){
			$wishlist = explode(',', @$authorised['user_meta']['wishlist'][0]) ?? [];

			foreach ($products as $cat) {
				$product_id = $cat->ID;
				$product = wc_get_product($product_id);
				$stock = $product->get_stock_status() == "instock" ? 1 : 0;
				$vendor_id = get_post_field( 'post_author', $product_id );
				$vendor = get_userdata( $vendor_id );
				$products_array[] = array(
					'product_id' => $product_id,
					'product_name' => $product->get_name(),
					'product_title' => $product->get_title(),
					'product_status' => $product->get_status(),
					'price' => $product->get_price(),
					'sale_price' => $product->get_sale_price(),
					'regular_price' => $product->get_regular_price(),
					'product_image' => wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' )[0],
					'stock_status' => $stock,
					'rating_count' => $product->get_average_rating(),
					'review_count' => $product->get_review_count(),
					'short_description' => $product->get_short_description(),
					'vendor_info' => $vendor->display_name,
					'in_wishlist'  => in_array($product_id, $wishlist),
				);
			}
			//$product->get_image('thumbnail') 
			$response['status'] = 200;
			$response['data'] = $products_array;
		} else {
			$error->add(406, __('Cannot fetch data', 'rest-api-endpoints'));
			return $error;
		} 
		
	} else {
			$error->add(401, __('Unauthorized', 'rest-api-endpoints'));
			return $error;
		}
    return new WP_REST_Response($response);
}

function get_products_by_id(WP_REST_Request $request)
{
	$response = array();
	$products_array = array();
	$error = new WP_Error();
	$parameters = $request->get_params();
	$authorization = isuserLoggedin($request);
	$product_id = sanitize_text_field($parameters['id']);
	$gallery_array = array();
	
	if (!empty($authorization)) {
		if (!empty($product_id)){
			
			$product = wc_get_product($product_id);
			$stock = $product->get_stock_status() == "instock" ? 1 : 0;
			
			$attachment_ids = $product->get_gallery_image_ids();
			
			$gallery_array[0] = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' )[0];
			foreach( $attachment_ids as $attachment_id ) {
				$url = wp_get_attachment_url( $attachment_id );
				$gallery_array[] = $url;
			}
			
			$vendor_id = get_post_field( 'post_author', $product_id );
			$vendor = get_userdata( $vendor_id );
			
			$wishlist = explode(',', @$authorization['user_meta']['wishlist'][0]) ?? [];
			
			$product_details = wc_get_product( $product_id );
			
			$products_array[] = array(
				'product_id' => $product_id,
				'product_name' => $product->get_name(),
				'product_title' => $product->get_title(),
				'product_status' => $product->get_status(),
				'price' => $product->get_price(),
				'sale_price' => $product->get_sale_price(),
				'regular_price' => $product->get_regular_price(),
				'gallery' => $gallery_array,
				'stock_quantity' => !empty($product_details->get_stock_quantity()) ? $product_details->get_stock_quantity() : 0,
				'stock_status' => $stock,
				'rating_count' => $product->get_average_rating(),
				'review_count' => $product->get_review_count(),
				'short_description' => $product->get_short_description(),
				'description' => $product->get_description(),
				'vendor_info' => $vendor->display_name,
				'in_wishlist'  => in_array($product_id, $wishlist),
			);
			
			$response['status'] = 200;
			$response['data'] = $products_array;
		} else {
			$error->add(406, __('Cannot fetch data', 'rest-api-endpoints'));
			return $error;
		}
	} else {
		$error->add(401, __('Unauthorized', 'rest-api-endpoints'));
		return $error;
	}
	return new WP_REST_Response($response);
}


function filter_products(WP_REST_Request $request)
{
	global $wpdb;
	
	$response = array();
	$error = new WP_Error();
	$parameters = $request->get_params();
	$authorization = $request->get_header('authorization');
	$category = sanitize_text_field($parameters['category']);
	$min_high = sanitize_text_field($parameters['min_high']);
	$high_min = sanitize_text_field($parameters['high_min']);
	$color = sanitize_text_field($parameters['color']);
	$size = sanitize_text_field($parameters['size']);
	$rating = sanitize_text_field($parameters['rating']);
	
	$authorization = isuserLoggedin($request);
	
	$products_array = array();
	$all_product_posts = array();
	$gallery_array = array();	
	
	if (!empty($authorization)) {
		if(!empty($category)) {
			$all_product_posts = get_posts(
			
				array(
					'post_type' => 'product',
					'order' => 'ASC',
					'status' => 'publish',
					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => $category,
						),
					),
				)
			);
		} else if(!empty($min_high) || !empty($high_min)){
			if(!empty($min_high)) {
				$all_product_posts = get_posts(
					array(
						'post_type' => 'product',
						'order' => 'ASC',
						'status' => 'publish',
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' => '_price',
								'field' => 'slug',
								'terms' => $min_high,
							)
						)
					)
				);
			}
			if(!empty($high_min)) {
				$all_product_posts = get_posts(
					array(
						'post_type' => 'product',
						'order' => 'ASC',
						'status' => 'publish',
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' => '_price',
								'field' => 'slug',
								'terms' => $high_min,
							)
						)
					)
				);
			}
		} else if(!empty($color)) {
			$all_product_posts = get_posts(
				array(
					'post_type' => 'product',
					'order' => 'ASC',
					'status' => 'publish',
					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy' => 'pa_color',
							'field' => 'slug',
							'terms' => $color,
						)
					)
				)
			);
		} else if(!empty($size)) {
			$all_product_posts = get_posts(
				array(
					'post_type' => 'product',
					'order' => 'ASC',
					'status' => 'publish',
					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy' => 'pa_size',
							'field' => 'slug',
							'terms' => $size,
						)
					)
				)
			);
		} else {
				$all_product_posts = get_posts(
				array(
					'post_type' => 'product',
					'order' => 'ASC',
					'status' => 'publish',
				)
			);
	    } 
		
		if (!empty($all_product_posts)) {
			$wishlist = explode(',', @$authorization['user_meta']['wishlist'][0]) ?? [];
			foreach ($all_product_posts as $item) {
				$product_id = $item->ID;
				$product = wc_get_product($product_id);
				$stock = $product->get_stock_status() == "instock" ? 1 : 0;
				$vendor_id = get_post_field( 'post_author', $product_id );
				$vendor = get_userdata( $vendor_id );
				
				$products_array[] = array(
					'product_name' => $product->get_name(),
					'product_title' => $product->get_title(),
					'price' => $product->get_price(),
					'sale_price' => $product->get_sale_price(),
					'regular_price' => $product->get_regular_price(),
					'product_image' => wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' )[0],
					'stock_status' => $stock,
					'rating_count' => $product->get_average_rating(),
					'review_count' => $product->get_review_count(),
					'short_description' => $product->get_short_description(),
					'description' => $product->get_description(),
					'gallery' => $gallery_array,
					'vendor_info' => $vendor->display_name,
					'in_wishlist'  => in_array($product_id, $wishlist)
				);
			}
		}
	
		$response['status'] = 200;
		$response['data'] = $products_array;
		
	} else {
		$error->add(200, __('Unauthorized', 'rest-api-endpoints'));
		return $error;
	}
	return new WP_REST_Response($response);
}

function get_orders(WP_REST_Request $request)
{
	$response = array();
	$error = new WP_Error();
	$authorization = isuserLoggedin($request);
	$user_id = $authorization['user_data']->id;
	
	$customer_orders = get_posts(array(
		'post_type' => wc_get_order_types(),
		'numberposts' => -1,
        'meta_key' => '_customer_user',
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_value' => $user_id,
		'post_status' => array_keys(wc_get_order_statuses()), 'post_status' => array('wc-processing','wc-pending' )
	));
	
	$Order_Array = $product_data = [];
	if(!empty($authorization)) {
		if (!empty($customer_orders)){
			foreach ($customer_orders as $customer_order) {
				$orderq = wc_get_order($customer_order);
				$products = $orderq->get_items();
			
					
				foreach ($products as $product) {
					
					$product_id = $product->get_product_id();
					$vendor_id = get_post_field( 'post_author', $product_id );
					$vendor = get_userdata( $vendor_id );
					$order_product = wc_get_product( $product_id );
				

					
					$product_data[] = 
						array(
					 'product_id' => $product_id,
					'product_name' => $product->get_name(),
					'product_image'	 => wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' )[0], 
					'vendor_info' => $vendor->display_name,
					
					'price' => $order_product->get_price(),
					'rating' => $order_product->get_average_rating(),
					'stock_quantity' => !empty($order_product->get_stock_quantity()) ? $order_product->get_stock_quantity() : 0,
					);
				}
				
				$Order_Array[] = [
					"id" => $orderq->get_id(),
					"total" => $orderq->get_total(),
					"date" => $orderq->get_date_created()->date_i18n('Y-m-d'),
					"status" => $orderq->status,
					"billing" => $orderq->data["billing"],
					"shipping" => $orderq->data["shipping"],
					'product_data' => $product_data
				];
			}
			$response['status'] = 200;
			$response['data'] = $Order_Array;
		} else {
			$error->add(406, __('No Orders Found', 'rest-api-endpoints'));
			return $error;
		}
	} else {
		$error->add(401, __('Unauthorized', 'rest-api-endpoints'));
		return $error;
	}
	return new WP_REST_Response($response);
}

function search_orders(WP_REST_Request $request)
{
}

function add_to_cart(WP_REST_Request $request)
{
	global $woocommerce, $wpdb;
	$response = array();
	$parameters = $request->get_params();
	$product_id = sanitize_text_field($parameters['product_id']);
	$qty = sanitize_text_field($parameters['quantity']);
	$authorization = isuserLoggedin($request);
	$user_id = $authorization['user_data']->id;
	
	if ($authorization) {
		if (empty($product_id) && empty($qty)) {
		 return array(
			'success' => false,
			"message" => "Product ID or Quantity not found",
			"data" => [],
		);
		}
		
		wp_set_current_user($user_id);
        $objProduct = new WC_Session_Handler();
        $wc_session_data = $objProduct->get_session($user_id);
        
        $full_user_meta = get_user_meta($user_id, '_woocommerce_persistent_cart_1', true);
        
        if ( null === WC()-> session ) {
            $session_class = apply_filters( 'woocommerce_session_handler', 'WC_Session_Handler' );
           
            WC()->session = new $session_class();
            WC()->session->init();
            
        }
        
        if ( null === WC()->customer ) {
            WC()->customer = new WC_Customer( get_current_user_id(), true );
        }
        
        if ( null === WC()->cart ) {
            WC()->cart = new WC_Cart();
        // force refresh cart contents from the session here.   
            WC()->cart->get_cart();
        }
       
        // create a new cart object
        $cartObj = WC()->cart;
        $cart_id = $cartObj->generate_cart_id($product_id);
		$cart_item_id = $cartObj->find_product_in_cart($cart_id);
       
		if (!empty($cart_item_id)) {
			return array(
				'success' => false,
				"message" => "Product Already in cart"
			);
		}
		
        // Add old cart data to newly created cart obect:
        if ($full_user_meta['cart']) {
            foreach($full_user_meta['cart'] as $single_user_meta) {
                $cartObj->add_to_cart( $single_user_meta['product_id'], $single_user_meta['quantity'] );
            }
        }
        //Add product and quantities coming in request to the new cart object
        $cartObj->add_to_cart( $product_id, $qty);
		
        $updatedCart = [];
		
        foreach( $cartObj->cart_contents as $key => $val ){
            unset($val['data']);
            $updatedCart[$key] = $val;
        }
        
        
        // if there is a current session cart, overwrite it with the new cart
        if( $wc_session_data ){
            $wc_session_data['cart'] = serialize($updatedCart);
            $serializedObj = maybe_serialize($wc_session_data);
            
            $table_name = 'wp_woocommerce_sessions';
            
            // Update wp session table with cart data:
            $sql = "UPDATE $table_name SET session_value= '".$serializedObj."' WHERE session_key = '".$user_id."'";
            
            // Execute the query:
            $rez = $wpdb->query($sql);
            
        }
        
        // Overwrite the persistent cart with new cart data
        
        $full_user_meta['cart'] = $updatedCart;
        
   
        $productsInCart = [];
		
        foreach($cartObj->cart_contents as $cart_item) {
            $product = wc_get_product( $cart_item['product_id'] );
            $image_id = $product->get_image_id(); 
            $image_url = wp_get_attachment_image_url( $image_id, 'full');
			
			$vendor_id = get_post_field( 'post_author', $cart_item['product_id'] );
			$vendor = get_userdata( $vendor_id );
            
			$productsInCart[] = (object) [
                "product_id" => $cart_item['product_id'],
                "product_name" => $product->get_name(),
                "product_regular_price" => $product->get_regular_price(),
                "product_sale_price" => $product->get_sale_price(),
                "thumbnail" => $image_url,
                "qty" => $cart_item['quantity'],
                "line_subtotal" => $cart_item['line_subtotal'],
                "line_total" => $cart_item['line_total'],
                "vendor_info" => $vendor->display_name
            ];
        }
        
        update_user_meta(get_current_user_id(), '_woocommerce_persistent_cart_1', array('cart' => updatedCart, ));
        
        $response = [
            'status' => true,
			'message' => "Product added successfully in cart",
            'data' => $full_user_meta['cart'] != null ? $productsInCart : []
        ];
        
        return rest_ensure_response($response);

	} else {
		 return array(
			'success' => false,
			"message" => "Please Logged In to get Data",
			"data" => [],
		);
	}

}

function cart_lists(WP_REST_Request $request)
{
	global $woocommerce, $wpdb;
	$response = array();
	$parameters = $request->get_params();
	$error = new WP_Error();
	$authorization = isuserLoggedin($request);
	$user_id = $authorization['user_data']->id;
	
	if($authorization) {
		wp_set_current_user($user_id);
		$objProduct = new WC_Session_Handler();
		$wc_session_data = $objProduct->get_session($user_id);

		$full_user_meta = get_user_meta($user_id, '_woocommerce_persistent_cart_1', true);

		if ( null === WC()-> session ) {
			$session_class = apply_filters( 'woocommerce_session_handler', 'WC_Session_Handler' );

			WC()->session = new $session_class();
			WC()->session->init();

		}

		if ( null === WC()->customer ) {
			WC()->customer = new WC_Customer( get_current_user_id(), true );
		}

		if ( null === WC()->cart ) {
			WC()->cart = new WC_Cart();
		// force refresh cart contents from the session here.   
			WC()->cart->get_cart();
		}

		// create a new cart object
		$cartObj = WC()->cart;

		foreach( $cartObj->cart_contents as $key => $val ){
			unset($val['data']);
			$updatedCart[$key] = $val;
		}

		// if there is a current session cart, overwrite it with the new cart
		if( $wc_session_data ){
			$wc_session_data['cart'] = serialize($updatedCart);
			$serializedObj = maybe_serialize($wc_session_data);

			$table_name = 'wp_woocommerce_sessions';

			// Update wp session table with cart data:
			$sql = "UPDATE $table_name SET session_value= '".$serializedObj."' WHERE session_key = '".$user_id."'";

			// Execute the query:
			$rez = $wpdb->query($sql);
		}  
		// Overwrite the persistent cart with new cart data
		$full_user_meta['cart'] = $updatedCart;
		$productsInCart = [];
		$wishlist = explode(',', @$authorization['user_meta']['wishlist'][0]) ?? [];
		foreach($cartObj->cart_contents as $cart_item) {
			$product = wc_get_product( $cart_item['product_id'] );
			$image_id = $product->get_image_id();
			$image_url = wp_get_attachment_image_url( $image_id, 'full');
			
			$vendor_id = get_post_field( 'post_author', $cart_item['product_id'] );
			$vendor = get_userdata( $vendor_id );
			
			$productsInCart[] = (object) [
				"product_id" => $cart_item['product_id'],
				"product_name" => $product->get_name(),
				"product_regular_price" => $product->get_regular_price(),
				"product_sale_price" => $product->get_sale_price(),
				"product_image" => $image_url,
// 				'stock_quantity' => !empty($product->get_stock_quantity()) ? $product->get_stock_quantity() : 0
				"qty" => $cart_item['quantity'],
				"line_subtotal" => $cart_item['line_subtotal'],
				"line_total" => $cart_item['line_total'],
				"vendor_info" => $vendor->display_name,
				'in_wishlist'  => in_array( $cart_item['product_id'], $wishlist),
			];
		}
		$response = [
			'status' => !empty($full_user_meta['cart']) ? true : false,
			'message' => !empty($full_user_meta['cart']) ? "Cart fetched" : "No products in the cart.",
		];
		
		if(!empty($full_user_meta['cart'])) {
			$response['data'] = $full_user_meta['cart'] != null ? $productsInCart : [];
		}
		return rest_ensure_response($response);
	} else {
		$error->add(401, __('Unauthorized', 'rest-api-endpoints'));
		return $error;
	}
}

function remove_from_cart(WP_REST_Request $request)
{
	global $woocommerce, $wpdb;
	$response = array();
	$parameters = $request->get_params();
	$product_id = sanitize_text_field($parameters['product_id']);
	$authorization = isuserLoggedin($request);
	$user_id = $authorization['user_data']->id;
	
	if ($authorization) {
		wp_set_current_user($user_id);
        $objProduct = new WC_Session_Handler();
        $wc_session_data = $objProduct->get_session($user_id);
        
        $full_user_meta = get_user_meta($user_id, '_woocommerce_persistent_cart_1', true);
       
        if ( null === WC()-> session ) {
            $session_class = apply_filters( 'woocommerce_session_handler', 'WC_Session_Handler' );
           
            WC()->session = new $session_class();
            WC()->session->init();
        }
        
        if ( null === WC()->customer ) {
            WC()->customer = new WC_Customer( get_current_user_id(), true );
        }
        
        if ( null === WC()->cart ) {
            WC()->cart = new WC_Cart();
        // force refresh cart contents from the session here.   
            WC()->cart->get_cart();
        }
       
        // create a new cart object
        $cartObj = WC()->cart;
		
		$cart = WC()->instance()->cart;
		$cart_id = $cart->generate_cart_id($product_id);
		$cart_item_id = $cart->find_product_in_cart($cart_id);
		
		//remove product and quantities coming in request to the new cart object
		if($cart_item_id){
			$cart->set_quantity($cart_item_id, 0);
		} else {
			return array(
				'status' => false,
				"message" => "faild to find product",
			);
		}
        
        $response = [
            'status' => true,
			'message' => "The product has been removed from cart",
        ];
        
        return rest_ensure_response($response);

	} else {
		 return array(
			'status' => false,
			"message" => "Please Logged In to get Data",
			"data" => [],
		);
	}
}

function add_to_orders(WP_REST_Request $request) {
	/*$authorized = isuserLoggedin($request);
	$parameters = $request->get_params();
	$product_orders = $parameters['orders'];
	
	if(empty($product_orders)) {
		$response = [
            'status' => 400,
			'message' => "Order should not be empty",
        ];
        return rest_ensure_response($response);
	}
	
	if($authorized) {	
		$order = wc_create_order();
	
		foreach($product_orders as $product_order) {
			if(!empty($product_order->quantity)){
				$order->add_product( wc_get_product( $product_id ), 2 );
			} else {
				$order->add_product( wc_get_product( $product_id ));
			}
		}

		$response = [
            'status' => true,
			'message' => $order->calculate_totals(),
        ];
        return rest_ensure_response($response);
	} else {
		$response = [
            'status' => 401,
			'message' => "Unauthorized",
        ];
        return rest_ensure_response($response);
	} */
}

function categories(WP_REST_Request $request) {
	global $wpdb;
	$service_finder_Errors = new WP_Error(); 
    $userData = isuserLoggedin($request);

    if($userData) {
		$orderby = 'name';
		$order = 'asc';
		$hide_empty = false ;
		$args = array(
			'orderby'    => $orderby,
			'order'      => $order,
		);
		$terms = get_terms('product_cat', $args);
		$response = array();
		foreach ($terms as $term) {
			$response["data"][] = $term->name;
		}
		
		$qry = 'SELECT name, phonecode FROM `country`';
		$country_listing = $wpdb->get_results($qry);
		$response['country_data'] = $country_listing;
			
		
		return new WP_REST_Response($response); 
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function remove_from_cart_by_id(WP_REST_Request $request)
{
	global $woocommerce, $wpdb;
	$response = array();
	$parameters = $request->get_params();
	$product_ids = str_contains($parameters['product_ids'], ',' ) ? explode(',', $parameters['product_ids']) : [$parameters['product_ids']];
	$authorization = isuserLoggedin($request); 
 
	if(empty($parameters['product_ids']) ) {
		$response['status']	= "Success";
		$response['message'] = 'Product id should not be empty';
		return rest_ensure_response($response);
	} elseif(empty($authorization )){
		$response['code']	= 401;
		$response['message'] = 'Unauthorised';
		return rest_ensure_response($response);
	}
	
	$user_id = $authorization['user_data']->id;
	
	wp_set_current_user($user_id);
	$objProduct = new WC_Session_Handler();
	$wc_session_data = $objProduct->get_session($user_id);

	$full_user_meta = get_user_meta($user_id, '_woocommerce_persistent_cart_1', true);

	if ( null === WC()-> session ) {
		$session_class = apply_filters( 'woocommerce_session_handler', 'WC_Session_Handler' );

		WC()->session = new $session_class();
		WC()->session->init();
	}

	if ( null === WC()->customer ) {
		WC()->customer = new WC_Customer( get_current_user_id(), true );
	}

	if ( null === WC()->cart ) {
		WC()->cart = new WC_Cart();
		// force refresh cart contents from the session here.   
		WC()->cart->get_cart();
	}

	// create a new cart object
	$cartObj = WC()->cart;
	$cart_count = WC()->cart->get_cart_contents_count();
	if($cart_count == 0 ) {
		$response['status']	= "Fails";
		$response['message'] = 'Cart was empty';
		return rest_ensure_response($response);
	}
	
	$cart = WC()->instance()->cart;
	
	$error_msg = array();

	if(!empty($product_ids)) {
		foreach( $product_ids as $product_id ) {
			$cart_id = $cart->generate_cart_id($product_id);
			$cart_item_id = $cart->find_product_in_cart($cart_id);

			//remove product and quantities coming in request to the new cart object
			if($cart_item_id){
				$cart->set_quantity($cart_item_id, 0);
			} else {
				$error_msg[] = $product_id;
			}
		}        
	}
	$response = [
		'status' => !empty($error_msg) ? 'Fails': 'Success',
		'message' => !empty($error_msg) ? "Invalid product ids ".implode(',',$error_msg) : "The product has been removed from cart",
	];

	return $response;
}


function add_new_order(WP_REST_Request $request) {
	global $woocommerce, $wpdb;
	
	$service_finder_Errors = new WP_Error(); 
    $userData = isuserLoggedin($request);
	$parameters = $request->get_params();
	$product_ids = array();

    if($userData) {
		$user_id = $userData['user_data']->id;
		$query = 'SELECT company_name as company,address as address_1, address_2,city,state,country,zipcode, phone FROM `service_finder_providers` where wp_user_id="'.$user_id.'"';
		$result = $wpdb->get_results($query)[0];
		
		wp_set_current_user($user_id);
		$objProduct = new WC_Session_Handler();
		$wc_session_data = $objProduct->get_session($user_id);

		$full_user_meta = get_user_meta($user_id, '_woocommerce_persistent_cart_1', true);
		
		  if ( null === WC()-> session ) {
            $session_class = apply_filters( 'woocommerce_session_handler', 'WC_Session_Handler' );
           
            WC()->session = new $session_class();
            WC()->session->init();
        }
        
        if ( null === WC()->customer ) {
            WC()->customer = new WC_Customer( $userData['user_data']->id , true );
        }
        
        if ( null === WC()->cart ) {
            WC()->cart = new WC_Cart();
        // force refresh cart contents from the session here.   
            WC()->cart->get_cart();
        }
       
		
		$address = array(
			'first_name' => $userData['user_data']->first_name,
			'last_name'  => $userData['user_data']->last_name,
			'email'      => $userData['user_data']->user_email,
		);		
		
		if($result) {
			foreach ($result as $key => $userdata) {
				$address[$key] = $userdata;
			}			
		}
		
		$order = wc_create_order();
		
		$cart = WC()->instance()->cart;
		
		// create a new cart object
        $cartObj = WC()->cart;

		if(empty(WC()->cart->get_cart())) {
			$service_finder_Errors->add(401, esc_html__('Cart Empty', 'service-finder'));
			return $service_finder_Errors;
		}
	
		foreach( WC()->cart->get_cart() as $item) {
			$product_ids[] = $product_id = $item['product_id'];
			$quantity = $item['quantity'];
			
			$order->add_product( get_product( $product_id ), $quantity );
			$cart_id =  $cartObj->generate_cart_id($product_id);
			$cart_item_id = $cartObj->find_product_in_cart($cart_id);
			$cartObj->set_quantity($cart_item_id, 0);
		}
	
		$order->set_address( $address, 'billing' );
		$order->set_address( $address, 'shipping' );
		$order->calculate_totals();
		$order->update_status("Processing");  
		$order->payment_complete(); 

		update_post_meta($order->id, '_customer_user', $userData['user_data']->id);
	
		$response['status'] = 'Success';	
		$response['message'] = 'Your Order has been placed';	
		return new WP_REST_Response($response); 
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function add_review(WP_REST_Request $request) {

	$authendicated = isuserLoggedin($request);
	$parameters = $request->get_params();
	$userdata = $authendicated['user_data'];
	$service_finder_Errors = new WP_Error();
	if($authendicated) {
		$user_id = $userdata->id;
		$username = $userdata->user_login;
		$user_email = $userdata->user_email;
		$product_id = $parameters['product_id'];
		$review = $parameters['user_review'];
		$rating = $parameters['rating'] ?? 0;
		
		if(empty($product_id)) {
			$response['status'] = 'Failed';	
			$response['message'] = 'Invalid product id.';	
			return new WP_REST_Response($response); 	
		}
		
		$comment_id = wp_insert_comment( array(
			'comment_post_ID'      => $product_id, // <=== The product ID where the review will show up
			'comment_author'       => $username,
			'comment_author_email' => $user_email, // <== Important
			'comment_content'      => $review,
			'comment_type'         => 'review',
			'comment_parent'       => 0,
			'user_id'              => $user_id, // <== Important
			'comment_date'         => date('Y-m-d H:i:s'),
			'comment_approved'     => 1,
		) );

		// HERE inserting the rating (an integer from 1 to 5)
		update_comment_meta( $comment_id, 'rating', $rating );
		update_comment_meta( $comment_id, 'pixrating', $rating );
		
		$response['status'] = 'Success';	
		$response['message'] = 'Thanks so much for sharing your experience with us.';	
		return new WP_REST_Response($response); 
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function get_product_reviews(WP_REST_Request $request) {
	$authendicated = isuserLoggedin($request);
	$parameters = $request->get_params();
	$userdata = $authendicated['user_data'];
	$service_finder_Errors = new WP_Error();
	if($authendicated) {
		$product_id = $parameters['product_id'];
	
		$reviews = $comments = get_comments( array(
			'post_id'      => $product_id, // <=== The product ID where the review will show up
			'comment_type'         => 'review',
			'comment_approved'     => 1,
		) );
	
		 
		foreach($reviews as $key => $review) { 
			foreach($review as $inner_key => $value) {

				$reviews[$key]->product_rating = get_comment_meta($review->comment_ID , 'pixrating')[0] ?? 0;
				$usermeta = get_user_meta($review->user_id); 
				$profile_image = !empty($usermeta['user_avatar']) ? get_post($usermeta['user_avatar'][0]) : get_post(5026);
				$reviews[$key]->profile_image = $profile_image->guid;	
			}
		}
		$response['status'] = 'Success';	
		$response['data'] = $reviews;	
		return new WP_REST_Response($response); 
		
	} else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function related_products(WP_REST_Request $request) {
	$parameters = $request->get_params();
	$producct_id = sanitize_text_field($parameters['id']) ? sanitize_text_field($parameters['id']) : sanitize_text_field($parameters['product_id']);
	$related_products = wc_get_related_products( $producct_id );
	$related_products_data = array();
	$authendicated = isuserLoggedin($request);
	if(!empty($related_products)) {
		$wishlist = explode(',', @$authendicated['user_meta']['wishlist'][0]) ?? [];
		foreach ($related_products as $related_product_id) {
			$vendor_id = get_post_field( 'post_author', $related_product_id );
			$vendor = get_userdata( $vendor_id );
			$product = wc_get_product($related_product_id);
			$gallery_array = wp_get_attachment_image_src( get_post_thumbnail_id( $related_product_id ), 'single-post-thumbnail' )[0];
				
			$related_products_data['data'][] = array( 
				'product_id' => $product->get_id(),
				'product_name' => $product->get_name(),
				'product_title' => $product->get_title(),
				'product_status' => $product->get_status(),
				'price' => $product->get_price(),
				'sale_price' => $product->get_sale_price(),
				'regular_price' => $product->get_regular_price(),
				'product_image' => $gallery_array,
				'stock_status' => $stock,
				'rating_count' => $product->get_average_rating(),
				'review_count' => $product->get_review_count(),
				'short_description' => $product->get_short_description(),
				'vendor_info' => $vendor->display_name,
				'stock_quantity' => !empty($product->get_stock_quantity()) ? $product->get_stock_quantity() : 0,
				'in_wishlist'  => in_array($product->get_id(), $wishlist),
			);
		}
	}
	
	return new WP_REST_Response($related_products_data); 
}
function clear_cart(WP_REST_Request $request) {
	$authendicated = isuserLoggedin($request);
	$userdata = $authendicated['user_data'];
	$user_id = $authendicated['user_data']->id;
	$service_finder_Errors = new WP_Error();
	
	if($authendicated) {
		
		wp_set_current_user($user_id);
		$objProduct = new WC_Session_Handler();
		$wc_session_data = $objProduct->get_session($user_id);
		try {
			
			if ( null === WC()-> session ) {
				$session_class = apply_filters( 'woocommerce_session_handler', 'WC_Session_Handler' );

				WC()->session = new $session_class();
				WC()->session->init();
			}

			if ( null === WC()->customer ) {
				WC()->customer = new WC_Customer( $user_id, true );
			}

			if ( null === WC()->cart ) {
				WC()->cart = new WC_Cart();
			// force refresh cart contents from the session here.   
				WC()->cart->get_cart();
			}	
			WC()->cart->empty_cart();	

			$response['status'] = true;
			$response['message'] = 'Cart cleared' ;
			return new WP_REST_Response($response); 	
		} 
		catch(Exception $e) {
			$response['status'] = false;
			$response['message'] =  $e->message();
			return new WP_REST_Response($response); 
		}
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}
function get_array_data($data) {
	return str_contains(',', $data) ? explode(',', $data) : [$data];
}
function add_wishlist(WP_REST_Request $request) {
	$authorised = isuserLoggedin($request);
	$parameters = $request->get_params(); 
	$service_finder_Errors = new WP_Error();
	$product_ids = $ids = trim(str_replace(' ','',$parameters['product_ids']));

	if($authorised) {
		$userdata = $authorised['user_data'];
		$user_id = $authorised['user_data']->id;
		$product_meta = $authorised['user_meta']['wishlist'][0];
		if(!empty($product_ids)) {
			$error = array();
			// GET WISHLIST PRODUCT DATA FROM DB 
			$products = get_array_data($product_meta);
			
			// GET PRODUCT ID FROM USER INPUT 
			$product_ids =  get_array_data($product_ids);
			foreach( $product_ids as $product_id ) {
				if(in_array($product_id, $products)) {
					$error[] = $product_id;
				}
			}
			
			if(!empty($error)) {
				$response['status'] = 'Fails';	
				$response['message'] = 'Product already on list '. implode(',', $error);	
				goto response;	
			}
				
			$product_ids = array_unique(array_merge($product_ids, $products)) ;
			$product_ids = str_replace(' ','', implode(',', $product_ids));
			
			$result = update_user_meta($user_id, 'wishlist', $product_ids);
			if(!$result) {	
				add_user_meta($user_id, 'wishlist', $ids);
			} 
						
			$response['status'] = 'Success';	
			$response['message'] = 'Products added to wishlist.';	
			
			response:
			return new WP_REST_Response($response); 
			
		} else {
			$response['status'] = 'Fails';	
			$response['message'] = 'Product ID should not be empty';	
			return new WP_REST_Response($response); 
		}
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}
function get_wishlist(WP_REST_Request $request) {
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	if($authorised) {
		$products_id = $authorised['user_meta']['wishlist'][0]; 
		
		if(!empty($products_id)) {
			$get_products_array = array_unique(explode(',', $products_id));
			$product_data = array();
			
			foreach($get_products_array as $key => $product_id) {
				$temp = get_product_by_id($product_id);
				if(!empty($temp)) {
					$product_data[] = $temp; 	
				}
			
			}
			if(!empty($product_data)) {
				$response['status'] = 200;
				$response['data'] = $product_data;	
			} else {
				$response['status'] = 400;
				$response['message'] = 'Wishlist empty.';	
			}
			
		} else {
			$response['status'] = 400;
			$response['message'] = 'Wishlist empty.';
		}
		return new WP_REST_Response($response);
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}
function get_product_by_id($id)
{
	$response = array();
	$products_array = array();
	$error = new WP_Error();
	$product_id = sanitize_text_field($id);
	$gallery_array = array();

	if (!empty($product_id)){

		$product = wc_get_product($product_id);
		if(empty($product)) {
			return (object) [];
		}
		
		$stock = $product->get_stock_status() == "instock" ? 1 : 0;

		$attachment_ids = $product->get_gallery_image_ids();

		$gallery_array[0] = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' )[0];
		foreach( $attachment_ids as $attachment_id ) {
			$url = wp_get_attachment_url( $attachment_id );
			$gallery_array[] = $url;
		}

		$vendor_id = get_post_field( 'post_author', $product_id );
		$vendor = get_userdata( $vendor_id );

		$product_details = wc_get_product( $product_id );

		$products_array = array(
			'product_id' => $product_id,
			'product_name' => $product->get_name(),
			'product_title' => $product->get_title(),
			'product_status' => $product->get_status(),
			'price' => $product->get_price(),
			'sale_price' => $product->get_sale_price(),
			'regular_price' => $product->get_regular_price(),
			'gallery' => $gallery_array,
			'stock_quantity' => !empty($product_details->get_stock_quantity()) ? $product_details->get_stock_quantity() : 0,
			'stock_status' => $stock,
			'rating_count' => $product->get_average_rating(),
			'review_count' => $product->get_review_count(),
			'short_description' => $product->get_short_description(),
			'description' => $product->get_description(),
			'vendor_info' => $vendor->display_name,
		);

		return  $products_array;
	} 
}
function remove_product_from_wishlist(WP_REST_Request $request) {
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	$parameters = $request->get_params();
    $response = [];

	if($authorised) {
		$userdata = $authorised['user_data'];
		$usermeta = $authorised['user_meta'];
		$user_id = $userdata->id;
		$remove_product_id = $parameters['product_ids']; 
		$temp = $usermeta['wishlist'];
		
		
		// GETS WISHLIST FROM USER META 
		$wishlist = is_array($temp) ? explode(",", $temp[0]) : $temp;
		
		// GETS PRODUCT WISHLIST ARRAY 
		$product_array = $remove_product_array = !is_array($remove_product_id) ? explode(',', $remove_product_id) : explode(',',$remove_product_id); 
		
		
		// REMOVES SPECIFIC PRODUCT WISHLIST FROM ARRAY
		foreach($remove_product_array as $product_id) {
			$key = array_search($product_id, $wishlist, true);
			
			if ($key !== false) {		
				unset($wishlist[$key]);
			}	
		}
		$product_array = trim(implode(',', $wishlist));
		
		$products_id = update_user_meta($user_id, 'wishlist', $product_array); 
		
		if($products_id) {
			$response['status'] = 200;
			$response['message'] = 'Product item removed from wishlist';		
		}  elseif (empty($wishlist)) {
			$response['status'] = 400;
			$response['message'] = 'Wishlist empty.';
		}
		else {
			$response['status'] = 400;
			$response['message'] = 'Failed to remove wishlist';
		}
		
		return new WP_REST_Response($response);
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}
function search_product(WP_REST_Request $request)
{
	global $wpdb;
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	$parameters = $request->get_params();
	$response = [];
	$products_array = array();
	$gallery_array = array();
	$search_term = $parameters['search_term'];
	
	if(empty($search_term)) {
		$service_finder_Errors->add(401, esc_html__('Invalid search term', 'service-finder'));
		return $service_finder_Errors;
	}
	
	if($authorised) {
		$products_list = $wpdb->get_results('select ID from wp_posts where post_title like "%'.$search_term.'%"');
		$wishlist = explode(',', @$authorised['user_meta']['wishlist'][0]) ?? [];
		
		foreach( $products_list as $product_id) 
		{
			$product_id = $product_id->ID;
			$product = wc_get_product($product_id);
		
			if(empty($product)) {
				continue;
			}

			$stock = $product->get_stock_status() == "instock" ? 1 : 0;

			$attachment_ids = $product->get_gallery_image_ids();

			$vendor_id = get_post_field( 'post_author', $product_id );
			$vendor = get_userdata( $vendor_id );

			$product_details = wc_get_product( $product_id );
			$wishlist =
			$products_array[] = array(
				'product_id' => $product_id,
				'product_name' => $product->get_name(),
				'product_title' => $product->get_title(),
				'product_status' => $product->get_status(),
				'price' => $product->get_price(),
				'sale_price' => $product->get_sale_price(),
				'regular_price' => $product->get_regular_price(),
				'product_image' => wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' )[0],
// 				'stock_quantity' => !empty($product_details->get_stock_quantity()) ? $product_details->get_stock_quantity() : 0,
				'stock_status' => $stock,
				'rating_count' => $product->get_average_rating(),
				'review_count' => $product->get_review_count(),
				'short_description' => $product->get_short_description(),
				'description' => $product->get_description(),
				'vendor_info' => $vendor->display_name,
				'in_wishlist'  => in_array($product_id, $wishlist),
			);
		}
		return  $products_array;
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}
function create_new_products(WP_REST_Request $request){
	$authorised = isuserLoggedin($request);
	$service_finder_Errors = new WP_Error();
	$parameters = $request->get_params();
	$files = $request->get_file_params();
	$user_id = $authorised['user_data']->id;
	if($authorised) {		
		$product = new WC_Product_Simple();
		$title = sanitize_text_field($parameters['product_name']); 
		$slug = sanitize_text_field($parameters['slug']); 
		$description = sanitize_textarea_field($parameters['description']); 
		$price = sanitize_text_field($parameters['price']); 
		$category_ids = is_array($parameters['category_ids']) ? sanitize_text_field(implode($parameters['category_ids'])) : sanitize_text_field($parameters['category_ids']);
		
		if(empty($title)) return 'Product Name should not be empty';
		
		$product->set_name( $title ); // product title
		$product->set_slug( $slug );
		$product->set_regular_price( $price ); // in current shop currency

		$product->set_short_description( $description );
		$attchment_ids = array();
		if (!empty($files)) {
			$upload_overrides = array('test_form' => false);
			foreach ($files as $key => $file) {
				$attachment_id = $attchment_ids[] = media_handle_upload($key, $upload_overrides);
				if (!is_wp_error($attachment_id) && $key == "product_image") {
					$product->set_image_id( $attachment_id );	
				} 
			}
		}	
		
		if(!empty($category_ids)) {
			$product->set_category_ids( array( $category_ids ) );
		}
		
		$product_id = $product->save();
		$attchment_ids = (is_array($attchment_ids) && !empty($attchment_ids)) ? implode(',', $attchment_ids) : $attchment_ids; 
		
		// SETS PRODUCT GALLERY IMAGE
		update_post_meta($product_id ,'_product_image_gallery', $attchment_ids);
		
		// SET PRODUCT AUTHOR
		if(!empty($user_id) || $user_id != 0) {
			$arg = array( 'ID' => $product_id,'post_author' => $user_id);
			wp_update_post( $arg );		
		}
	
		return $product_id ? "Success" : 'Failure';
	}
	else {
        $service_finder_Errors->add(401, esc_html__('Unauthorised', 'service-finder'));
        return $service_finder_Errors;
    }
}

function notification(WP_REST_Request $request)
{
}
