
// 3. jQuery Syntax
// 4. The Document Ready Event - it tells jQuery to run after the page is fully loaded.
$(document).ready(function () {
    // "button" - element selector, .click- event
    $("#btn").click(function () {
        // "p"- element selector, .hide- effect, 2000- speed
        $("p").hide(2000);
    });
    // DOM Manipulation & traversing
    $("input[type='radio']").click(function (e) {
        if ($(this).val() == "Washington DC")
            $(this).parent().append('<p style="margin:0;padding-left:10px;color:green;">Right</p>');
        else
            $(this).parent().append('<p style="margin:0;padding-left:10px;color:red;">Wrong</p>');
    });
    // ajax
    $("#btn1").click(function () {
        $("h3").load("demo_test.txt", function () {
            alert("Now you see the new text")
        });;
    });
    // });
    // To attach multiple event handlers to a <h2> element:
    $("h2").on({
        mouseenter: function () {
            $(this).css("background-color", "red");
        },
        mouseleave: function () {
            $(this).css("background-color", "lightblue");
        },
        click: function () {
            $(this).css("background-color", "yellow");
        }
    });
});

// 5. Next follow jquery.txt 