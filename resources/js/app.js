import './bootstrap';
import $ from 'jquery';
window.$ = $;

$(() => {
    

    $('#country-dropdown').on('change', function () {
        var idCountry = this.value;
        var __token = $('input[name="_token"]').val() ;
        
        $("#city-dropdown").html('');
        $.ajax({
            url: "api/cities",
            type: "POST",
            data: {
                country_id: idCountry,
               _token: __token
            },
            dataType: 'json',
            success: function (results) {
                //console.log(results); 
                $('#city-dropdown').html('<option value="">-- Select City --</option>');
                $.each(results.cities, function (key, value) {
                     
                    $("#city-dropdown").append('<option value="' + value
                        .id + '">' + value.name + '</option>');
                });
            }
        });
    });


});