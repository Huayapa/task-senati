const multiplelitemcarousel = document.querySelector('#carouselExample')

if(window.matchMedia("(min-width:576px)").matches) {
    const carousel = new bootstrap.Carousel(multiplelitemcarousel, {
        interval: false,
      })
    var carouselwidth = $('.carousel-inner1')[0].scrollWidth;
    var cardwidth = $('.carousel-item1').width();
    
    var scrollposition = 0;
    
    $('.carousel-control-next').on('click', function() {
        if(scrollposition < (carouselwidth - (cardwidth * 4))) {
            console.log('next');
            scrollposition = scrollposition + cardwidth;
            $(".carousel-inner1").animate({scrollLeft: scrollposition}, 600);
        }
    });
    
    $('.carousel-control-prev').on('click', function() {
        if(scrollposition > 0) {
            console.log('prev');
            scrollposition = scrollposition - cardwidth;
            $(".carousel-inner1").animate({scrollLeft: scrollposition}, 600);
        }
    });
} else {
    $(multiplelitemcarousel).addClass('slide');
}