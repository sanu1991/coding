$(document).ready(function () {
    // $(function () {
    let countryOptions;
    let stateOptions;

    // show the country names in result
    $.getJSON('countries.json', function (result) {
        $.each(result, function (i, country) {
            // alert(country.name + " " + country.code);
            countryOptions += "<option value=' " + country.code + " '>" + country.name + "</option>";
        });
        $("#country").html(countryOptions);
    });


    $("#country").change(function () {
        //  let    countryVal = $("#country").val();
        //     if (countryVal == "IN") {
        // if ($("#country").val() == "IN") {
            $.getJSON('indianStates.json', function (result) {
                $.each(result, function (stateCode, stateName) {
                    // alert(country.name + " " + country.code);
                    stateOptions += "<option value=' " + stateCode + " '>" + stateName + "</option>";
                });
                $("#state").html(stateOptions);
            });
        // };
    });

});