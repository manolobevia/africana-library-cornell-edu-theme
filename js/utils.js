/*
  By Osvaldas Valutis, www.osvaldas.info
  Available for use under the MIT License
*/

//Select only the li with ul
//$( '#nav li:has(ul)' ).doubleTapToGo();

$( document ).ready(function() {

  // Init megamenu for touch devices
    //$( '#nav li:has(ul)' ).doubleTapToGo();
    $( '#nav li:has(.wrapper)' ).doubleTapToGo();

    $('.sandwich').click(function(e){

        e.preventDefault();
        $(' #nav ').toggle();

      });


    // show/hide search on interior pages
            //search-slider
            //show-hide-search

            $(".search-slider").hide();
            //$(".show-hide-search").show();
            
            var searchHide = true;
            var $slider = $(".search-slider");
            //var $culBranding = $('.cul-branding .cu-logo');
            //var $culBranding = $('.cul-branding');
            //var $userTools = $('.cul-branding .user-tools');
            //var $sandwich = $('.sandwich');
  


              $('.show-hide-search').click(function(){


              if (searchHide) {

                    $slider.show();
                    //$culBranding.hide();
                    //$sandwich.hide()
                    
                    $('.close-search').show();
                    searchHide = false;
                }
              });


              $('.close-search').click(function(e){

                e.preventDefault();
                $slider.hide();
                //$culBranding.show();
                //$sandwich.show()

                $('.close-search').hide();
                searchHide = true;
              });





});

