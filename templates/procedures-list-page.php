<?php
/*
 * Template Name: Procedures List Page
 */?>
<?php get_header(); ?>

<section class="anatomy-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="anatomy-breadcrumbs-content">
                    <?php if (function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="anatomy-list-page-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>