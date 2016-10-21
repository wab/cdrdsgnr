// import external dependencies
import 'jquery';

// Import npm dependencies
import 'svgxuse';
import 'foundation-sites/js/foundation.core';
import 'foundation-sites/js/foundation.util.mediaQuery';
import 'foundation-sites/js/foundation.responsiveToggle';
import 'foundation-sites/js/foundation.util.keyboard.js';
import 'foundation-sites/js/foundation.util.box.js';
import 'foundation-sites/js/foundation.util.nest.js';
import 'foundation-sites/js/foundation.util.triggers.js';
import 'foundation-sites/js/foundation.util.motion.js';
import 'foundation-sites/js/foundation.reveal.js';
import 'foundation-sites/js/foundation.dropdown.js';

// import local dependencies
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';
import aboutUs from './routes/About';
import galerie from './routes/Gallery';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  // Home page
  home,
  // About us page, note the change from about-us to aboutUs.
  aboutUs,
  galerie,
};

// Load Events
document.addEventListener('DOMContentLoaded', () => new Router(routes).loadEvents());
