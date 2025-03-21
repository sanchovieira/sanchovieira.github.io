$(document).ready(function() {
  // Generalized MagnificPopup Initialization
  var initMagnificPopup = function(selector, type) {
    $(selector).magnificPopup({
      type: type,
      removalDelay: 300, // Smooth transition for removal
      mainClass: 'mfp-with-zoom', // Zoom effect class
      gallery: {
        enabled: true // Enables gallery functionality (swipe through images/videos)
      },
      zoom: {
        enabled: true, // Enable zoom effect
        duration: 300, // Duration of zoom effect in ms
        easing: 'ease-in-out', // Easing for smooth transition
        opener: function(openerElement) {
          return openerElement.is(type === 'image' ? 'img' : 'video') 
            ? openerElement 
            : openerElement.find(type === 'image' ? 'img' : 'video');
        }
      }
    });
  };

  // Initialize for both images and videos
  initMagnificPopup('.image-popup', 'image');
  initMagnificPopup('.video-popup', 'video');
});
