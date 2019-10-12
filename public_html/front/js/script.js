'use strict';

function navBar() {
    let openBtn = document.querySelector('#open'),
        closeBtn = document.querySelector('#close'),
        navMenu = document.querySelector('.nav-menu');

    openBtn.addEventListener('click', () => {
        navMenu.style.display = "block";
    });
    closeBtn.addEventListener('click', () => {
        navMenu.style.display = "none";
    });
}

navBar();


$('.card__cont_main_info_action_quantity_inner_btn').on('click', function(){
    var inserted = parseInt($('.card__cont_main_info_action_quantity_inner_input').attr('value'));
    var add = parseInt($(this).attr('add-value'));
    if ((inserted + add) != 0) {
        var all = inserted + add;
        $('.card__cont_main_info_action_quantity_inner_input').attr('value', all);
    }
});
$('.products__cont_inner_sidebar_list_toggler').on('click', function(){
    if($('.products__cont_inner_sidebar').css("margin-left") == "-250px")
    {
        $('.products__cont_inner_sidebar').animate({"margin-left": '0px'});
        $(".hidden_back").fadeIn(300);
        $(this).animate({"right":"0px"});
    }
    else
    {
        $('.products__cont_inner_sidebar').animate({"margin-left": '-250px'});
        $(".hidden_back").fadeOut(300);
        $(this).animate({"right":"-40px"});
    }
});
$('.cart__cont_main_inner_row_quantity_inner_btn').on('click', function(e){
    e.preventDefault();
    var inserted = parseInt($(this).parent().find($('.card__cont_main_info_action_quantity_inner_input')).attr('value'));
    var add = parseInt($(this).attr('add-value'));
    if ((inserted + add) != 0) {
        var all = inserted + add;
        $(this).parent().find($('.card__cont_main_info_action_quantity_inner_input')).attr('value', all);
    }
});
$('.check_item').click(function(){
    if ($(this).is(':checked')){
        $(this).parent().find('label').css('background-color','#7dc646');
        $(this).parent().find('label').css('border','1px solid #7dc646');
    } else {
        $(this).parent().find('label').css('background-color','#292a30');
        $(this).parent().find('label').css('border','1px solid #616266');
    }
});
$('#checkpoint').click(function(){
    if ($(this).is(':checked')){
        $('.cart__cont_main_form_inner').slideDown(300);
    } else {
        $('.cart__cont_main_form_inner').slideUp(300);
    }
});
// $('#phone').mask('+998 99 999-99-99');


$('.card__cont_main_info_action_btns_sinle').click(function (e) {
    e.preventDefault();
    $(this).attr('disabled', '');
    $(this).text('Добавлено');
    var id = $(this).data('id');
    var count = $('.card__cont_main_info_action_quantity_inner_input').val();
    if(getCookie('products').length === 0)
    {
        document.cookie = 'products=' + JSON.stringify([{id:id, count: count}]) + ';path=/';
    }else
    {
        var arr2 = JSON.parse(getCookie('products'));
        arr2.push({id:id, count: count});
        var d = new Date();
        d.setTime(d.getTime() + (60 * 1000 * 60 * 24 * 7));
        document.cookie = 'products=' + JSON.stringify(arr2) + ';path=/;expires=' + d.toUTCString();
        var count = 0;
        $.each(JSON.parse(getCookie('products')), function(index, value){
            count += parseInt(value.count);
        });
        $('.header_top_right_cart_btn_quantity').text(count);
    }
});

if($('.card__cont_main_info_action_btns_sinle'))
{
    try{
        $.each(JSON.parse(getCookie('products')), function (index, value) {
            if(value.id == $('.card__cont_main_info_action_btns_sinle').data('id'))
            {
                $('.card__cont_main_info_action_btns_sinle').attr('disabled', '');
                $('.card__cont_main_info_action_btns_sinle').text('Добавлено');
            }
        });
    }catch(e)
    {

    }
}

$('.cart__cont_main_inner_row_delete_btn').click(function (e) {
    e.preventDefault();
    var arr = JSON.parse(getCookie('products'));
    console.log(arr);
    arr.splice($(this).data('id'), $(this).data('id') + 1);
    console.log(arr);
    setCookie('products', JSON.stringify(arr));
    $('.header_top_right_cart_btn_quantity').text(arr.length);
    $('.cart__cont_main_inner_row_' + $(this).data('id')).remove();
});



});



function setCookie(name, value) {

    var d = new Date();
    d.setTime(d.getTime() + (60 * 1000 * 60 * 24 * 7));
    var opt = 'path=/;expires='+d.toUTCString();

    var updatedCookie = name + "=" + value + ';' + opt;

    document.cookie = updatedCookie;
}

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : [];
}

function deleteCookie(name) {
    setCookie(name, "", {
        expires: -1
    })
}