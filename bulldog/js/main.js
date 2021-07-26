
jQuery( document ).ready( function(){

    jQuery('.menu-item-has-children').prepend('<b class="trigger"><i class="arrow"></i></b>');
    jQuery('.burger').click(function(){
        jQuery('.burger').toggleClass('active');
        jQuery('.overlay').toggle();
        jQuery('.nav').toggle();
        jQuery('.tel').toggleClass('active');
    });
    jQuery('.overlay').click(function(){
        jQuery('.burger').toggleClass('active');
        jQuery('.overlay').toggle();
        jQuery('.nav').toggle();
        jQuery('.tel').toggleClass('active');
    });
    jQuery('.trigger').click(function(){
        jQuery(this).toggleClass('active');
        jQuery(this).siblings().toggleClass('active');
    });
    jQuery('.script-checkbox label input').change(function(){
        if(jQuery(this).is(':checked')) {
            jQuery(this).parent('label').addClass('label-selected');
        } else {
            jQuery(this).parent('label').removeClass('label-selected');
        }
    });
    jQuery('#form').click(function(){
        jQuery('.forma form').fadeIn();
        jQuery('.overlayform').fadeIn();
    });
    jQuery('#formfoot').click(function(){
        jQuery('.forma form').fadeIn();
        jQuery('.overlayform').fadeIn();
    });
    jQuery('.close, .overlayform').click(function(){
        jQuery('.forma form').fadeOut();
        jQuery('.overlayform').fadeOut();
    });
});
    
var swiper = new Swiper('.swiper-container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    'loop' : true,
    'preventClicks': false,
    'spaceBetween' : 110,
    'breakpoints' : {
        992: {
            slidesPerView: 5
        },
        767: {
            slidesPerView: 3
        },
        0: {
            'spaceBetween' : 80,
            slidesPerView: 2
        }
    },
});

function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
}
