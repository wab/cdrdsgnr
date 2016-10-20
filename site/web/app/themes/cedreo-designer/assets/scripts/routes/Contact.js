/* global google */
function initMap() {
  // Create a map object and specify the DOM element for display.
  const map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: -34.397, lng: 150.644 },
    scrollwheel: false,
    zoom: 8,
  });
}

export default {
  init() {
    // JavaScript to be fired on the contact page
  },
  finalize() {
    // JavaScript to be fired on the contact page, after the init JS
    console.log('contact page');
  },
};
