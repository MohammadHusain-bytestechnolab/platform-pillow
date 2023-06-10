<?php 
get_header();
?>
<section>
  <!--------------------------------------
HEADER
--------------------------------------->
<?php 
	if(have_posts()){
		while(have_posts()){
			the_post();
		
?>
<div class="container single-blog-main-container">
	<div class="jumbotron jumbotron-fluid mb-3 pl-0 pt-5 pb-0 bg-white position-relative">
		<div class="h-100 tofront">
			<div class="row justify-content-between">
				<div class="single-blog-col-md-6 pt-6 pb-6 pr-6 align-self-center">
					<!-- <p class="text-uppercase font-weight-bold">
						<a class="text-danger" href="">Stories</a>
					</p> -->
					<h1 class="display-4 mb-3 font-weight-bold"><?php the_title(); ?></h1>
					<!-- <p class="mb-3">
						 Analysts told CNBC that the currency could hit anywhere between $1.35-$1.40 if the deal gets passed through the U.K. parliament.
					</p> -->
					<div class="d-flex align-items-center">
						<!-- <img class="rounded-circle" src="assets/img/demo/avatar2.jpg" width="70"> -->
						<small class="ml-2">
							<?php the_date(); ?>
						</small>
					</div>
				</div>
				<div class="single-blog-col-md-6 single-blog-feature-img pr-0">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!-- End Header -->
    
<!--------------------------------------
MAIN
--------------------------------------->
<div class="container pt-4 pb-4">
	<div class="row justify-content-center">
		<!-- <div class="col-lg-2 pr-4 mb-4 col-md-12">
			<div class="sticky-top text-center">
				<div class="text-muted">
					Share this
				</div>
				<div class="share d-inline-block">
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
				</div>
			</div>
		</div> -->
		<div class="col-md-12 col-lg-12">
			<article class="article-post">
				<p>
					<?php the_content(); ?>
				</p>
			</article>
		</div>
	</div>
</div>
<?php 
	}}
?>
</section>

<?php 
get_footer();
?>