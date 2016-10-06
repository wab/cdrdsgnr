/* global Foundation */
import YouTubePlayer from 'youtube-player';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(document).foundation();
    const menuelem = $('.main--navigation--menu');
    /* eslint-disable no-unused-vars */
    const menu = new Foundation.DropdownMenu(menuelem);
    /* eslint-enable no-unused-vars */

    // Menu nav icons inject
    $('.link-home a').text('').prepend('<svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg><span class="hide-for-medium">Accueil</span>');
    $('.link-login a').prepend('<svg class="icon icon-power"><use xlink:href="#icon-power"></use></svg>');
    $('.link-signin a').prepend('<svg class="icon icon-key"><use xlink:href="#icon-key"></use></svg>');

    // youtube reveal
    const player = YouTubePlayer('video-player'); // eslint-disable-line new-cap
    const revealVideo = $('#reveal-video');

    $('.open-video').on('click', function playVideo(e) {
      e.preventDefault();
      const video = $(this).attr('data-video');
      const title = $(this).attr('data-title');
      console.log(video, title);
      // ga('send', 'event', 'videos', `lecture vidéo ${title}`);
      player.loadVideoById(video);
      revealVideo.foundation('open');
      player.playVideo();
    });

    $(document).on('closed.zf.reveal', () => {
      player
        .stopVideo()
        .then(() => {

        });
    });
  },
};
