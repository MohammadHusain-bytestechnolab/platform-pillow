<footer class="footer">
  <div class="container bottom_border">
    <div class="row">

      <div class=" col-sm-4 col-md  col-6 col d-flex  align-items-center pt2">
        <!-- <?php dynamic_sidebar('footer-logo') ?> -->
        <span class="text-primary" style="font-size:36px; font-weight: 500">PLATFORM</span>
      </div>

      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
        <?php dynamic_sidebar('footer-about') ?>
      </div>
      
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
        <?php dynamic_sidebar('footer-contact') ?>
      </div>
      
      
      <div class=" col-sm-4 col-md  col-6 col">
        <?php dynamic_sidebar('footer-links') ?>
      </div>

    </div>
  </div>
  <div class="container copyright-container">
    <p class="text-center">Copyright @<span id="copyright-year"></span> Platform Pillow Inc. All Rights Reserved.</p>

    <ul class="social_footer_ul">
      <?php 
        $query = new WP_Query(
            array(
                'post_type' => 'socialmedia',
                'posts_per_page' => 1
            )
        );

        if ($query->have_posts()) {
          $query->the_post();
          ?>
            <li><a href="<?php echo get_field('facebook_link') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo get_field('twitter_link') ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo get_field('instagram_link') ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <?php
        }
        wp_reset_query();
      ?>
    </ul>
  </div>

</footer>

<?php wp_footer() ?>

</body>

<script>
  const year = new Date().getFullYear();
  document.getElementById('copyright-year').innerText = year;
</script>

</html>