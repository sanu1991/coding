
// Js for loader 
$(window).on('load',function(){
    $('.loader').fadeOut(1000);
    $('.content').fadeIn(1000);
});
// Js for loader


// Js for form validation
$(document).ready(function () {
    let email = true;

    $('.input').keyup(function () {
        emlchk();
    });

    function emlchk() {
        let input = $('.input').val();
        if (input == '') {
            $('.error').html('*Valid email is required(ex. my-email@gmail.com).').css('color', 'red');
            $('.input').css('border', '1px solid red');
            $('.input').focus();
            email = false;
            return false;
        } else if ((input.length < 4) || (input.length > 20)) {
            $('.error').html('Email ID should be within 4 to 20 letters').css('color', 'red');
            $('.input').css('border', '1px solid red');
            $('.input').focus();
            email = false;
            return false; // to stop form submit
        }
        else {
            $('.error').html('ok').css('color', 'green');
        }
    }


    $('.btn').click(function () {
        email = true;
        emlchk();

        if (email == true) {
            return true; // submit form
        } else {
            return false;
        }
    });



    // Js for modal box
    $(".btn").click(function () {
        $(".modal").fadeIn(500);
    });

    $(".cancel").click(function () {
        $(".modal").fadeOut(500);
    });


});

    // $(document).ready(function () {

    //     $('form').submit(function () {
    //         let input = $('#input').val();
    //         if (input === '') {
    //             $('.error').text('Valid email is required(ex. my-email@gmail.com).').css('color', 'red');

    //         }
    //         return false;
    //     });
    // });
