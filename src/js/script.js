import {BASE_DIR} from '../constants.yml'

const jQuery = require('jquery');
window.jQuery = jQuery;

const modaal = require('modaal');
const slickcarousel = require('slick-carousel');
import 'jquery-ui-dist/jquery-ui.min';

jQuery(function () {
    jQuery('.list-slider').slick({
        slidesToShow: 5,
        dots: false,
        arrows: false,
        autoplay:true,
        infinite: true,
    });


    jQuery("a img").each(function () {
        if (String(jQuery(this).attr("src")).match(/_off\.(.*)$/)) {
            var img = new Image();
            img.src = String(jQuery(this).attr("src")).replace(/_off\.(.*)$/, "_on.$1");
        }
    });

    jQuery('a img').hover(function () {
        if (jQuery(this).hasClass('current')) {
            return;
        }else {
            jQuery(this).attr('src', jQuery(this).attr('src').replace('_off', '_on'));
        }
    }, function () {
        if (jQuery(this).hasClass('current')) {
            return;
        }else{
            jQuery(this).attr('src', jQuery(this).attr('src').replace('_on', '_off'));
        }
    });
    jQuery('.sp-menu').modaal({
        content_source: '#sp-nav',
        fullscreen: true
    });

    jQuery(".modal-image").modaal({type:'image'});

    jQuery(window).resize(function() {
        jQuery('.list-slider').slick('resize');
    });

    jQuery('a[href^="#"]').click(function(){
        var speed = 500;
        var href= jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    jQuery('.toolchip').tooltip({
        show:false,
        hide:false
    });
});
