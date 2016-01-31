InstantClick.on('change', function() {

  $("#mobile-nav-toggle").click(function() {
    $("nav").slideToggle();
  });

  var isHome = ! $("#owl-example").hasClass("car-carousel");

  $("#owl-example").owlCarousel({
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true  ,
    autoHeight : isHome ,
    lazyLoad: !isHome ,
    navigationText: [
      "<i class='fa fa-angle-left'></i> Previous",
      "Next <i class='fa fa-angle-right'></i>"
    ],
    navigation: true
  });

  // Now move the carousel to random item.
  var owl = $("#owl-example").data("owlCarousel");
  if (isHome) {
    if (owl) {
      owl.jumpTo(Math.floor(Math.random() * owl.itemsAmount));
    }
  }

  // Fix for Owl with Respond in IE<9
  var div = document.createElement("div");
  div.innerHTML = "<!--[if lt IE 9]><i></i><![endif]-->";
  var isIeLessThan9 = (div.getElementsByTagName("i").length == 1);
  if (isIeLessThan9) {
    $(window).load(function() {
      window.setTimeout(function() {
        owl.reinit();
      }, 200);
    });
  }

});
