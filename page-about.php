<?php
/* Template Name: About Page */

get_header() ?>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
        <!-- container -->
        
		<!-- PAGE HEADER -->
		<div class="page-header" style="margin-bottom:2rem;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">About Us</h1>
						<p class="lead"><?php echo the_field('title') ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-5">
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Our story</h2>
						</div>
						<p><?php echo the_field('our_story') ?></p>
					
					</div>
				</div>
				<div class="col-md-7">
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Our Vision</h2>
						</div>
                    <p><?php echo the_field('our_vision') ?></p>
                </div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
<?php get_footer() ?>

