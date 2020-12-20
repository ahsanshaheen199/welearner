<?php
    $welearner_popular_topics_section_title   = get_theme_mod('popular_topics_section_title','Popular Topics');
    $welearner_popular_topics_btn_text        = get_theme_mod('popular_topics_btn_text','Show All');
    $welearner_popular_topics_btn_link        = get_theme_mod('popular_topics_btn_link','#');
    $weleaner_popular_topics_count            = get_theme_mod('popular_topics_count','8');

    $welearner_topics = get_terms([
        'taxonomy' => 'course_topic',
        'hide_empty' => false,
    ]);
 
if ( ! empty( $welearner_topics ) && ! is_wp_error( $welearner_topics )): ?>
<div class="popular-topics">
    <div class="container">
        <div class="row align-items-center mb-60">
            <div class="col-6">
                <div class="section-title mb-0">
                    <?php if( $welearner_popular_topics_section_title  ):  ?>
                        <h2 class="mb-0"><?php echo esc_html($welearner_popular_topics_section_title); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 text-end">
                <?php if( !empty( $welearner_popular_topics_btn_text ) ): ?>
                    <a href="<?php echo esc_html($welearner_popular_topics_btn_link); ?>" class="welearner-btn"><?php echo esc_html($welearner_popular_topics_btn_text); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php
                $welearner_count = 0;
                foreach( $welearner_topics as $topic ) :
                    if( $welearner_count != $weleaner_popular_topics_count  ) :
            ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-topics-item">
                    <?php 
                        if( get_term_meta($topic->term_id,'_course_topic_thumbnail_id',true) ) :
                            $weleaner_topic_icon_bg_color = get_term_meta($topic->term_id,'_course_topic_bg_color',true);
                            if( !empty($weleaner_topic_icon_bg_color) ) {
                                $weleaner_topic_icon_bg = 'style="background-color:'.esc_attr($weleaner_topic_icon_bg_color).'"';
                            } else {
                                $weleaner_topic_icon_bg = '';
                            }
                    ?>
                    <div <?php echo wp_kses_post($weleaner_topic_icon_bg); ?> class="icon">
                        <?php echo wp_get_attachment_image(get_term_meta($topic->term_id,'_course_topic_thumbnail_id',true)); ?>
                    </div>
                    <?php endif; ?>
                    <h4 class="topic-title mb-0">
                        <a href="<?php echo esc_url( get_term_link( $topic ) ); ?>"><?php echo esc_html($topic->name); ?></a>
                    </h4>
                </div>
            </div>
            <?php 
                    endif;
                    $welearner_count++;
                endforeach;
            ?>
        </div>
    </div>
</div>
<?php 
    else:
?>
<div class="weleaner-alert">
   <h2><?php _e('No Course Topic Found','welearner') ?></h2>     
</div>
<?php endif; ?>