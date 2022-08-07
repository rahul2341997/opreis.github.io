<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Opreis
 */

?>

<footer>
			<div class="container">
				<div class="footer_wrapper">
					<div class="footer_box footer_box_info">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="writeabout" class="footer_logo">
						</a>
						<p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="social_icons">
							<li>
								<a href="#">
									<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.46904 13.875V7.4231H0.1875V5.10011H2.46904V3.11597C2.46904 1.55681 3.81675 0.125 6.92217 0.125C8.1795 0.125 9.10924 0.215131 9.10924 0.215131L9.03598 2.38441C9.03598 2.38441 8.0878 2.37751 7.05309 2.37751C5.93323 2.37751 5.75381 2.7634 5.75381 3.40389V5.10011H9.125L8.97832 7.4231H5.75381V13.875H2.46904Z" fill="#231F40"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.25 1.75833C16.6432 2.02682 15.9829 2.22005 15.3028 2.29531C16.0089 1.86498 16.5377 1.18514 16.79 0.383329C16.1273 0.787671 15.4014 1.0712 14.6444 1.22135C14.328 0.874396 13.9454 0.598 13.5203 0.40938C13.0952 0.22076 12.6368 0.123959 12.1737 0.125008C10.2998 0.125008 8.79278 1.68307 8.79278 3.59505C8.79278 3.86354 8.82451 4.13203 8.87607 4.39035C6.07021 4.23984 3.56775 2.86484 1.90407 0.759623C1.60093 1.29074 1.44207 1.89547 1.44403 2.51092C1.44403 3.71506 2.04089 4.77682 2.95106 5.40126C2.41468 5.37959 1.89087 5.22837 1.42221 4.95988V5.00259C1.42221 6.6888 2.58421 8.08617 4.13289 8.40755C3.84211 8.48503 3.54298 8.52466 3.24255 8.52552C3.02244 8.52552 2.81423 8.50315 2.60404 8.47264C3.03236 9.84764 4.27962 10.8463 5.76484 10.8789C4.60284 11.8125 3.14737 12.3617 1.56697 12.3617C1.28341 12.3617 1.02166 12.3515 0.75 12.319C2.2491 13.3055 4.02779 13.875 5.94331 13.875C12.1618 13.875 15.5645 8.59061 15.5645 4.00389C15.5645 3.85337 15.5645 3.70285 15.5546 3.55234C16.2129 3.05807 16.79 2.44583 17.25 1.75833Z" fill="#231F40"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.99815 4.70736C5.73576 4.70736 4.70555 5.73758 4.70555 7C4.70555 8.26242 5.73576 9.29264 6.99815 9.29264C8.26054 9.29264 9.29075 8.26242 9.29075 7C9.29075 5.73758 8.26054 4.70736 6.99815 4.70736ZM13.8742 7C13.8742 6.05061 13.8828 5.10982 13.8295 4.16215C13.7762 3.0614 13.5251 2.08449 12.7202 1.27957C11.9136 0.472934 10.9384 0.223547 9.83767 0.170229C8.8883 0.116912 7.94753 0.125512 6.99987 0.125512C6.0505 0.125512 5.10972 0.116912 4.16207 0.170229C3.06135 0.223547 2.08446 0.474654 1.27955 1.27957C0.472927 2.08621 0.223545 3.0614 0.170228 4.16215C0.116912 5.11154 0.125512 6.05233 0.125512 7C0.125512 7.94767 0.116912 8.89018 0.170228 9.83786C0.223545 10.9386 0.474647 11.9155 1.27955 12.7204C2.08617 13.5271 3.06135 13.7765 4.16207 13.8298C5.11144 13.8831 6.05222 13.8745 6.99987 13.8745C7.94925 13.8745 8.89002 13.8831 9.83767 13.8298C10.9384 13.7765 11.9153 13.5253 12.7202 12.7204C13.5268 11.9138 13.7762 10.9386 13.8295 9.83786C13.8846 8.89018 13.8742 7.94939 13.8742 7ZM6.99815 10.5275C5.04609 10.5275 3.47068 8.9521 3.47068 7C3.47068 5.0479 5.04609 3.47246 6.99815 3.47246C8.95022 3.47246 10.5256 5.0479 10.5256 7C10.5256 8.9521 8.95022 10.5275 6.99815 10.5275ZM10.6701 4.15183C10.2143 4.15183 9.84627 3.78376 9.84627 3.32799C9.84627 2.87221 10.2143 2.50415 10.6701 2.50415C11.1259 2.50415 11.4939 2.87221 11.4939 3.32799C11.4941 3.43621 11.4728 3.5434 11.4315 3.64342C11.3901 3.74343 11.3295 3.8343 11.2529 3.91083C11.1764 3.98736 11.0855 4.04804 10.9855 4.08939C10.8855 4.13075 10.7783 4.15196 10.6701 4.15183Z" fill="#231F40"/>
									</svg>
								</a>
							</li>
						</ul>
					</div>
					<div class="footer_box footer_box1">
						<h4 class="footer_title">Product</h4>
						<ul class="footer_link">
							<li><a href="#">Register</a></li>
							<li><a href="explore-ideas.html">Explore ideas</a></li>
							<li><a href="features.html">Features</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Schedule Demo</a></li>
						</ul>
					</div>
					<div class="footer_box footer_box2">
						<h4 class="footer_title">Resources</h4>
						<ul class="footer_link">
							<li><a href="pedagogy-outcomes.html">Pedagogy & Outcomes</a></li>
							<li><a href="schools-districts.html">Schools & Districts</a></li>
							<li><a href="#">Teaching Resources</a></li>
						</ul>
					</div>
					<div class="footer_box footer_box3">
						<h4 class="footer_title">Support</h4>
						<ul class="footer_link">
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Contact Teacher Ambassador</a></li>
						</ul>
					</div>
					<div class="footer_box footer_box4">
						<h4 class="footer_title">Company</h4>
						<ul class="footer_link">
							<li><a href="#">Rockstar Teachers</a></li>
							<li><a href="#">Press Kit</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">About</a></li>
						</ul>
					</div>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-bg.png" alt="Footer" class="footer_shape">
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Jquery js file -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>

<!-- Fontawesome js file -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/all.min.js"></script>

<!-- owl carousel js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>

<!-- popper js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>

<!-- wow Js file -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>

<!-- Custom Js file -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#myform").on('submit',function(e){
			e.preventDefault();

			$.ajax({
				type: "POST",
				url: "<?php echo get_template_directory_uri(); ?>/sign-val.php",
				data: new FormData(this),
				datatype: "json",
				contentType: false,
				cache: false,
				processData: false,

				success:function(response){
					response = JSON.parse(response);
					$(".dis-success").css("display","block");
					// console.log(response.massage);
					if (response.status == 1){

						$("#myform")[0].reset();
						$(".dis-success").css("background-color","lightgreen");
						$(".dis-success").html('<p>' + response.message + '</p>');

					}else{
						$(".dis-success").css("background-color","#FFCCCB");
						$(".dis-success").html('<p>' + response.message + '</p>');
					}

				}
			});
		});
	});
</script>

</body>
</html>
