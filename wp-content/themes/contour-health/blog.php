<?php
/**
 * Template Name: Blog
 * 
 */

 get_header();
?>
<div class="blog-heading-img-container" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/blog-banner.png)">
  <div class="blog-heading-img-overlay">
  </div>
</div>
  <section class="blog-main-container">
    
    <div class="container">
      <div class="home-headings">
        <h2 class="text-primary text-center mb-5 testimonial-heading">All Blogs</h2>
      </div>
      <div class="row d-flex justify-content-center">
        <?php 
          $query = new WP_Query(
            array(
              'post_type' => 'post',
              'posts_per_page' => 100,
              )
            );
            
            query_posts($query);
            if($query->have_posts()){
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
            }
            else{
              ?>
                <h5 class="my-5" style="color: gray">No Blogs Found</h5>
              <?php
            }
          ?>
          <?php wp_reset_query(); ?>
      </div>
    </div>
  </section>
<?php
get_footer();
?>