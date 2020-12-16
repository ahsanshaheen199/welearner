<?php
    $latestposts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page'    => 3
    ]);

    if( $latestposts->have_posts() ) :
?>
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Learning <br /> Support features</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                while( $latestposts->have_posts() ) :
                    $latestposts->the_post();
            ?>
            <div class="col-lg-4 col-sm-6">
                <div class="single-blog-post">
                    <?php if( has_post_thumbnail() ) : ?>
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('',['class'  => 'img-responsive']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="content-body">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <a href="<?php the_permalink(); ?>" class="readmore">read blog</a>
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
    endif;