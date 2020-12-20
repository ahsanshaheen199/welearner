<?php
    $welearner_popularcreator_per_page        = get_theme_mod('popularcreator_per_page','3');
    $welearner_popularcreator_order           = get_theme_mod('popularcreator_order','DESC');
    $welearner_popularcreator_orderby         = get_theme_mod('popularcreator_orderby','date');
    $welearner_popularcreator_section_title   = get_theme_mod('popularcreator_section_title','Our Popular Creator');
    $welearner_popularcreator_section_desc    = get_theme_mod('popularcreator_section_desc','45+ million people are already learning on Welearners');

    $welearner_popularcreator_arg = [
        'post_type'         => 'teachers',
        'posts_per_page'    => esc_attr($welearner_popularcreator_per_page),
        'order'             => $welearner_popularcreator_order,
        'orderby'           => $welearner_popularcreator_orderby
    ];
    
    $welearner_authors = new WP_Query($welearner_popularcreator_arg);

    if( $welearner_authors->have_posts() ) :
?>

<div class="popular-creator">
    <div data-bg-image="<?php echo esc_url(get_theme_file_uri('assets/images/round-shape.png')); ?>" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <?php if( !empty( $welearner_popularcreator_section_title ) ) : ?>
                        <h2><?php echo wp_kses_post($welearner_popularcreator_section_title); ?></h2>
                    <?php endif; ?>
                    <?php if( !empty( $welearner_popularcreator_section_title ) ) : ?>
                        <p><?php echo wp_kses_post($welearner_popularcreator_section_desc); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="popular-creator-slider">
            <?php 
                while( $welearner_authors->have_posts() ) :
                    $welearner_authors->the_post();
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