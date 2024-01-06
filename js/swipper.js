
    var swiper = new Swiper('.home-slider', {
        loop: true, /* Habilita el bucle infinito si lo deseas */
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


    $(document).ready(function() {
        $('.has-animation').each(function(index) {
          $(this).delay($(this).data('delay')).queue(function(){
            $(this).addClass('animate-in');
          });
        });
      });
      