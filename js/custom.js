(function($){
    //js marquee
    $('.marquee').marquee({
        //speed in milliseconds of the marquee
        duration: 5000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true
    });
    //news tickers 
   // $('.ui-newsticker').newsticker();
    $(function() {
      $('.ui-newsticker').newsticker();
    });
    // owl carasul
    $('.owl-carousel').owlCarousel({
      itemsDesktop : [1000,1], // 2 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // betweem 900px and 601px
      itemsTablet: [700,1], // 2 items between 600 and 480
      itemsMobile : [479,1] , // 1 item between 479 and 0
      navigation: true,
      lazyLoad: true,
      pagination: false,
      scrollPerPage : true,
        autoplay:true,
        autoplayHoverPause:true,
        margin:10,
        loop:true,
        items:1,
        mouseDrag:true,
        touchDrag:true,
        pullDrag:true,
        freeDrag:true,
        smartSpeed:true
    });
   //partner slider
   $('.bxslider').bxSlider({
      minSlides: 3,
      maxSlides: 5,
      slideWidth: 200,
      slideMargin: 10
    });
   //
    $('#myCarousel').carousel({
      interval: 10000
   })
})(jQuery);