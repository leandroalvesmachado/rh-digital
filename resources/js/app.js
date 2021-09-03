// require('./bootstrap');

require('alpinejs');

import $ from 'jquery';
window.$ = window.jQuery = $;

require('jquery-mask-plugin');

$(window).on("load", function() {
    $('.date').mask('00/00/0000', {
        clearIfNotMatch: true,
        placeholder: '__/__/____'
    });
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00', {
        clearIfNotMatch: true,
        placeholder: '__/__/____ __:__:__'
    });
    $('.cep').mask('00000-000', {
        clearIfNotMatch: true,
        placeholder: '_____-___'
    });
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000', {
        clearIfNotMatch: true,
        placeholder: '(__) ____-____'
    });
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.numeric').mask('###.###.###.###.###,000', {
        reverse: true
    });
    $('.weight').mask('000,00', {
        reverse: true
    });
    $('.workload').mask('000.00', {
        reverse: true
    });
});
