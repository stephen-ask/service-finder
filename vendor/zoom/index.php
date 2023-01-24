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



?>