<?php
    $welearner_topics = get_terms([
        'taxonomy' => 'course_topic',
        'hide_empty' => false,
    ]);
 
if ( ! empty( $welearner_topics ) && ! is_wp_error( $welearner_topics )): ?>
<div class="popular-creator">
    <div class="container">
        <div class="row align-items-center mb-60">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <h2 class="mb-0">Popular Topics</h2>
                </div>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="#" class="welearner-btn">Show All</a>
            </div>
        </div>
        <div class="row">
            <?php 
                foreach( $welearner_topics as $topic ) :
            ?>
            <div class="col-lg-3">
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
            <?php endforeach; ?>
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