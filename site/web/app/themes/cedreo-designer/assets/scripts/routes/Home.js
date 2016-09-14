import 'owl.carousel/dist/owl.carousel';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('.demonstration .owl-carousel').owlCarousel({
      items: 1,
      nav: false,
    });
  },
};
