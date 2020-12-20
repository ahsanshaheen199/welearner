<div data-bg-image="<?php echo esc_url( get_theme_file_uri('assets/images/hero-banner.jpg') ); ?>" class="hero-area">
    <div class="container">
        <div class="banner-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-content">
                        <h2>Discover a new way of learning </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque. </p>
                    </div>
                    <div class="course-search-form">
                        <form action="<?php echo site_url('/'); ?>" method="get">
                            <input class="form-control" type="text" name="s" placeholder="<?php esc_attr_e('What do you want to learn?','welearner'); ?>"/>
                            <input type="hidden" name="post_type" value="courses" />
                            <input type="submit" alt="Search" value="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <img src="<?php echo esc_url( get_theme_file_uri('assets/images/person.png') ); ?>" alt="" class="person-img">
        </div>
    </div>
</div>