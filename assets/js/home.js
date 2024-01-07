var swiper = new Swiper('.home-slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
      delay: 3000,
      disableOnInteraction: false,
  },
  pagination: {
      el: '.swiper-pagination', // CSS class for pagination container
      clickable: true, // Allows clicking on pagination bullets to navigate
  },
});

$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);