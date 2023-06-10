<?php 
get_header();
?>

<div class="product-heading-img-container" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/product_banner.avif">
   <div class="product-heading-img-overlay">
  </div>
</div>

<div class="breadcrumb"><?php echo do_shortcode('[aioseo_breadcrumbs]'); ?></div>

<div class="container main-woocommerce-container">
  <?php  
    if (is_product_category()) {
        $category = get_queried_object();
        echo '
          <div class="woocommerce-category-heading">
            <h4 class="">' . $category->name . '</h4>
          </div>
        '
        ;
    }
    elseif (!is_singular('product')) {
      echo '
        <div class="woocommerce-category-heading">
          <h4 class=""> All Products </h4>
        </div>
      ';
  }

  // if (is_product_category()) {
  //     echo '<div class="product-category-sidebar">';
  //     dynamic_sidebar('product-category-sidebar');
  //     echo '</div>';
  // }
    woocommerce_content(); 
  ?>
</div>

<?php get_footer(); ?>
