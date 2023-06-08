@extends('layout.app');
@section('title', 'Add Employee')

@section('content')
<div class="row gutters">
            
    <div class="offset-xl-3 offset-lg-3 offset-md-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            @include('includes.__form')
            
        </div>
    </div>
    </div>

    </div>

    <script>
        // jQuery(document).ready(function ($) {
  
        //     /*------------------------------------------
        //     --------------------------------------------
        //     Country Dropdown Change Event
        //     --------------------------------------------
        //     --------------------------------------------*/
        //     $('#country-dropdown').on('change', function () {
        //         var idCountry = this.value;
        //         alert(idCountry); return false;
        //         $("#city-dropdown").html('');
        //         $.ajax({
        //             url: "{{url('api/cities')}}",
        //             type: "POST",
        //             data: {
        //                 country_id: idCountry,
        //                 _token: '{{csrf_token()}}'
        //             },
        //             dataType: 'json',
        //             success: function (result) {
        //                 $('#state-dropdown').html('<option value="">-- Select State --</option>');
        //                 $.each(result.states, function (key, value) {
        //                     $("#state-dropdown").append('<option value="' + value
        //                         .id + '">' + value.name + '</option>');
        //                 });
        //                 $('#city-dropdown').html('<option value="">-- Select City --</option>');
        //             }
        //         });
        //     });
  
            
  
        // });

        
    </script>    
@endsection