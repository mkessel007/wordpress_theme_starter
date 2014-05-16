<?php 

$url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'; // the URL to check against
$test_url = @fopen($url,'r'); // test parameters
if($test_url !== false) { // test if the URL exists
    function load_external_jQuery() { // load external file
        wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, true); // register the external file
        wp_enqueue_script('jquery'); // enqueue the external file
    }
    add_action('wp_enqueue_scripts', 'load_external_jQuery'); // initiate the function
} else {
    function load_local_jQuery() {
        wp_enqueue_script('jquery'); // enqueue built in WordPress version
    }
add_action('wp_enqueue_scripts', 'load_local_jQuery'); // initiate the function
}

?>