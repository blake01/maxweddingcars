$(document).ready(function() {

  $("#mobile-nav-toggle").click(function() {
    $("nav").slideToggle();
  });

  var isHome = ! $("#owl-example").hasClass("car-carousel");

  $("#owl-example").owlCarousel({
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem: true,
    autoHeight : isHome,
    lazyLoad: !isHome,
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
      // 2017 update - make it more likely to select a more recent review.
      // Latest review has a 19% chance; oldest has a 1% chance.
      var randomIndex1 = Math.random() * owl.itemsAmount;
      var randomIndex2 = Math.random() * owl.itemsAmount;
      var lowestRandomIndex = Math.min(randomIndex1, randomIndex2)
      owl.jumpTo(Math.floor(lowestRandomIndex));
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
