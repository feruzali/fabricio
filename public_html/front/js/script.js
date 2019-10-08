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