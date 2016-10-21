/* global google, Foundation, sr */
import ScrollReveal from 'scrollreveal';

window.sr = ScrollReveal();

export default {
  init() {
    // JavaScript to be fired on all pages

    // Add class to <html> if ScrollReveal is supported
    if (sr.isSupported()) {
      document.documentElement.classList.add('sr');
    }

    // navigation mobile
    $('.menu-link').click(() => {
      $('.menu-wrapper').toggleClass('opened');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(document).foundation();

    // animation scroll reveal

    sr.reveal('.scrollreveal', {
      afterReveal: (domEl) => {
        domEl.classList.add('animated');
      },
    });

    if (document.body.contains(document.querySelector('.page-contenu'))) {
      sr.reveal('.page-contenu > *');
    }

    // Menu nav icons inject
    $('.link-login a').prepend('<svg class="icon icon-key"><use xlink:href="#icon-key"></use></svg>');

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
