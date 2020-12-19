import { tns } from "../../node_modules/tiny-slider/src/tiny-slider"


if( jQuery('.popular-creator-slider').length ) {
  var slider = tns({
      container: '.popular-creator-slider',
      items: 3,
      gutter: 30,
      slideBy: "page",
      autoplay: true,
      autoplayButton: false,
      autoplayButtonOutput: false,
      mouseDrag: true,
      controls: false,
      nav: false,
      responsive: {
          575: {
            items: 1
          },
          768: {
            items: 2
          },
          991: {
              items: 3
          }
      }
  });
}

(function($){
  $(".write-review-btn").on("click",function(e){
    $(".course-rating-form").toggle();
    e.preventDefault();
  });
  
  $(".course-rating-form").on("submit",function(e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: welearner_obj.ajax_url,
      data: {
        action: 'weleaner_add_course_review',
        user_id: $(this).find('input[name=user_id').val(),
        course_rating: $(this).find('input[name=course_rating').val(),
        course_review: $(this).find('textarea[name=review').val(),
        course_id: $(this).find('input[name=course_id').val(),
      },
      success: function(response) {
        location.reload();
      }
    });
  });
  
  $(".course-rating-form").find(".course-ratings i").each(function(index,item){
    $(item).on("click",function(){
      $(this).prevAll().removeClass('dashicons-star-empty');
      $(this).prevAll().addClass('dashicons-star-filled');
      $(this).removeClass('dashicons-star-empty');
      $(this).addClass('dashicons-star-filled');
      $(this).siblings('input[name=course_rating]').val($(this).attr('data-value'));
    });
  });
})(jQuery);