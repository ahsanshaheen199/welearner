<?php
    $welearner_testimonial_per_page        = get_theme_mod('testimonial_per_page','3');
    $welearner_testimonial_order           = get_theme_mod('testimonial_order','DESC');
    $welearner_testimonial_orderby         = get_theme_mod('testimonial_orderby','date');
    $welearner_testimonial_section_title   = get_theme_mod('testimonial_section_title','What our students have to say');
    $welearner_testimonial_section_desc    = get_theme_mod('testimonial_section_desc','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel');

    $welearner_testimonial_arg = [
        'post_type'         => 'testimonials',
        'posts_per_page'    => esc_attr($welearner_testimonial_per_page),
        'order'             => $welearner_testimonial_order,
        'orderby'           => $welearner_testimonial_orderby
    ];

    $welearner_testimonials = new WP_Query($welearner_testimonial_arg);
 
if ( $welearner_testimonials->have_posts() ): 
?>
<div class="testimonial-area">
    <div class="container">
        <div class="row align-items-center justify-content-between mb-90">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <?php if( !empty( $welearner_testimonial_section_title ) ) : ?>
                        <h2 class="mb-0"><?php echo wp_kses_post($welearner_testimonial_section_title); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div data-bg-image="<?php echo esc_url(get_theme_file_uri('assets/images/testimonial-icon.png')); ?>" class="testimonial-section-description">
                    <?php if( !empty( $welearner_testimonial_section_desc ) ) : ?>
                        <p class="mb-0"><?php echo wp_kses_post($welearner_testimonial_section_desc); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="testimonial-slider">
            <?php 
                while( $welearner_testimonials->have_posts() ) :
                    $welearner_testimonials->the_post();
            ?>
                <div class="single-testimonial-item">
                    <div class="reviewer-thumb">
                        <?php the_post_thumbnail('thumbnail') ?>
                    </div>
                    <div class="reviewer-info">
                        <h3><?php the_title(); ?></h3>
                        <?php 
                            if( get_post_meta(get_the_ID(),'_welearner_reviewer_designation',true) ) :
                        ?>
                            <span><?php echo esc_html( get_post_meta(get_the_ID(),'_welearner_reviewer_designation',true) ); ?></span>
                        <?php 
                            endif;
                        ?>
                    </div>
                    <div class="review-content">
                        <?php 
                            if( get_post_meta(get_the_ID(),'_welearner_testimonial_desc',true) ) :
                        ?>
                        <p><?php echo esc_html( get_post_meta(get_the_ID(),'_welearner_testimonial_desc',true) ); ?></p>
                        <?php 
                            endif;

                            if( get_post_meta(get_the_ID(),'_welearner_testimonial_subdesc',true) ) :
                        ?>
                        <p><?php echo esc_html( get_post_meta(get_the_ID(),'_welearner_testimonial_subdesc',true) ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php 
                endwhile; 
                wp_reset_query(); 
            ?>
        </div>
    </div>
</div>
<?php 
    else:
?>
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="welearner-alert alert alert-info">
                    <h2><?php _e('No Testimonial Found','welearner') ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>