$(document).ready(function() {

  $("#mobile-nav-toggle").click(function() {
    $("nav").slideToggle();
  });

  // Overcome iOS double tap issue on links with hover states
  $('a').on('click touchend', function(e) {
    var el = $(this);
    var link = el.attr('href');
    window.location = link;
  });

});