$(document).ready(() => {
    $(`.navbars .navbars-rights i`).click(() => {
        $(`.navbars .navbars-rights > .cart-show`).toggleClass("show-cart");
        console.log(showCart);
    })
});

$(`.isi-hamburger-menu i`).click(() => {
    $(`.isi-hamburger-menu .cart-show`).toggleClass("show-cart");
});

$(`.hamburger-menu`).click(() => {
    $(`.isi-hamburger-menu`).toggleClass("show-menu");
    console.log(showCart);
});