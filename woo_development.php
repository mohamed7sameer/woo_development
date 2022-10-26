<?php

/*

Plugin Name: 'Woo Development'

*/

require plugin_dir_path(__FILE__) . 'inc/dvAdd_pages.php';
require plugin_dir_path(__FILE__) . 'inc/dvDd.php';






function custom_woo_field($fields){
    $fields['billing']['billing_first_name']['label'] = 'First Name';
    $fields['billing']['billing_first_name']['placeholder'] = 'First Name';
    $fields['billing']['billing_last_name']['label'] = 'Family Name';
    $fields['billing']['billing_last_name']['placeholder'] = 'Family Name';

    

    // dd($fields);

    return $fields;
    
}

add_filter('woocommerce_checkout_fields', 'custom_woo_field');



// $woo = array(
//     'post_type' => 'product',
//     'post_per_page' => 8,
//     'orderby' => 'date',
//     'stock' => 1
// );

// $shop = new WP_Query($woo);

// dd($shop);


function testy($data){
    // dd($data);
    
    
    return $data ;

}

add_filter( 'frontpage_template_hierarchy', 'testy' );




?>