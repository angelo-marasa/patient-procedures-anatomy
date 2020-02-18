<?php
/*
 * Template Name: Procedures Start Page
 */?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="anatomy-content anatomy-start-page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<section class="anatomy-start-page-bodies">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="anatomy-start-page-description">
                    Select a part of the body to learn more about procedures and treatments
                </div>

                <div class="body-container front-body text-center">
                    <?php include('body.php'); ?>

                    <div class="row">
                        <div class="col-6">
                            <div class="front-label">
                                Front
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="back-label">
                                Back
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
