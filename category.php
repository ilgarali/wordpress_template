<?php get_header();

?>

	<!-- SECTION -->
	<div class="section">
    <!-- PAGE HEADER -->
		<div class="page-header pb-2">
			<div class="page-header-bg" style="background-image: url('<?php echo get_template_directory_uri() ?>./img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase"><?php    $category = get_category( get_query_var( 'cat' ) );
                    $cat_name = $category->cat_name; echo $cat_name ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
		<!-- container -->
		<div class="container" style="margin-top: 5rem;">
			<!-- row --> 
			<div class="row ">
				<div class="col-md-8 mt-2">
                    <!-- post -->
                    <?php 
                    
                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_name = $category->cat_name;
                   
                    
                    $the_query = new WP_Query(['category_name'=>$cat_name,'posts_per_page' =>1]);
                    if($the_query->have_posts()) {
                        while($the_query->have_posts()) {
                                  $the_query->the_post()   
                                     ?>
					<div class="post post-thumb">
						<a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
                            <?php the_category() ?>
							</div>
                            <h3 class="post-title title-lg"><a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                            </a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date() ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
                    <?php }} ?>
					<div class="row">
                        <!-- post -->
                        
                        <?php 
                    
                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_name = $category->cat_name;
                   
                   
                    $the_query = new WP_Query(['category_name'=>$cat_name,'posts_per_page' =>2,'offset'=>1]);
                    if($the_query->have_posts()) {
                        while($the_query->have_posts()) {
                                  $the_query->the_post()   
                                     ?>
						<div class="col-md-6">
							<div class="post">
                            <a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
                                    <?php the_category() ?>
									</div>
                                    <h3 class="post-title "><a href="<?php the_permalink() ?>">
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
                        <?php }} ?>
					
					</div>

                    <?php 
                    
                     
                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_name = $category->cat_name;
                   
                   
                    $the_query = new WP_Query(['category_name'=>$cat_name,'posts_per_page' =>4,'offset'=>3]);
                    if($the_query->have_posts()) {
                        while($the_query->have_posts()) {
                                  $the_query->the_post()   
                    ?>
					<!-- post -->
					<div class="post post-row">
                    <a class="post-img" href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
                            <?php the_category() ?>
							</div>
							<h3 class="post-title"><a href="  <?php the_permalink() ?>">  <?php the_title() ?></a></h3>
							<ul class="post-meta">
                            <li><a href="author.html"><?php the_author() ?></a></li>
								<li><?php the_date() ?></li>
							</ul>
							<p><?php the_excerpt() ?></p>
						</div>
					</div>
					<!-- /post -->
                    <?php }} ?>
			

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>

                <?php get_sidebar() ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
<?php get_footer() ?>
