  $(document).ready(function(){
    $('.carousel').carousel();
  });
  
 $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });


$(document).ready(function(){
  $('.slider').slider();
});

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();

