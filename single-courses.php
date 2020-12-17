<?php
get_header();
?>
    <main id="primary" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-header">
                            <h1 class="text-center"><?php the_title(); ?></h1>
                            <?php 
                                if( has_post_thumbnail() ) {
                                    the_post_thumbnail('full',['class' => 'mb-4']);
                                }
                            ?>
                        </div>
                        <div class="entry-content mb-60">
                            <?php 
                                the_content();
                                wp_link_pages(
                                    array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'welearner' ),
                                        'after'  => '</div>',
                                    )
                                );
                            ?>
                            <a href="#" class="welearner-btn write-review-btn"><?php _e('Write a review','welearner'); ?></a>
                            <form class="course-rating-form mt-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <textarea  class="form-control" name="review" placeholder="<?php esc_attr_e('Review','welearner'); ?>">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="course-ratings">
                                                <i data-value='1' class="dashicons dashicons-star-empty"></i>
                                                <i data-value='2' class="dashicons dashicons-star-empty"></i>
                                                <i data-value='3' class="dashicons dashicons-star-empty"></i>
                                                <i data-value='4' class="dashicons dashicons-star-empty"></i>
                                                <i data-value='5' class="dashicons dashicons-star-empty"></i>
                                                <input type="hidden" name="course_rating" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main><!-- #main -->
<?php
get_footer();