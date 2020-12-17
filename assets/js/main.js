import { tns } from "../../node_modules/tiny-slider/src/tiny-slider"


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

jQuery(".write-review-btn").on("click",function(e){
  jQuery(".course-rating-form").toggle();
  e.preventDefault();
});

jQuery(".course-rating-form").on("submit",function() {

});

jQuery(".course-rating-form").find(".course-ratings i").each(function(index,item){
  jQuery(item).on("click",function(){
    jQuery(this).prevAll().removeClass('dashicons-star-empty');
    jQuery(this).prevAll().addClass('dashicons-star-filled');
    jQuery(this).removeClass('dashicons-star-empty');
    jQuery(this).addClass('dashicons-star-filled');
    jQuery(this).siblings('input[name=course_rating]').val(jQuery(this).attr('data-value'));
  });
});