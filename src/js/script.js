import {BASE_DIR} from '../constants.yml'
import $ from 'jquery';
import 'slick-carousel';

$(function () {
    $('.list-slider').slick({
        slidesToShow:5,
        dots:false,
        arrows:false,
    });
});
