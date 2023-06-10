<?php
/**
 * Template Name: Contact
 * 
 */

 get_header();
?>

<div class="contact-heading-img-container">
	 <div class="contact-heading-img-overlay">
  </div>
</div>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row no-gutters">
						<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">Get in touch</h3>
								<div id="form-message-warning" class="mb-4"></div> 
								<div id="form-message-success" class="mb-4">
									Your message was sent, thank you!
								</div>
								<form method="POST" id="contactForm" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-6"> 
											<div class="form-group">
												<label class="label" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="phone">Phone Number (ex. +61 7867543562)</label>
												<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="company">Company</label>
												<input type="text" class="form-control" name="company" id="company" placeholder="Company">
											</div>
										</div>
										<div class="col-md-6"> 
											<div class="form-group">
												<label class="label" for="company-website">Company Website</label>
												<input type="text" class="form-control" name="company-website" id="company-website" placeholder="Company Website">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="message">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" id="contact-submit-btn" value="Send Message" class="btn btn-dark" />
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
							<div class="info-wrap bg-primary w-100 p-md-5 p-4">
								<h3>Let's get in touch</h3>
								<p class="mb-4">Should you have any queries or are you interested in further information? Fill out the contactform below and a Platform representative will get in touch with you within 48 hours.</p>
								<div class="dbox w-100 d-flex align-items-start">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text pl-3">
										<p>No.17, Hongtu Road Chengdong Industrial Park Xiangshan, Ningbo, China. 315700</p>
									</div>
								</div>
								<div class="dbox w-100 d-flex align-items-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text pl-3">
										<p><a href="tel://1234567920">+86 574 83009206</a></p>
									</div>
								</div>
								<div class="dbox w-100 d-flex align-items-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-solid fa-envelope"></span>
									</div>
									<div class="text pl-3">
										<p><a href="mailto:manager@platform-pillow.com">manager@platform-pillow.com</a></p>
									</div>
								</div>
								<div class="dbox w-100 d-flex align-items-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text pl-3">
										<p><a href="https://www.platform-pillow.com">www.platform-pillow.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
  get_footer();
?>