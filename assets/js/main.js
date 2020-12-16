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