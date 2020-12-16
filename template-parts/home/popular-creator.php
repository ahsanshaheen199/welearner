<?php 
    $poststeacher = new WP_Query([
        'post_type' => 'teachers',
        'posts_per_page'    => -1
    ]);

    if( $poststeacher->have_posts() ) :
?>

<div class="popular-creator">
    <div class="container">
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
                while( $poststeacher->have_posts() ) :
                    $poststeacher->the_post();
            ?>
            <div class="single-creator-item">
                <?php if( has_post_thumbnail() ): ?>
                    <div class="thumbnail">
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

    endif;