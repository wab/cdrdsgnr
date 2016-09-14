import Svgxhr from '../util/svgxhr';

const svg4everybody = require('svg4everybody/dist/svg4everybody');

const __svg__ = { // eslint-disable-line no-underscore-dangle
  path: '../../icons/*.svg',
  name: 'svg/icons_[hash].svg',
};
// will overwrite to var __svg__ = { filename: "svg/1466687804854.icons.svg" };

export default {
  init() {
    // JavaScript to be fired on all pages
    svg4everybody();
    new Svgxhr(__svg__).loadsvg();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(document).foundation();

    // Menu nav icons inject
    $('.link-home a').text('').prepend('<svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg><span class="hide-for-medium">Accueil</span>');
    $('.link-login a').prepend('<svg class="icon icon-power"><use xlink:href="#icon-power"></use></svg>');
    $('.link-signin a').prepend('<svg class="icon icon-key"><use xlink:href="#icon-key"></use></svg>');
  },
};
