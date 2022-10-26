<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    
    wp_head();
    
    ?>
</head>
<body>
    

<?php





$woo = array(
    'post_type' => 'product',
    'post_per_page' => 8,
    'orderby' => 'date',
    'stock' => 1
);

$shop = new WP_Query($woo);
// dd($shop);

while($shop->have_posts()){
    $shop->the_post();
    global $product;
  ?>

<div class="woo">
    <a href="<?= the_permalink()?>" id="id-<?= the_id() ?>"><?= the_title()?></a>
    <?php
    if(has_post_thumbnail($shop->post->ID)){
        echo get_the_post_thumbnail($shop->post->ID);
    }
    ?>
    <p><?= $product->get_price_html() ?></p>
    <p><?= woocommerce_template_loop_add_to_cart($shop->post,$product) ?></p>
</div>


<?php



}

wp_footer();
?>

</body>
</html>
