<?php
/*
Plugin Name: Crypto Market Price Inserter
Description: The crypto market price inserter is provided by executium as a plugin. This plugin allows you to add the javascript to your page and it will find all occurences of crypto related words such as bitcoin and append a price to them. 
Author Name: Executium
Version: 1.0
*/
function crypto_script()
{
    wp_enqueue_script( 'crypto-price-inserter', esc_url( plugins_url( 'dist/min.js', __FILE__ ) ), array(), '1.0.0', true );
    $crypto_path = plugin_dir_url(__FILE__);
    wp_localize_script( 'crypto-price-inserter', 'crypto_path', $crypto_path );
}
add_action('wp_enqueue_scripts','crypto_script');

