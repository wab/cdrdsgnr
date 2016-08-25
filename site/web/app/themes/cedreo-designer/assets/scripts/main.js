// import external dependencies
import 'jquery'
import 'foundation-sites/js/foundation.core';
import 'foundation-sites/js/foundation.util.mediaQuery';
import 'foundation-sites/js/foundation.responsiveToggle';

import 'foundation-sites/js/foundation.responsiveToggle';

const __svg__ = { path: '../sprite-svg/*.svg', name: './svg/icons_[hash].svg' }
// will overwrite to var __svg__ = { filename: "assets/svg/1466687804854.icons.svg" };
// require basic or custom sprite loader

import '../svg/cedreo-designer.svg';

// import local dependencies
import svgxhr from './util/svgxhr';
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';
import about_us from './routes/About';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  // Home page
  home,
  // About us page, note the change from about-us to about_us.
  about_us
};

// Load Events
$(document).ready(() => new Router(routes).loadEvents());
$(document).ready(() => new svgxhr(__svg__).loadsvg());
