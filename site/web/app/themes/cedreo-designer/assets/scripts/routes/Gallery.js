/* global ga */
const Isotope = require('isotope-layout');
const imagesLoaded = require('imagesloaded');

const grid = document.querySelector('.gallery--items');
const filtersElem = document.querySelector('.gallery--filters');

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    imagesLoaded(grid, () => {
      // images have loaded
      const iso = new Isotope(grid, {
        itemSelector: '.gallery--item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer',
        },
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
    });
  },
};
