let tops = 0;
let temp = 0;
let lefts = 0;
let temp_letfs = 0;
$(document).ready(function () {
    setInterval(() => {
        if (tops == 0) {
            temp = -100
        } else if (tops == -200) {
            temp = 100
        }

        if (lefts == 0) {
            temp_letfs = -115
        } else if (lefts == -230) {
            temp_letfs = 115
        }

        tops += temp
        lefts += temp_letfs
        $(".img-section img").css("top", `${tops}%`)
        $(".mainSection .rightSection h2").css("left", `${tops}%`)
        $(".mainSection .rightSection h3").css("top", `${tops}%`)
        $(".mainSection .rightSection .text-background h1")
            .css("left", `${lefts}%`)

    }, 3000);

    $('.slider').slick({
        centerMode: true,
        autoplay: true,
        dots: true
    });

});
var goUp = () => {
    if (tops <= 0 && tops >= -200) {
        tops += 100
    }
    if (tops > 0) {
        tops = 0
    }
    $(".img-section img").css("top", `${tops}%`)
    $(".mainSection .rightSection h2").css("left", `${tops}%`)
    $(".mainSection .rightSection h3").css("top", `${tops}%`)
    if (lefts <= 0 && lefts >= -230) {
        lefts += 115
    }
    if (lefts > 0) {
        lefts = 0
    }
    $(".mainSection .rightSection .text-background h1")
        .css("left", `${lefts}%`)
};

var goDown = () => {
    if (tops >= -200 && tops <= 0) {
        tops -= 100
    }
    if (tops < -200) {
        tops = -200
    }
    $(".img-section img").css("top", `${tops}%`)
    $(".mainSection .rightSection h2").css("left", `${tops}%`)
    $(".mainSection .rightSection h3").css("top", `${tops}%`)
    if (lefts >= -230 && lefts <= 0) {
        lefts -= 115
    }
    if (lefts < -230) {
        lefts = -230
    }
    $(".mainSection .rightSection .text-background h1")
        .css("left", `${lefts}%`)
};