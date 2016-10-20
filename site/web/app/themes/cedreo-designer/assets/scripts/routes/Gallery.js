/* global ga, ajaxurl */
const Isotope = require('isotope-layout');
const imagesLoaded = require('imagesloaded');
const lightGallery = require('lightgallery');

// init Isotope
const grid = document.querySelector('.gallery--items');
const filtersElem = document.querySelector('.gallery--filters');

let iso = {};

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    imagesLoaded(grid).on('progress', () => {
      // layout Isotope after each image loads
      iso = new Isotope(grid, {
        itemSelector: '.gallery--item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer',
        },
      });
    });

    $('.gallery--items').lightGallery({
      selector: '.gallery--item--overlay',
      cssEasing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
    });

    // bind filter button click
    filtersElem.addEventListener('click', (event) => {
      // only work with buttons
      // if (!matchesSelector(event.target, 'button')) {
      //   return;
      // }
      const filterValue = event.target.getAttribute('data-filter');
      iso.arrange({ filter: filterValue });
    });

    function radioButtonGroup(buttonGroup) {
      buttonGroup.addEventListener('click', (event) => {
        // only work with buttons
        // if ( !matchesSelector( event.target, 'button' ) ) {
        //   return;
        // }
        buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
        event.target.classList.add('is-checked');
      });
    }
    // change is-checked class on buttons
    const buttonGroups = document.querySelectorAll('.gallery--filters');
    for (let i = 0; i < buttonGroups.length; i += 1) {
      const buttonGroup = buttonGroups[i];
      radioButtonGroup(buttonGroup);
    }

    let paged = 2;
    $('body').on('click', '.load-more', () => {
      $.post(ajaxurl, { action: 'load_more', paged },
        (response) => {
          paged += 1;
          console.log(response);
          const tempelement = document.createElement('div');
          tempelement.insertAdjacentHTML('beforeend', response);
          const elements = tempelement.querySelectorAll('.gallery--item');
          console.log(elements);
          iso.insert(elements);
        }
      );
    });
  },
};
