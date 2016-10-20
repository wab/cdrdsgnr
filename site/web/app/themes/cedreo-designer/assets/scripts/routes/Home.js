/* global ga */
import YouTubePlayer from 'youtube-player';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    // video de démonstartion
    const videoId = $('.video-wrapper').attr('data-id');
    const player = YouTubePlayer('video-player', {
      videoId,
    });
  },
};
