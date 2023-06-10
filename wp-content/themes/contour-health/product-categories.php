<?php 

/**
 * Template Name: Product Categories
 * 
 */

get_header(); ?>

<div class="product-categories-heading-img-container">
	 <div class="product-categories-heading-img-overlay">
  </div>
</div>
<section class="">
  <div class="product-categories-main-container container">
    <div class="home-headings">
      <h2 class="text-primary text-center mb-5 testimonial-heading">Product Categories</h2>
    </div>
    <div class="row d-flex justify-content-center">
      <?php
        $args = array(
            'taxonomy' => 'product_cat',
            'orderby' => 'name',
            'hide_empty' => false,
        );
        $product_categories = get_categories($args);

        if ($product_categories) {
            foreach ($product_categories as $category) {
              $category_link = get_term_link($category);
              $category_image_id = get_term_meta($category->term_id, 'thumbnail_id', true);
              $category_image = wp_get_attachment_image_src($category_image_id, 'thumbnail');
              
              if ($category_image) {
                  $image_link = $category_image[0];
              } else {
                  $image_link = '';
              }

              ?>
                <div class="col-sm-6 col-md-4 mb-5">
                  <a href="<?php echo $category_link ?>" class="d-flex justify-content-center">
                    <div class="product-categories-img-container">
                      <img src="<?php echo $image_link ?>" alt="<?php echo $category->name ?>" />
                    </div>
                  </a>
                  <h5 class="text-center mt-3" style="color: gray"><?php echo $category->name ?></h5>
                </div>
              <?php
            }
        }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>