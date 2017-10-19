$(document).ready(function () {
    $("html").niceScroll();

    var demo2 = $('#demo2');
    var i = 0;
    demo2.colorpickerplus();
    demo2.on('changeColor', function (e, color) {
        if (color == null) {
            //when select transparent color
            $('.color-fill-icon', $(this)).addClass('colorpicker-color');
        } else {

            $('.color-fill-icon', $(this)).removeClass('colorpicker-color');
            $('.color-fill-icon', $(this)).css('background-color', color);

            $('.color-container').append($(''));
            $('.color-container').append($('<div onclick="hideMe(this)" type="color" name="product_color[]" class="box box' + i + '" ><input type="hidden" name="product_color[]" class="box box' + i + '" ></input></div>'));
            $('.box' + i + '').css({"background-color": color});
            $('.box' + i + '').val(color);

            i++;

        }
    });
});


