// A $( document ).ready() block.
$( document ).ready(function() {
  if ( $(window).width() > 700) {
    //Add your jQuery for large screens here
    $('.menu-control').hide();
  }
  else {
      //Add your jQuery for small screens here
      // Hide the main menu for mobile views initially
    $('#nav ul').hide();
    $('.menu-control').addClass('menu-title-unclicked');
      // Toggle list on/off when title is clicked
    $('.menu-control').click(function() {
    $('.menu-control').toggleClass('menu-title-clicked menu-title-unclicked');
    $('#nav ul').slideToggle();
    });
    $('.menu-control').hover(function() {
      $(this).css('cursor','pointer');
    });
    // Hide the pipe dividers between menu items
    $('.menu-divider').hide();
  }

  // jQuery for the FAQ pages
  // Hide the response initially
  $('.more').hide();

  // When toggle class is clicked, slide the response up/down
  // When toggle is clicked toggle the show-more and show-less classes
  $('.toggle').click(function () {
    $(this).next('.more').slideToggle();
    // $(this).toggleClass("plus minus");
  });

  $('.plus').click(function () {
    $(this).toggleClass("plus minus");
  });

  // When toggle-title class is clicked, slide the response up/down
  // The toggle-title class is used for FAQ Headings
  $('.toggle-title').click(function () {
    $(this).next('.more').slideToggle();
  });

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      direction: "vertical"
      });
  });

});
