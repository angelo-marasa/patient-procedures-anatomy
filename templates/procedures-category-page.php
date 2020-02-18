<?php
/*
 * Template Name: Procedures Category Page
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
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php

if( have_rows('ppa_additional_information') ):
    while ( have_rows('ppa_additional_information') ) : the_row();?>
        <?php
        $link = get_sub_field('information_item');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    <?php endwhile;
endif;

?>

<?php get_footer(); ?>