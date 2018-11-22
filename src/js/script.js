import {BASE_DIR} from '../constants.yml'
import $ from 'jquery';
import 'slick-carousel';

const jQuery = require('jquery');
window.jQuery = jQuery;

const modaal = require('modaal');

$(function () {
    $('.list-slider').slick({
        slidesToShow: 5,
        dots: false,
        arrows: false,
    });

    $("a img").each(function () {
        if (String($(this).attr("src")).match(/_off\.(.*)$/)) {
            var img = new Image();
            img.src = String($(this).attr("src")).replace(/_off\.(.*)$/, "_on.$1");
        }
    });

    $('a img').hover(function () {
        if ($(this).hasClass('current')) {
            return;
        }else {
            $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
        }
    }, function () {
        if ($(this).hasClass('current')) {
            return;
        }else{
            $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }
    });
    $('.sp-menu').modaal({
        content_source: '#sp-nav'
    });
});
