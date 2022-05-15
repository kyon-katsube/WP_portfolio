<?php

//CSS・JSを読み込ませる
function my_enqueue_scripts(){
    //css
    wp_enqueue_style( 'reset', '//unpkg.com/ress/dist/ress.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri(). '/scss/style.css',array(),'1.0.0' );

    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');

    //js
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.6.0.min.js', array(), '3.6.0');
    wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js', array('jquery'));
}  
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


//テーマをサポート（使えるように）する
add_theme_support( 'post-thumbnails' ); //アイキャッチ画の取り扱い許可 