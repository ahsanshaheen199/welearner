<?php 
    $weleaner_hero_section_person_img = get_theme_mod('hero_section_person_img','');
    $weleaner_hero_section_bg_img = get_theme_mod('hero_section_bg_img','');
    $welearner_hero_section_title = get_theme_mod('hero_section_title','Discover a new way of learning');
    $welearner_hero_section_desc = get_theme_mod('hero_section_desc','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque. ');

    if( ! empty($weleaner_hero_section_bg_img) ) {
        $weleaner_hero_section_bg_img_url = $weleaner_hero_section_bg_img;
    } else {
        $weleaner_hero_section_bg_img_url = get_theme_file_uri('assets/images/hero-banner.jpg');
    }
?>

<div data-bg-image="<?php echo esc_url( $weleaner_hero_section_bg_img_url ); ?>" class="hero-area">
    <div class="container">
        <div class="banner-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-content">
                        <?php 
                            if( !empty( $welearner_hero_section_title ) ) :
                        ?>
                            <h2><?php echo wp_kses_post($welearner_hero_section_title); ?></h2>
                        <?php 
                            endif;
                        ?>
                        <?php 
                            if( !empty( $welearner_hero_section_desc ) ) :
                        ?>
                            <p><?php echo wp_kses_post($welearner_hero_section_desc); ?></p>
                        <?php 
                            endif;
                        ?>
                        <p></p>
                    </div>
                    <div class="course-search-form">
                        <form action="<?php echo site_url('/'); ?>" method="get">
                            <input class="form-control" type="text" name="s" placeholder="<?php esc_attr_e('What do you want to learn?','welearner'); ?>"/>
                            <input type="hidden" name="post_type" value="courses" />
                            <input type="submit" alt="Search" value="<?php esc_attr_e('Search','welearner'); ?>" />
                        </form>
                    </div>
                </div>
            </div>
            <?php
                if( !empty( $weleaner_hero_section_person_img ) ) :
            ?>
                <img src="<?php echo esc_url( $weleaner_hero_section_person_img ); ?>" alt="<?php esc_attr_e('Person','welearner') ?>" class="person-img">
            <?php 
                endif;
            ?>
        </div>
    </div>
</div>