<?php 
/**
 * Template Name: Home
 * 
 */

get_header() ?>
    
<div>
  <!-- home page slider start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php 
      $query = new WP_Query(
        array(
          'post_type' => 'homesliders',
        )
      );
      
      query_posts($query);
    ?>
    <ol class="carousel-indicators">
      <?php
        $i =0;
        while($query->have_posts()) : $query->the_post();
        ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class=" <?php if($i==0) echo 'active'; ?>"></li>
      <?php
        $i++;
        endwhile;
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      $i=0;
       query_posts($query);
        while($query->have_posts()) : $query->the_post();
        ?>
          <div class="carousel-item <?php if($i==0) echo 'active'; ?>">
            <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" style="min-height: 250px">
          </div>
      <?php
      $i++;
        endwhile;
      ?>
        <?php wp_reset_query(); ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- home page slider ends -->

  <!-- Blog starts-->
<?php 
  $query = new WP_Query(
    array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      )
    );
    
    query_posts($query);

    if($query->have_posts()){

    ?>
    <div class="container py-5">
        <div class="home-headings">
          <h2 class="text-primary text-center mb-5 testimonial-heading">Latest Blogs</h2>
        </div>
        <div class="row d-flex justify-content-center">
              <?php
              while($query->have_posts()) : $query->the_post();
              ?>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                  <div class="card mb-3 home-blog-card">
                    <div class="home-blog-img-container" style="height: 250px; overflow: hidden">
                      <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="home-blog-card-title"><?php  the_title(); ?></h5>
                      <small class="text-muted home-blog-date">
                        <div class="views">
                          <?php the_date(); ?>
                        </div>
                      </small>
                      <p class="card-text home-blog-excerpt">
                        <?php the_excerpt(); ?>
                      </p>
                      <a href="<?php the_permalink(); ?>" class="text-primary home-blog-read-more">Read More</a>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
  <?php
    }
  ?>
  <!-- Blog ends-->
  
  <!-- Products slider starts-->
  <div class="product-slider-container">
    <div class="container">
        <div class="home-headings">
          <h2 class="text-primary text-center mb-5 testimonial-heading">Our Products</h2>
        </div>
        <div class="row">
          <!-- Travel Pillow Slider -->
          <?php 
            $args = array(
              'post_type' => 'product',
              'product_cat' => 'Travel Pillows',
              'posts_per_page' => 7
            );

            $products_query = new WP_Query( $args );

            if ( $products_query->have_posts() ) {
            ?>
              <div class="col-md-6">
                <div class="product-slider">
                  <h5>Travel Pillows</h5>
                  
                  <?php
            $i=0;
            while ( $products_query->have_posts() ) {
              $products_query->the_post();
                  ?>
                    <a href="<?php echo get_permalink(); ?>">
                      <img class="<?php if($i==0) echo 'active' ?> travel-slider-img travel-product-slider-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </a>
                  <?php
                  $i++;
              }
              ?>
                </div>
                <nav class="product-slider-nav">
                  <ul>
                    <li class="arrow">
                      <button class="travel-slider-previous">
                        <span>
                          <i class="fa fa-solid fa-arrow-left"></i>
                        </span>
                      </button>
                    </li>
                    <li class="arrow">
                      <button class="travel-slider-next">
                        <span>
                          <i class="fa fa-solid fa-arrow-right"></i>
                        </span>
                      </button>
                    </li>
                  </ul>
                </nav>
              </div>
              <?php
              wp_reset_query();
            } else {
                // No products found
            }
          ?>

          <!-- Home pillow slider -->
          <?php 
            $args = array(
              'post_type' => 'product',
              'product_cat' => 'Home Pillows',
              'posts_per_page' => 7
            );

            $products_query = new WP_Query( $args );

            if ( $products_query->have_posts() ) {
            ?>
              <div class="col-md-6">
                <div class="product-slider home-product-slider">
                  <h5>Home Pillows</h5>

            <?php
            $i=0;
              while ( $products_query->have_posts() ) {
                  $products_query->the_post();
                  ?>
                    <a href="<?php echo get_permalink(); ?>">
                      <img class="<?php if($i==0) echo 'active' ?> travel-slider-img home-product-slider-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </a>
                  <?php
                  $i++;
              }
              ?>
                </div>
                <nav class="product-slider-nav">
                  <ul>
                    <li class="arrow">
                      <button class="home-slider-previous">
                        <span>
                          <i class="fa fa-solid fa-arrow-left"></i>
                        </span>
                      </button>
                    </li>
                    <li class="arrow">
                      <button class="home-slider-next">
                        <span>
                          <i class="fa fa-solid fa-arrow-right"></i>
                        </span>
                      </button>
                    </li>
                  </ul>
                </nav>
              </div>
              <?php
              wp_reset_query();
            } else {
                // No products found
            }
          ?>
        </div>
        
    </div>
  </div>
  <!-- Products slider ends-->

  <!-- testimonial starts-->
  <div class="testimonial-container">
    <div class="container">
        <div class="home-headings">
          <h2 class="text-primary text-center mb-5 testimonial-heading">What our client says</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <?php 
                      $query = new WP_Query(
                        array(
                          'post_type' => 'testimonial',
                        )
                      );
                      
                      query_posts($query);

                      while($query->have_posts()) : $query->the_post();
                      ?>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    <?php 
                                      echo get_field('description');
                                    ?>
                                </p>
                            </div>
                            <h3 class="title">
                              <?php 
                                echo get_field('author');
                              ?>
                            </h3>
                            <span class="post">
                              <?php 
                                echo get_field('profession');
                              ?>
                            </span>
                        </div>
                    <?php
                      endwhile;
                      wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- testimonial ends-->

</div>

<?php get_footer() ?>