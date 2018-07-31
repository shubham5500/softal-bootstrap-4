$(document).ready(function(){
  var indexSlide = $("#landing_section_3").owlCarousel({
        items : 3,
        navigation : false,
        slideSpeed : 1000,
        pagination : false,
        paginationSpeed : 500,
        autoPlay:5000,
        singleItem:false
    });
     $(".prevSlider").click(function(){
        indexSlide.trigger('owl.prev');
    });
    $(".nextSlider").click(function(){
        indexSlide.trigger('owl.next');
    });
    
   
    $( window ).scroll(function() {
        var bodyOffset = $(document).scrollTop();
         if(bodyOffset > 300){
            $('.navbar.landing.fixed-top').addClass('navbar-white');
         }else if(bodyOffset < 300){
            $('.navbar.landing.fixed-top').removeClass('navbar-white');
         }  
    });

    $(".second_navbar li.nav_link").on("click", function(){
       $(".second_navbar").find(".active").removeClass("active");
       $(this).addClass("active");
    });
})