/* global Foundation */
import ScrollReveal from 'scrollreveal';

export default {
  init() {
    // JavaScript to be fired on all pages
    window.sr = ScrollReveal().reveal('.scrollreveal');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(document).foundation();

    // navigation  desktop
    const menuelem = $('.main--navigation--menu');
    /* eslint-disable no-unused-vars */
    const menu = new Foundation.DropdownMenu(menuelem);
    /* eslint-enable no-unused-vars */

    function preventLink(event) {
      event.preventDefault();
    }

    // prevent level menu item from linking
    $('.navigation-desktop .is-dropdown-submenu-parent > a').on('click', preventLink);

    // navigation mobile
    $('.menu-link').click(() => {
      $('.menu-wrapper').toggleClass('opened');
    });

    // Menu nav icons inject
    $('.link-signin a').prepend('<svg class="icon icon-key"><use xlink:href="#icon-key"></use></svg>');

    // Scroll animation speed
    const speed = 200;
    // Cashing objects
    const $root = $('html, body');
    const $selector = $('a[href*="#"]:not([href="#"])');

    $selector.on('click', function scroll(event) {
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
          location.hostname === this.hostname) {
        // Prevent default link behavior
        event.preventDefault();

        // Store target object
        let target = $(this.hash);
        target = target.length ? target : $(`[name='${target.slice(1)}`);

        // Animate scroll
        if (target.length) {
          $root.animate({
            scrollTop: target.offset().top,
          }, speed, () => {
            // Update URL witch correct hash
            window.location.hash = target.selector;
          });
        }
      }
    });
  },
};
