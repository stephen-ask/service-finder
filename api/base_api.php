<?php

class Base_Api {
    function isuserLoggedin($request) {	
        $authorization = $request->get_header('authorization');
        
        if(empty($authorization)) return false; 
    
        $token = str_replace('Bearer ','',$authorization);
        $tkn_user = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
        
        $userdata = !empty($tkn_user->id) ? get_userdata($tkn_user->id) : '';
        
        if(!empty($authorization) && !empty($userdata)) {	
            $usermeta = get_user_meta($tkn_user->id); 
            $_SESSION['current_user_id'] = $tkn_user->id;
        
            return true;
        }
        return false; 
    }    
}