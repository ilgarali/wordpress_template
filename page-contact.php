<?php
/* Template Name: Contact Page */

get_header() ?>
<!-- /HEADER -->
<!-- PAGE HEADER -->
<div class="page-header" style="margin-bottom:2rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase">Contact Us</h1>
                <p class="lead"><?php echo the_field('title') ?></p>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title">Contact Information</h2>
                    </div>
                    <p>
                        <?php echo the_field('contact_information') ?>
                    </p>
                    <ul class="contact">
                        <li><i class="fa fa-phone"></i> <?php echo the_field('number') ?></li>
                        <li><i class="fa fa-envelope"></i> <a href="#"><?php echo the_field('email') ?></a></li>
                        <li><i class="fa fa-map-marker"></i> <?php echo the_field('location') ?></li>
                    </ul>
                </div>

                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title">Mail us</h2>
                    </div>
                  
                       <?php the_content() ?>
             
                </div>
            </div>
            <div class="col-md-4">
                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php get_footer() ?>