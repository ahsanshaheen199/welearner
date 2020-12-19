<?php

add_action('wp_ajax_weleaner_add_course_review','weleaner_add_course_review');

function weleaner_add_course_review() {
    $user_id = $_POST['user_id'];
    $user = get_user_by( 'id', $user_id );
    $commentdata = [
        'comment_post_ID'      => $_POST['course_id'],
        'comment_author'       => $user->display_name,     
        'comment_author_email' => $user->user_email, 
        'comment_author_url'   => '',  
        'comment_content'      => sanitize_text_field($_POST['course_review']), 
        'comment_type'         => 'course_review',                    
        'comment_parent'       => 0,                    
        'user_id'              => $user_id,
    ];
     
    // Insert new comment and get the comment ID.
    $comment_id = wp_new_comment( $commentdata );

    if ( $comment_id ) {
		add_comment_meta( $comment_id, '_course_rating', $_POST['course_rating'] );
    }
    
    wp_send_json_success($comment_id);
    wp_die();
}

add_action('welearner_get_course_reviews','welearner_get_course_reviews_func');
function welearner_get_course_reviews_func() {
    global $wpdb;
    $reviews = $wpdb->get_results("select {$wpdb->comments}.comment_ID, 
        {$wpdb->comments}.comment_post_ID, 
        {$wpdb->comments}.comment_author, 
        {$wpdb->comments}.comment_author_email, 
        {$wpdb->comments}.comment_date, 
        {$wpdb->comments}.comment_content, 
        {$wpdb->comments}.user_id, 
        {$wpdb->commentmeta}.meta_value as rating
        from {$wpdb->comments}
        INNER JOIN {$wpdb->commentmeta} 
        ON {$wpdb->comments}.comment_ID = {$wpdb->commentmeta}.comment_id"
        );
    ?>
    <div class="single-course-reviews mt-5">
        <?php foreach( $reviews as $review ) : ?>
        <div class="single-review-item d-flex align-items-start mb-4">
            <div class="user-thumb me-4">
                <?php echo get_avatar($review->user_id,'60'); ?>
            </div>
            <div class="review-info">
                <?php echo welearner_course_rating_html($review->rating); ?>
                <p><?php echo wp_kses_post($review->comment_content); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php
}


function welearner_course_rating_html($value = 5) {
    if( $value == '1' ) {
        return '<i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i>';
    } elseif( $value == '2' ) {
        return '<i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i>';
    } elseif( $value == '3' ) {
        return '<i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i>';
    } elseif( $value == '4' ) {
        return '<i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-empty"></i>';
    } elseif( $value == '5' ) {
        return '<i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i><i class="dashicons dashicons-star-filled"></i>';
    } else {
        return '<i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i><i class="dashicons dashicons-star-empty"></i>';
    }
}

function welearner_course_avarage_rating($course_id = 0) {
    global $wpdb;

    $rating = $wpdb->get_row("select COUNT(meta_value) as rating_count, SUM(meta_value) as rating_sum 
        from {$wpdb->comments}
        INNER JOIN {$wpdb->commentmeta} 
        ON {$wpdb->comments}.comment_ID = {$wpdb->commentmeta}.comment_id 
        WHERE {$wpdb->comments}.comment_post_ID = {$course_id} 
        AND {$wpdb->comments}.comment_type = 'course_review'
        AND meta_key = '_course_rating' ;"
    );

    $rating_avg = 0;

    if( $rating->rating_count ) {
        $rating_avg = floor($rating->rating_sum / $rating->rating_count);
    }

    return $rating_avg;
}