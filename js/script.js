jQuery(document).ready(function ($) {




    $('.open').click(function (event) {
        $('.menu').toggleClass('active');
        $('body').toggleClass('lock');

    });



    $('.burger, .mnav').click(function (event) {
        $('.mmenu').toggleClass('active');
        $('body').toggleClass('lock');

    });
    $('.close,.closing').click(function (event) {
        $('.menu').removeClass('active');
        $('body').removeClass('lock');

    });
    $("#two").click(function (event) {
        $('.carousel1').addClass('two');
        $('.carousel1').removeClass('one');
        $('.carousel1').removeClass('three');

    });
    $("#one").click(function (event) {
        $('.carousel1').addClass('one');
        $('.carousel1').removeClass('two');
        $('.carousel1').removeClass('three');

    });
    $("#three").click(function (event) {
        $('.carousel1').addClass('three');
        $('.carousel1').removeClass('two');
        $('.carousel1').removeClass('one');

    });








});
window.addEventListener("DOMContentLoaded", function () {
    [].forEach.call(document.querySelectorAll('.tel'), function (input) {
        var keyCode;
        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            var pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            var matrix = "+7 (___) ___ ____",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function (a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });
            i = new_value.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }
            var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function (a) {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type == "blur" && this.value.length < 5) this.value = ""
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false)

    });

});