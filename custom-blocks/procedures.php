<?php
/**
 * Anatomy Block Template.
 *
 */
?>

<script>
    function createPopupWin(pageURL, pageTitle,
                            popupWinWidth, popupWinHeight) {
        var left = (screen.width - popupWinWidth) / 2;
        var top = (screen.height - popupWinHeight) / 2;

        console.log(left);
        console.log(top);
        console.log(screen.width);
        console.log(screen.height);

        var myWindow = window.open(pageURL, pageTitle,
            'resizable=yes, width=' + popupWinWidth
            + ', height=' + popupWinHeight + ', top='
            + top + ', left=' + left);
    }
</script>
<div class="row">
<?php
$term = get_field('anatomy_area');
if( $term ):
    $args = array(
        'showposts' => -1,
        'post_type'              => array( 'ppa-cpt' ),

        'tax_query' => array(
            array(
                'taxonomy'  => 'anatomy_area',
                'terms'     => array( $term->slug ),
                'field'     => 'slug'
            )
        )
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post(); ?>
                <div class="col-12 col-lg-6">
                    <div class="anatomy-list-card">
                        <h2 class="anatomy-list-card-title"><?php the_title(); ?></h2>

                        <div class="anatomy-list-card-view-as">
                            View As
                        </div>

                        <div class="anatomy-list-card-options">
                            <?php if(get_field('pdf_attachment', get_the_ID())) {
                                $file = get_field('pdf_attachment', get_the_ID()); ?>
                                <div class="anatomy-list-card-link anatomy-list-card-pdf">
                                    <a href="<?php echo $file['url'] ?>" target="_blank"> <img src="/wp-content/plugins/patient-procedures-anatomy/img/icon-pdf.svg"> PDF</a>
                                </div>
                            <?php } ?>

                            <?php if(get_field('video_key', get_the_ID())) { ?>
                                <div class="anatomy-list-card-link anatomy-list-card-video">
                                    <a onclick="createPopupWin('<?php echo bloginfo('url'); ?>/wp-content/plugins/patient-procedures-anatomy/video.php#<?php the_field('video_key', get_the_ID()); ?>', '', 800, 600);"><img src="/wp-content/plugins/patient-procedures-anatomy/img/icon-video.svg"> View Video</a>
                                </div>
                            <?php } ?>

                            <?php if(get_field('video_testimonial', get_the_ID())) { ?>
                                <div class="anatomy-list-card-link anatomy-list-card-video-testimonial js-modal-btn" data-video-id="<?php the_field('video_testimonial', get_the_ID()); ?>">
                                    <img src="/wp-content/plugins/patient-procedures-anatomy/img/icon-video-testimonial.svg"> Video Testimonial
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <?php }
    }

    wp_reset_postdata();

endif; ?>
</div>
