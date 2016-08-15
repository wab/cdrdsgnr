var svg4everybody = require('svg4everybody/dist/svg4everybody');

export default {
  init() {
    // JavaScript to be fired on all pages
    $(document).foundation();
    $('.link-home a').text('').append('<span class="hide-for-medium">Accueil</span>')
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    svg4everybody();
  }
};
