$(document).ready(function () {

  $('body, html').css('overflow', 'hidden');
  var screenWidth = $(window).width();
  $('body, html').css('overflow', 'visible');

  if (screenWidth > 767) {

    $(".dropdown-submenu").hover(function () {

      var dropdownPosition = $(this).offset().left + $(this).width() + $(this).find('ul').width();
      var newPosition = $(this).offset().left - $(this).find('ul').width();
      var windowPosition = $(window).width();

      var oldPosition = $(this).offset().left + $(this).width();
      //document.title = dropdownPosition;
      if (dropdownPosition > windowPosition) {
        $(this).find('ul').offset({ "left": newPosition });
      } else {
        $(this).find('ul').offset({ "left": oldPosition });
      }
    });

  };

  // flye js


  $(document).ready(function () {

    $("body").delegate(".product-fly", "click", function (event) {
      event.preventDefault();



      function flyToElement(flyer, flyingTo) {
        var divider = 5;
        var flyerClone = $(flyer).clone();
        $(flyerClone).css({ position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000 });
        $('body').append($(flyerClone));
        var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width() / divider) / 2;
        var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height() / divider) / 2;

        $(flyerClone).animate({
          opacity: 0.4,
          left: gotoX,
          top: gotoY,
          width: $(flyer).width() / divider,
          height: $(flyer).height() / divider
        }, 700,
          function () {
            $(flyingTo).fadeOut('fast', function () {
              $(flyingTo).fadeIn('fast', function () {
                $(flyerClone).fadeOut('fast', function () {
                  $(flyerClone).remove();
                });
              });
            });
          });
      }
      var itemImg = $(this).parent().parent().find('img').eq(0);
      flyToElement($(itemImg), $('.cart_anchor'));


    })

  })


  // sclling bar
  // BY KAREN GRIGORYAN

  $(document).ready(function () {
    /******************************
        BOTTOM SCROLL TOP BUTTON
     ******************************/

    // declare variable
    var scrollTop = $(".scrollTop");

    $(window).scroll(function () {
      // declare variable
      var topPos = $(this).scrollTop();

      // if user scrolls down - show scroll to top button
      if (topPos > 100) {
        $(scrollTop).css("opacity", "1");

      } else {
        $(scrollTop).css("opacity", "0");
      }

    }); // scroll END

    //Click event to scroll to top
    $(scrollTop).click(function () {
      $('html, body').animate({
        scrollTop: 0
      }, 800);
      return false;

    }); // click() scroll top EMD

    /*************************************
      LEFT MENU SMOOTH SCROLL ANIMATION
     *************************************/
    // declare variable

    $('.link1').click(function () {
      $('html, body').animate({
        scrollTop: h1.top
      }, 500);
      return false;

    }); // left menu link2 click() scroll END

    $('.link2').click(function () {
      $('html, body').animate({
        scrollTop: h2.top
      }, 500);
      return false;

    }); // left menu link2 click() scroll END

    $('.link3').click(function () {
      $('html, body').animate({
        scrollTop: h3.top
      }, 500);
      return false;

    }); // left menu link3 click() scroll END

  }); 

});
