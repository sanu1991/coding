
    $(document).ready(function () {

        // FETCHING DATA FROM JSON FILE
        $.getJSON("demo2.json",
            function (data) {
                // var navbar = '';

                // ITERATING THROUGH OBJECTS
                $.each(data, function (key, value) {

                    //CONSTRUCTION OF NAVBAR
                    // DATA FROM JSON OBJECT
                    
                    // $("<a>" + value.text + "</a>").attr("href", value.url).appendTo("#nav"); 

                    //  or  //

                    $("<a class='menu'>" + value.text + "</a>").attr("href", value.url).appendTo("#div");

                    $("<a class='menu'>" + value.text1 + "</a>").attr("href", value.url1).appendTo("#div");
                    
                    $("<a class='menu'>" + value.text2 + "</a>").attr("href", value.url2).appendTo("#div");

                    $("<a class='menu'>" + value.text3 + "</a>").attr("href", value.url3).appendTo("#div");

                    $("<a class='menu'>" + value.text4 + "</a>").attr("href", value.url4).appendTo("#div");

                    
                });

                //INSERTING DATA INTO NAV 
                // $('#nav').append(navbar);
            });
    });
