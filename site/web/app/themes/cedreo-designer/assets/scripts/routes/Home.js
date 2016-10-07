/* global ga */
import 'owl.carousel/dist/owl.carousel';
import YouTubePlayer from 'youtube-player';

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
    const videoId = $('.video-wrapper').attr('data-id');
    console.log(videoId);
    /* eslint-disable no-unused-vars, new-cap */
    const player = YouTubePlayer('video-player', {
      videoId,
    });
    /* eslint-enable no-unused-vars */
  },
};
