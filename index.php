<?php get_header() ?>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<?php 
					$i = 0;
					$the_query = new WP_Query(['category_name'=>'featured']);
					
					if($the_query->have_posts()) {
						while($the_query->have_posts() && $i < 1) {
							$the_query->the_post()
					
					?>
					<div class="post post-thumb">
						<a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
							<?php the_category() ?>
							</div>
							<h3 class="post-title title-lg"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date() ?></li>
							</ul>
						</div>
					</div>
					<?php $i++; } } ?>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
				<?php 
				
					$the_query = new WP_Query(['category_name'=>'featured','posts_per_page'=>2,'offset'=>1]);
					
					if($the_query->have_posts()) {
						while($the_query->have_posts()) {
							$the_query->the_post()
					
					?>

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo  get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
							<?php the_category() ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date() ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					<?php  } } ?>
				
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						<?php
						
						
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$the_query = new WP_Query( 'posts_per_page=4&paged=' . $paged );  
						if($the_query->have_posts()) { while ($the_query->have_posts()) {
							$the_query->the_post();
						 ?>
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html">
									<img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<?php the_category() ?>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink() ?>">
										<?php the_title() ?>
									</a></h3>
									<ul class="post-meta">
										<li><a href="author.html"><?php the_author() ?></a></li>
										<li><?php the_date() ?></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
						<?php } } ?>
		<div class="col-md-12 text-center">
		<?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $the_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
		</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Javascript</h2>
							</div>
						</div>

						<?php 
						$the_query = new WP_Query( array( 'category_name' => 'javascript', 'posts_per_page' => 3 ) );
						if($the_query->have_posts()) {
							while ($the_query->have_posts()) {
								$the_query->the_post();
						?>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?php the_permalink() ?>l"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<?php the_category() ?>
									</div>
									<h3 class="post-title title-sm"><a href="<?php the_permalink() ?>">
									<?php the_title() ?></a></h3>
									<ul class="post-meta">
										<li><?php the_author() ?></li>
										<li><?php the_date() ?></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					<?php }} ?>
					
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Dart</h2>
							</div>
						</div>

						<?php $query = new WP_Query(['category_name'=>'dart','posts_per_page'=>3]);
							if($query->have_posts()) {
								while ($query->have_posts()) {
									$query->the_post();
								
						?>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<?php the_category() ?>
									</div>
									<h3 class="post-title title-sm"><a href="<?php the_permalink() ?>">
										<?php the_title() ?></a></h3>
									<ul class="post-meta">
										<li><?php the_author() ?></li>
										<li><?php the_date() ?></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
							<?php  }} ?>			
					
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Mobile</h2>
							</div>
						</div>

						<?php
						$query = new WP_Query(['category_name'=>'mobile','posts_per_page'=>3]);
						if( $query->have_posts() ) {
							while ($query->have_posts()) {
								$query->the_post()
							
						
						?>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<?php the_category() ?>
									</div>
									<h3 class="post-title title-sm"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
									<ul class="post-meta">
										<li><?php the_author() ?></li>
										<li><?php the_date() ?></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					<?php  }} ?>
				
					</div>
					<!-- /row -->
				</div>
		<!-- SIDEBAR -->

		<?php get_sidebar() ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">PHP</h2>
					</div>
					<!-- post -->
					<?php $the_query = new WP_Query(['category_name'=>'php','posts_per_page'=>3]) ;
						if ($the_query->have_posts()) {
							while ($the_query->have_posts()) {
								$the_query->the_post()
							
						
					?>
					<div class="post">
						<a class="post-img" href="<?php the_permalink()  ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
							<?php  the_category() ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date()  ?></li>
							</ul>
						</div>
					</div>

					<?php }} ?>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Javascript</h2>
					</div>
					<!-- post -->
					<?php $the_query = new WP_Query(['category_name'=>'javascript','posts_per_page'=>3]) ;
						if ($the_query->have_posts()) {
							while ($the_query->have_posts()) {
								$the_query->the_post()
							
						
					?>
					<div class="post">
						<a class="post-img" href="<?php the_permalink()  ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
							<?php  the_category() ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date()  ?></li>
							</ul>
						</div>
					</div>

					<?php }} ?>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">DART</h2>
					</div>
					<!-- post -->
					<?php $the_query = new WP_Query(['category_name'=>'dart','posts_per_page'=>3]) ;
						if ($the_query->have_posts()) {
							while ($the_query->have_posts()) {
								$the_query->the_post()
							
						
					?>
					<div class="post">
						<a class="post-img" href="<?php the_permalink()  ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
							<?php  the_category() ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date()  ?></li>
							</ul>
						</div>
					</div>

					<?php }} ?>
					<!-- /post -->
				</div>
			
			
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<?php 
				
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged );  
				if($the_query->have_posts()) { while ($the_query->have_posts()) {
					$the_query->the_post();
				 ?>
			
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category" style="font-size: 8px;">
							<?php the_category() ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
						</div>
					</div>
					<!-- /post -->

					
				</div>
				<?php  } } ?>

			
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8" id="load-post">

					<?php  $i = 0;
					
						if( have_posts() ){
							while(have_posts() &&  $i < 3){
							the_post()	
					?>
					<!-- post -->
					<div class="post post-row ">
						<a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<?php the_category() ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?>.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date() ?></li>
							</ul>
							<p><?php the_excerpt() ?></p>
						</div>
					</div>
					<!-- /post -->
				<?php $i++; }} ?>
					

					<div class="section-row loadmore text-center" >
						<button id="load-more" class="primary-button">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/./img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/./img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/./img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/./img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/./img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/./img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
<script>
const loadMore = document.querySelector('#load-more')


</script>
<?php get_footer() ?>