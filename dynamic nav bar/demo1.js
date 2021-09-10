
    $(document).ready(function () {

        // FETCHING DATA FROM JSON FILE
        $.getJSON("demo1.json",
            function (data) {
                var navbar = '';

                // ITERATING THROUGH OBJECTS
                $.each(data, function (key, value) {

                    //CONSTRUCTION OF NAVBAR
                    // DATA FROM JSON OBJECT
                    // navbar += '<nav>';
                    navbar += '<a href="#" class="framer">' + value.a + '</a>';

                    navbar += '<a href="#" class="whyFramer">' + value.b + '</a>';

                    navbar += '<a href="#" class="team">' + value.c + '</a>';

                    navbar += '<a href="#" class="showcase">' + value.d + '</a>';

                    navbar += '<a href="#" class="developers">' + value.e + '</a>';

                    navbar += '<a href="#" class="resources">' + value.f + '</a>';
                    // navbar += '</nav>';
                });

                //INSERTING DATA INTO NAV 
                $('#nav').append(navbar);
            });
    });
