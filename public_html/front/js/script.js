'use strict';

// Hamburger menu
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

//Animation In Promo Block
(function() {
    var $set1 = $('.promoBlock__field');
    var $set2 = $('.promoBlock__img');
    var $widthWrap = $('.promoBlock__wrapper').outerWidth();
    var $widthSect = $widthWrap / $set1.length;

    $('.promoBlock__hoverFields').on('mouseover', '.promoBlock__field', function() {
        var n = $set1.index(this);
        for (var i = 0; i < $set2.length; i++) {
            if (n == i) {
                $set2.removeClass('promoBlock__img--active');
                $set2[i].classList.add('promoBlock__img--active');
            }
        }
    });
}());