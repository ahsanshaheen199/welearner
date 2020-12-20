<?php
    $welearner_toprated_course_per_page        = get_theme_mod('toprated_course_per_page','3');
    $welearner_toprated_course_order           = get_theme_mod('toprated_course_order','DESC');
    $welearner_toprated_course_orderby         = get_theme_mod('toprated_course_orderby','date');
    $welearner_toprated_course_section_title   = get_theme_mod('toprated_course_section_title','Top rated');
    $welearner_toprated_course_category        = get_theme_mod('toprated_course_category','');
    $welearner_toprated_course_btn_text        = get_theme_mod('toprated_course_btn_text','Show All');
    $welearner_toprated_course_btn_link        = get_theme_mod('toprated_course_btn_link','#');

    $welearner_toprated_courses_arg = [
        'post_type'         => 'courses',
        'posts_per_page'    => esc_attr($welearner_toprated_course_per_page),
        'order'             => $welearner_toprated_course_order,
        'orderby'           => $welearner_toprated_course_orderby,
        'meta_key'          => '_welearner_course_avg_rating',
        'orderby'           => 'meta_value_num',
    ];

    if( !empty($welearner_toprated_course_category) ) {
        $welearner_toprated_courses_arg['tax_query'] = [
            [
                'taxonomy' => 'course_topic',
                'field'    => 'term_id',
                'terms'    => $welearner_toprated_course_category
            ]
        ];
    }

    $welearner_courses = new WP_Query($welearner_toprated_courses_arg);
 
if ( $welearner_courses->have_posts() ): 
?>
<div class="toprated-courses">
    <div class="container">
        <div class="row align-items-center mb-60">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <?php if( $welearner_toprated_course_section_title  ):  ?>
                        <h2 class="mb-0"><?php echo esc_html($welearner_toprated_course_section_title); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 text-lg-end">
                <?php if( !empty( $welearner_toprated_course_btn_text ) ): ?>
                    <a href="<?php echo esc_html($welearner_toprated_course_btn_link); ?>" class="welearner-btn"><?php echo esc_html($welearner_toprated_course_btn_text); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                while( $welearner_courses->have_posts() ) :
                    $welearner_courses->the_post();
            ?>
            <div class="col-lg-4 col-sm-6">
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
            </div>
            <?php 
                endwhile; wp_reset_query(); 
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