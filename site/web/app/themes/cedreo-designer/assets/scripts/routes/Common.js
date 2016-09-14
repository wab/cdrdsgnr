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
  },
};
