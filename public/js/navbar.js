$(document).ready(() => {
    $(`.navbars .navbars-rights i`).click(() => {
        $(`.navbars .navbars-rights > .cart-show`).toggleClass("show-cart");
        console.log(showCart);
    })
})
