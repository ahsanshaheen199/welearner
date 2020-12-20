<?php 
    $welearner_section1_cta_title       = get_theme_mod('section1_cta_title','Become an instructor');
    $welearner_section1_cta_desc        = get_theme_mod('section1_cta_desc','Get unlimited access to 4,000+ of We Learner’s top courses for your team.');
    $welearner_section1_cta_btn_text    = get_theme_mod('section1_cta_btn_text','Get Started');
    $welearner_section1_cta_btn_link    = get_theme_mod('section1_cta_btn_link','#');
    $welearner_section1_cta_bg_color    = get_theme_mod('section1_cta_bg_color','#FFE2E2');
    $welearner_section2_cta_title       = get_theme_mod('section2_cta_title','Become an instructor');
    $welearner_section2_cta_desc        = get_theme_mod('section2_cta_desc','Get unlimited access to 4,000+ of We Learner’s top courses for your team.');
    $welearner_section2_cta_btn_text    = get_theme_mod('section2_cta_btn_text','Get Started');
    $welearner_section2_cta_btn_link    = get_theme_mod('section2_cta_btn_link','#');
    $welearner_section2_cta_bg_color    = get_theme_mod('section2_cta_bg_color','#FEE5BD');
?>
<div class="cta-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div style="background-color:<?php echo esc_attr($welearner_section1_cta_bg_color); ?>" class="single-cta">
                    <?php
                        if( !empty( $welearner_section1_cta_title ) ) :
                    ?>
                        <h2><?php echo esc_html($welearner_section1_cta_title); ?></h2>
                    <?php 
                        endif;

                        if( !empty( $welearner_section1_cta_desc  ) ) :
                    ?>
                        <p><?php echo esc_html($welearner_section1_cta_desc); ?></p>
                    <?php endif; ?>
                    <div class="cta-btn-wrapper">
                        <?php
                            if( !empty( $welearner_section1_cta_btn_text  ) ) :
                        ?>
                            <a href="<?php echo esc_url($welearner_section1_cta_btn_link); ?>" class="cta-btn btn"><?php echo esc_html($welearner_section1_cta_btn_text); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background-color:<?php echo esc_attr($welearner_section2_cta_bg_color); ?>" class="single-cta">
                    <?php
                        if( !empty( $welearner_section2_cta_title ) ) :
                    ?>
                        <h2><?php echo esc_html($welearner_section2_cta_title); ?></h2>
                    <?php 
                        endif;

                        if( !empty( $welearner_section2_cta_desc  ) ) :
                    ?>
                        <p><?php echo esc_html($welearner_section2_cta_desc); ?></p>
                    <?php endif; ?>
                    <div class="cta-btn-wrapper">
                        <?php
                            if( !empty( $welearner_section2_cta_btn_text  ) ) :
                        ?>
                            <a href="<?php echo esc_url($welearner_section2_cta_btn_link); ?>" class="cta-btn btn"><?php echo esc_html($welearner_section2_cta_btn_text); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>