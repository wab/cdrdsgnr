// import external dependencies
import 'jquery';

// Import npm dependencies
import 'svgxuse';
import 'foundation-sites/js/foundation.core';
import 'foundation-sites/js/foundation.util.mediaQuery';
import 'foundation-sites/js/foundation.util.keyboard';
import 'foundation-sites/js/foundation.util.box';
import 'foundation-sites/js/foundation.util.nest';
import 'foundation-sites/js/foundation.util.triggers';
import 'foundation-sites/js/foundation.util.motion';
import 'foundation-sites/js/foundation.util.timerAndImageLoader';
import 'foundation-sites/js/foundation.responsiveToggle';
import 'foundation-sites/js/foundation.dropdown';
import 'foundation-sites/js/foundation.reveal';
import 'foundation-sites/js/foundation.sticky';
import 'foundation-sites/js/foundation.accordionMenu';
import 'foundation-sites/js/foundation.magellan';

// import local dependencies
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';
import aboutUs from './routes/About';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  // Home page
  home,
  // About us page, note the change from about-us to aboutUs.
  aboutUs,
};

// Load Events
document.addEventListener('DOMContentLoaded', () => new Router(routes).loadEvents());
