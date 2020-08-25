<?php get_header() ?>

		<!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg"
			 style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');background-repeat:no-repeat;background-size:contain;  background-attachment: fixed;
  background-position: center;" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
						<?php the_category() ?>
						</div>
						<h1><?php the_title() ?></h1>
						<ul class="post-meta">
							<li><a href="author.html"><?php the_author() ?></a></li>
							<li><?php the_date() ?></li>
							<li><i class="fa fa-comments"></i>  <?php echo get_comments_number() ?></li>
							<li><i class="fa fa-eye"></i> 807</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post share -->
					<div class="section-row">
						<div class="post-share">
							<a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
							<a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
							<a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
							<a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
						</div>
					</div>
					<!-- /post share -->

					<!-- post content -->
					<div class="section-row">
                        <?php the_content() ?>
                    </div>
					<!-- /post content -->

					<!-- post tags -->
					<div class="section-row">
						<div class="post-tags">
							<ul>
							
                                <?php the_tags() ?>
							</ul>
						</div>
					</div>
					<!-- /post tags -->

					<!-- post nav -->
					<div class="section-row">
						<div class="post-nav">
							<div class="prev-post">
							
                                <?php previous_post_link(); ?>  
							</div>

							<div class="next-post">
						
                                <?php next_post_link(); ?>
							</div>
						</div>
					</div>
					<!-- /post nav  -->

					<!-- post author -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">About <a href="author.html">John Doe</a></h3>
						</div>
						<div class="author media">
							<div class="media-left">
								<a href="author.html">
									<img class="author-img media-object" src="./img/avatar-1.jpg" alt="">
								</a>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="author-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post author -->

					<!-- /related post -->
					<div>
						<div class="section-title">
							<h3 class="title">Related Posts</h3>
						</div>
						<div class="row">
                            <!-- post -->
                            
                            <?php 
                             $related = new WP_Query(
                                array(
                               'category__in'   => wp_get_post_categories( $post->ID ),
                               'posts_per_page' => 3,
                               'post__not_in'   => array( $post->ID )
                                )
                             );
                             if( $related->have_posts() ) { 
                                while( $related->have_posts() ) { 
                               $related->the_post(); ?>
                        
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<?php the_category() ?>
										</div>
										<h3 class="post-title title-sm"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
										<ul class="post-meta">
											<li><a href="author.html"><?php the_author() ?></a></li>
											<li><?php the_date() ?></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->
                                <?php    } wp_reset_postdata(); } ?> 
						
							<!-- /post -->
						</div>
					</div>
					<!-- /related post -->

					<!-- post comments -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title"><?php echo count(get_comments( array('post_id' => $post->ID, 'status' => 'approve') ))?> Comment(s)</h3>
						</div>
						<div class="post-comments">
							<!-- comment -->
							<?php 
							if(get_comments( array('post_id' => $post->ID, 'status' => 'approve') )){ 
								foreach(get_comments( array('post_id' => $post->ID, 'status' => 'approve') ) as $comment) { ?>
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/avatar-2.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4><?php echo $comment->comment_author ?></h4>
										<span class="time">
											<p><?php echo $comment->comment_content ?></p>
										</span>
									</div>
									<p><?php echo $comment->comment_date ?></p>
								
								
								</div>
							</div>
							<!-- /comment -->
								<?php }} ?>			
					
							<!-- /comment -->
						</div>
					</div>
					<!-- /post comments -->

					<!-- post reply -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Leave a reply</h3>
						</div>
						<!-- <form class="post-reply" method="post" action="/wp-comments-post.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="comment" placeholder="Comment"></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
							
								<div class="col-md-12">
									<button class="primary-button">Submit</button>
								</div>
								
							</div>
						</form> -->
						<?php $comments_args = array(
        						'submit_button'=>'<div class="col-md-12">
								<button class="primary-button">Submit</button>
								</div>'	,
							// change the title of the reply section
							'title_reply'=>'Add a comment',
							// remove "Text or HTML to be displayed after the set of comment fields"
							'comment_form_top' => 'ds',
							'comment_notes_before' => '',
							'comment_notes_after' => '',
							// redefine your own textarea (the comment body)
							'comment_field' => '<div class="col-md-12">
							<div class="form-group">
								<textarea id="comment" class="input" name="comment" placeholder="Comment"></textarea>
							</div>
						</div>',
							'fields' => apply_filters( 'comment_form_default_fields', array(
							'author' =>'<div class="col-md-4">
								<div class="form-group">
								<input id="author" class="input" type="text" name="author" placeholder="Name">
							</div>
							</div>',
							'email' =>'<div  class="col-md-4">
							<div class="form-group">
								<input id="email" class="input" type="email" name="email" placeholder="Email">
							</div>
							</div>',
						
								
								)
  ),
);

							comment_form($comments_args);
?>
					</div>
					<!-- /post reply -->
				</div>
				<?php get_sidebar() ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
<?php get_footer() ?>