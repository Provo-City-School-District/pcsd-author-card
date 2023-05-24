<?php
/*
  Plugin Name: PCSD Author Card
  Description: Add Author Card to single.php
  Version: 1.0
  Author: Josh Espinoza
  Author URI: iamjoshespinoza.com
*/
add_filter('the_content','pcsdAddAuthorCard');
function pcsdAddAuthorCard($content) {
  if(is_single() && is_main_query()){
    return $content . 'Author Card Goes Here';
  }
  return $content;
}

 ?>
