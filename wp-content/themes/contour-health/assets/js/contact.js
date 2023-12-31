$(document).ready(function(){ 
	
  $('#contact-submit-btn').click(()=>{
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					subject: "required",
					email: {
						required: true,
						email: true
					},
					phone: {
						required: true,
						minlength: 14,
						maxlength: 14,
					},
					message: {
						required: true,
						minlength: 5
					}
				},
				messages: {
					name: "Please enter your name",
					subject: "Please enter your subject",
					phone: "Please enter your phone number",
					email: "Please enter a valid email address",
					message: "Please enter a message"
				},
				/* submit via ajax */
				
				submitHandler: function(form) {		
					var $submit = $('.submitting'),
						waitText = 'Submitting...';
					jQuery.ajax({   	
				    type: "POST",
						url: `${templateDirectory.url}/sendEmail.php`,
						data: $(form).serialize(),

						beforeSend: function() { 
							$submit.css('display', 'block').text(waitText);
						},
						success: function(msg) {
									if (msg == 'OK') {
									$('#form-message-warning').hide();
									setTimeout(function(){
										$('#contactForm').show();
									}, 1000);
									setTimeout(function(){
											$('#form-message-success').show();   
									}, 1400);

									setTimeout(function(){
											$('#form-message-success').hide();   
									}, 8000);

									setTimeout(function(){
											$submit.css('display', 'none').text(waitText);  
									}, 1400);

									setTimeout(function(){
										$( '#contactForm' ).each(function(){
												this.reset();
										});
									}, 1400);
										
								} else {
										$('#form-message-warning').html(msg);
									$('#form-message-warning').show();
									$submit.css('display', 'none');
								}
						},
						error: function() {
							$('#form-message-warning').html("Something went wrong. Please try again.");
								$('#form-message-warning').show();
								$submit.css('display', 'none');
						}
			    });    		
		  	} // end submitHandler

			});
		
  })
})