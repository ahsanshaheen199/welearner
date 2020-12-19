<?php
/**
* Template Name: Welearner Home Page
*
*/

get_header();

    get_template_part('template-parts/home/popular-topics');
    get_template_part('template-parts/home/tranding-course');
    get_template_part('template-parts/home/toprated-course');
    get_template_part('template-parts/home/testimonials');
    get_template_part('template-parts/home/popular-creator');
    get_template_part('template-parts/home/latest-blog');

get_footer();