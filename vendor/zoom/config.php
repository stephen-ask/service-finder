<?php 
$files_array = array(
    get_template_directory().'vendor/Zoom/vendor',
    get_template_directory()."vendor/Zoom/inc/class-db.php"
);

// load files 
if(!empty($files_array)) {
	foreach($files_array as $file) {
		if(file_exists($file)) {
			require_once $file;
		}
	}
}


define('CLIENT_ID', 'cjdpPvMXQBWrGNfZV8wF8g');
define('CLIENT_SECRET', 'zqP3q0EuYyjpidQ7ovNlUS92cFxcKBN4');
define('REDIRECT_URI', 'https://wediscover.solstium.net/meeting/');
?>