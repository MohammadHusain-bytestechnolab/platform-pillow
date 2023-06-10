/*-----------------------------------------------------
    Change header color on scroll
-------------------------------------------------------*/
  
  $(window).scroll(function () {
      if ($("#header").offset().top > 50) {
          $("#header").addClass("menu-bg");
          $("#header").addClass("header-shadow");
          $('.menu-item').children().css("color","black")
          $('.navbar-toggle').children().css("color","black")
      } else {
          $("#header").removeClass("menu-bg");
          $("#header").removeClass("header-shadow");
          $('.menu-item').children().css("color","black")
          $('.navbar-toggle').children().css("color","black")
      }
  });
  
  $(document).ready(function () {
        $('.menu-item-has-children ul').hide(); 
        $('.menu-item-has-children').children('a:nth-child(1)').append('<i class="fa fa-caret-down header-dropdown-icon"></i>'); 

        $(document).on('click', function(event) {
            var $target = $(event.target);
            
            // Check if the click target is the products option or a descendant of the submenu
            if (!$target.closest('.menu-item-has-children a').length && !$target.closest('.menu-item-has-children ul').length) {
                // Clicked outside of the products option and submenu, hide the submenu
                $('.menu-item-has-children ul').hide();
            } else if ($target.closest('.menu-item-has-children a').length) {
                $('.menu-item-has-children ul').attr('style', function(_, currentValue) {
                  return currentValue === 'display: none;' ? 'display: block !important;' : 'display: none;';
                });
            }
        });
  });
