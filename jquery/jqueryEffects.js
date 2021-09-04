$(document).ready(function () {
    // callback - click event - hide effects
    $("#btn").click(function () {
        $("#p").hide(2000, function () {
            alert("paragraph is now hidden")
        });
    });
    // without callback
    $("#btn_a").click(function () {
        $("#p").hide(2000)
        alert("paragraph will be hide")
    });
    // 'on' method -- dblclick, mouseenter, mouseleave - event
    $("#p2").on("click", function () {
        $(this).hide(3000)
    });

    $("#btn1").on({
        click: function () {
            $("#p1").hide(1000);
        },
        dblclick: function () {
            $("#p1").show(1000)
        },
        mouseenter: function () {
            $(this).css("color", "white")
        },
        mouseleave: function () {
            $(this).css("background-color", "grey")
        }
    });
    // effects-- toggle
    $("#btn1a").click(function () {
        $("#div1").toggle(1000)
    });
    // effect-- fadeIn, fadeOut
    $("#btn2").on({
        click: function () {
            $("#div").fadeOut(1000)
        },
        dblclick: function () {
            $("#div").fadeIn(1000)
        },
        // hover: function () {
        //     $(this).css("background-color", "red")
        // }
    });
    //  event -- focus, blur (The function is executed when the form field gets focus & loses focus)
    $("input").on({
        focus: function () {
            $(this).css("background-color", "skyblue")
        },
        blur: function () {
            $(this).css("background-color", "grey")
        }
    });
    // event -- hover
    $("#btn2").hover(function () {
        $(this).css("background-color", "red")
    });

    // chaining method -
    $("#btn2a").click(function () {
        $("#div1").fadeOut(2000).fadeIn(2000);
    });
    // effect --  fadeToggle
    $("#btn3").click(function () {
        $("#div_").fadeToggle(1000);
    });
    // effect -- fadeTo
    $("#btn4").click(function () {
        $("#div2").fadeTo(1000, 0.16);
    });
    // effect -- slideUp, slideDown
    $("#btn5").on({
        dblclick: function () {
            $("#div").slideDown(1000)
        },
        click: function () {
            $("#div").slideUp(1000)
        }
    });
    // effect -- slideToggle
    $("#btn6").click(function () {
        $("#div_").slideToggle(1000);
    });
    // effect -- animate()
    $("#btn7").click(function () {
        // $("#div0").animate({
        //     left: '150px',
        //     opacity: '0.5',
        //     height: '30px',
        //     width: '30px',
        // }, 4000);
        // });

        // Uses Queue Functionality
        let div = $("#div0");
        div.animate({ height: '100px', opacity: '0.19' }, "slow");
        div.animate({ width: '220px', opacity: '0.16' }, 2000);
        div.animate({ height: '40px', opacity: '0.8' }, 3000);
        div.animate({ width: '40px', opacity: '0.8' }, 1000);
    });
    // effect -- stop
    $("#btn8").click(function () {
        $("#div0").stop();
    });




});