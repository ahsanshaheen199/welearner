<?php
    $welearner_testimonials = new WP_Query([
        'post_type'     => 'testimonials',
        'posts_per_page'=> '-1',
    ]);
 
if ( $welearner_testimonials->have_posts() ): 
?>
<div class="testimonial-area">
    <div class="container">
        <div class="row align-items-center justify-content-between mb-90">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <h2 class="mb-0">What our students <br />have to say</h2>
                </div>
            </div>
            <div class="col-lg-5 text-right">
                <div data-bg-image="<?php echo esc_url(get_theme_file_uri('assets/images/testimonial-icon.png')); ?>" class="testimonial-section-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel</p>
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