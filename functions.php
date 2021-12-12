<?php

add_action('add__styles');

function add__styles(){
    wp_enqueue_style('style', get_template_directory_uri() . '/wordpress.itcompany/style.css');
}

?>