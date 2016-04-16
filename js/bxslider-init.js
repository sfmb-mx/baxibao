/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {

		
    $('.bxslider').bxSlider({
      pagerCustom: '.bxpagerslider',
      controls: false,
    });

    $('.slider-triggers .bxpagerslider a').on('click', function(){
      $('.slider-triggers .bxpagerslider a').removeClass('slider-triggered');
      $(this).addClass('slider-triggered');
    });

    $('.bxpagerslider').bxSlider({
      minSlides: 3,
      maxSlides: 5,
      slideWidth: 100,
      slideMargin: 5,
      infiniteLoop: false
    });
   		
        
   
});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends