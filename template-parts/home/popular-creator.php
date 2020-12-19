<?php 
    $welearner_author = new WP_Query([
        'post_type' => 'teachers',
        'posts_per_page'    => -1
    ]);

    if( $welearner_author->have_posts() ) :
?>

<div class="popular-creator">
    <div data-bg-image="<?php echo esc_url(get_theme_file_uri('assets/images/round-shape.png')); ?>" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2>Our Popular <br /> Creator</h2>
                    <p>45+ million people are already learning on Welearners</p>
                </div>
            </div>
        </div>
        <div class="popular-creator-slider">
            <?php 
                while( $welearner_author->have_posts() ) :
                    $welearner_author->the_post();
                    $welearner_author_thumb_bg_color = get_post_meta(get_the_ID(),'_welearner_teacher_thumbnail_bg_color',true);
                    if( !empty($welearner_author_thumb_bg_color) ) {
                        $welearner_author_thumb_bg = 'style="background-color:'.esc_attr($welearner_author_thumb_bg_color).'"';
                    } else {
                        $welearner_author_thumb_bg = '';
                    }
            ?>
            <div class="single-creator-item">
                <?php if( has_post_thumbnail() ): ?>
                    <div <?php echo wp_kses_post($welearner_author_thumb_bg); ?> class="thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <div class="overlay">
                                <div class="social-icons d-flex justify-content-center">
                                    <?php if( get_post_meta(get_the_ID(),'_welearner_teacher_fb_url',true) ) : ?>
                                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_welearner_teacher_fb_url',true)); ?>"><i class="dashicons dashicons-facebook-alt"></i></a>
                                    <?php endif; ?>
                                    <?php if( get_post_meta(get_the_ID(),'_welearner_teacher_linkedin_url',true) ) : ?>
                                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_welearner_teacher_linkedin_url',true)); ?>"><i class="dashicons dashicons-linkedin"></i></a>
                                    <?php endif; ?>
                                    <?php if( get_post_meta(get_the_ID(),'_welearner_teacher_linkedin_url',true) ) : ?>
                                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_welearner_teacher_twitter_url',true)); ?>"><i class="dashicons dashicons-twitter"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                <?php endif; ?>
                <div class="content-body">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php 
                        if( get_post_meta(get_the_ID(),'_welearner_teacher_designation',true) ) {
                            echo wpautop(get_post_meta(get_the_ID(),'_welearner_teacher_designation',true));
                        }
                    ?>
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
<div class="weleaner-alert">
   <h2><?php _e('No Course Author Found','welearner') ?></h2>     
</div>
<?php
    endif;