<?php
get_header();
 ?>
    <div class="course-search-area">
        <div class="container">
            <div class="row">
            <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post(); 
                    ?>
                <div class="single-course-item">
                    <?php if( has_post_thumbnail() ) : ?>
                        <div class="course-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail();?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="course-content-body">
                        <div class="course-meta d-flex align-items-center justify-content-between">
                            <div class="topics">
                                <?php  
                                    $welearner_course_topics = get_the_terms(get_the_ID(),'course_topic'); 
                                    foreach($welearner_course_topics as $single_topic) :
                                        $weleaner_topic_bg_color = get_term_meta($single_topic->term_id,'_course_topic_bg_color',true);
                                        $weleaner_topic_color = get_term_meta($single_topic->term_id,'_course_topic_color',true);
                                        if( !empty($weleaner_topic_bg_color) && empty($weleaner_topic_color) ) {
                                            $weleaner_topic_bg = 'style="background-color:'.esc_attr($weleaner_topic_bg_color).';"';
                                        } elseif(!empty($weleaner_topic_bg_color) && !empty($weleaner_topic_color)) {
                                            $weleaner_topic_bg = 'style="background-color:'.esc_attr($weleaner_topic_bg_color).';color:'.esc_attr($weleaner_topic_color).';"';
                                        } elseif(empty($weleaner_topic_bg_color) && !empty($weleaner_topic_color)) {
                                            $weleaner_topic_bg = 'style="color:'.esc_attr($weleaner_topic_color).';"';
                                        }else {
                                            $weleaner_topic_bg = '';
                                        }    
                                ?>
                                    <a <?php echo wp_kses_post($weleaner_topic_bg); ?> href="<?php echo esc_url( get_term_link($single_topic) ); ?>"><?php echo esc_html($single_topic->name); ?></a>
                                <?php 
                                    endforeach;
                                ?>
                            </div>
                            <div class="ratings d-flex">
                                <?php
                                    echo welearner_course_rating_html(get_post_meta(get_the_ID(),'_welearner_course_avg_rating',true));
                                ?>
                            </div>
                        </div>
                        <h4 class="course-title">
                            <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                        </h4>
                        <div class="course-author d-flex align-items-center">
                            <?php
                                $welearner_course_author_id = (int)get_post_meta(get_the_ID(),'_welearner_course_author',true);
                                $welearner_course_author = get_post($welearner_course_author_id);
                                echo wp_kses_post(get_the_post_thumbnail($welearner_course_author->ID,'thumbnail'));
                            ?>
                            <h5><?php echo esc_html($welearner_course_author->post_title); ?></h5>
                        </div>
                    </div>
                    <div class="course-content-footer d-flex align-items-center justify-content-between">
                        <div class="course-price">
                            <?php if( get_post_meta(get_the_ID(),'_welearner_course_regular_price',true) ) : ?>
                                <del><?php echo welearner_currency();echo esc_html(get_post_meta(get_the_ID(),'_welearner_course_regular_price',true)); ?></del>
                            <?php endif; ?>
                            <?php if( get_post_meta(get_the_ID(),'_welearner_course_sale_price',true) ) : ?>
                                <span><?php echo welearner_currency();echo esc_html(get_post_meta(get_the_ID(),'_welearner_course_sale_price',true)); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="preview-button">
                            <a href="#" class="welearner-btn"><?php _e('Watch Preview','welearner'); ?></a>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            ?>
            </div>
        </div>
    </div>
<?php
get_footer();