<?php
    $welearner_blogpost_per_page        = get_theme_mod('blogpost_per_page','3');
    $welearner_blogpost_order           = get_theme_mod('blogpost_order','DESC');
    $welearner_blogpost_orderby         = get_theme_mod('blogpost_orderby','date');
    $welearner_blogpost_section_title   = get_theme_mod('blogpost_section_title','Learning Support features');
    $welearner_blogpost_category        = get_theme_mod('blogpost_category','');

    $welearner_blogposts_arg = [
        'post_type'         => 'post',
        'posts_per_page'    => esc_attr($welearner_blogpost_per_page),
        'order'             => $welearner_blogpost_order,
        'orderby'           => $welearner_blogpost_orderby
    ];

    if( !empty($welearner_blogpost_category) ) {
        $welearner_blogposts_arg['category__in'] = $welearner_blogpost_category;
    }

    $welearner_latestposts = new WP_Query($welearner_blogposts_arg);

    if( $welearner_latestposts->have_posts() ) :
?>
<div data-bg-image="<?php echo esc_url(get_theme_file_uri('assets/images/blog-bg-shape.png')); ?>" class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2><?php echo wp_kses_post($welearner_blogpost_section_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                while( $welearner_latestposts->have_posts() ) :
                    $welearner_latestposts->the_post();
            ?>
            <div class="col-lg-4 col-sm-6">
                <div class="single-blog-post">
                    <?php if( has_post_thumbnail() ) : ?>
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full',['class'  => 'img-responsive']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="content-body">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('read blog','welearner'); ?></a>
                    </div>
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
   <h2><?php _e('No Blog Post Found','welearner') ?></h2>     
</div>
<?php
    endif;