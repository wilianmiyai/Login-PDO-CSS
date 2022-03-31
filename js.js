
document.querySelector(".menu-icon").addEventListener("click", function () {
    document.querySelector(".main-nav").classList.add("active");
    document.querySelector(".close-icon").classList.add("on");
    this.classList.add("off");
    color(".nav-color");
});

document.querySelector(".close-icon").addEventListener("click", function () {
    closeNav();
});

// close nav, when screen is wider than 800px
window.onresize = function () {
    if (window.innerWidth >= 800) {
        closeNav();
    }
}

window.onscroll = function () {
    scrollFunction();
};


function closeNav() {
    document.querySelector(".main-nav").classList.remove("active");
    document.querySelector(".menu-icon").classList.remove("off");
    document.querySelector(".close-icon").classList.remove("on");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        setTimeout('changeColor(".nav-color")', 350);
    }
}

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector(".top-nav").classList.add("nav-background");
        if (!document.querySelector(".main-nav").classList.contains("active")) {
            changeColor(".nav-color");
        }
    } else {
        document.querySelector(".top-nav").classList.remove("nav-background");
        color(".nav-color");
    }
}

function changeColor(x) {
    var elements = document.querySelectorAll(x);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = "#222";
    }
}

function color(x) {
    var elements = document.querySelectorAll(x);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = "#fff";
    }
}



var $value = 'all 0.3s ease-in';
$('.formError, input').css('transition', $value);

$('form').on('click', 'input#submit', function () {
    $('.formError').css('opacity', '1');
});
$('form').on('keydown', 'input,textarea', function () {
    $parent = $(this).parents('.formItem');
    $label = $parent.find('label');
    $label.css('top', '-2px');
    $(this).css('borderRadius', '0 0 5px 5px');

});
$('form').on('blur', 'input,textarea', function () {
    $parent = $(this).parents('.formItem');
    $label = $parent.find('label');
    $error = $parent.find('.formError');
    $label.css('top', '15px');
    $error.css('opacity', 0);
    $(this).css('borderRadius', '5px');
});



$(function () {

    $(".show-table").click(function () {
        $(this).children("td.mobile-hide").slideToggle().css("display", "block");
        $(this).children(".company-name").toggleClass("white-space-normal");
    });

});
