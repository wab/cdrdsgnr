const svg4everybody = require('svg4everybody/dist/svg4everybody');
const __svg__ = { path: '../../icons/*.svg', name: 'svg/icons_[hash].svg' }
// will overwrite to var __svg__ = { filename: "svg/1466687804854.icons.svg" };

const pathsvg = '/app/themes/cedreo-designer/dist/';

import svgxhr from '../util/svgxhr';

export default {
  init() {
    // JavaScript to be fired on all pages
    svg4everybody();
    new svgxhr(__svg__, pathsvg).loadsvg();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(document).foundation();
    $('.link-home a').text('').append('<svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg><span class="hide-for-medium">Accueil</span>')
    $('.link-login a').append('<svg class="icon icon-power"><use xlink:href="#icon-power"></use></svg>')
    $('.link-signin a').append('<svg class="icon icon-key"><use xlink:href="#icon-key"></use></svg>')
  }
};
