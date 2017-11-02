<?php

/*
Plugin Name: cookie bar customized
Plugin URI: https://github.com/MatthiasLiszt/cookiebarplugin4wordpress
Description: a EU conform cookie bar on the bottom of your wordpress page
Version: 0.1
Author: MatthiasLiszt
Author URI: http://matthiasliszt.github.io

*/

$kookieaccepted="false";

wp_enqueue_style( 'style','/wp-content/plugins/kookie/kookie.css' );
add_action('wp_footer','aKookie');


function aKookie(){
 $cookie_name = "samplekookie";
 $cookie_value = "1";



 if(!isset($_COOKIE[$cookie_name])) {
   $message="Cookie named '" . $cookie_name . "' is not set!";
   //echo $message;
   echo "<iframe id='kookieframe' src='/wp-content/plugins/kookie/kookie.html'></iframe>";
    
  } else {
    //$message= "Cookie '" . $cookie_name . "' is set!";
    //$value= "Value is: " . $_COOKIE[$cookie_name];
    echo $value;
 }
}


?>

