@extends('layout.app');
@section('title', 'Employees')

@section('content')
<div class="row gutters">
            
    
        
        @forelse ($employees as $employee)
        <?php
        $contact = json_decode($employee->contact, true);
        //$employee->employeeOfficeInformation;
        ?>
        <div class="col-md-4 col-sm-4">
            <div class="card">
                {{-- <img class="card-img-top" src="https://imgv3.fotor.com/images/gallery/cyberpunk-boy-with-light-eyeglasses-avatar.jpg" alt="Card image"> --}}
                <div class="card-body">
                    <h4 class="card-title">{{ $employee->name.' '. $employee->surname }}</h4>
                    <p class="card-text">Email: {{ $contact['email']['email'] }}.</p>
                    <p class="card-text">Phone: {{ $contact['phone']['phone'] }}.</p>
                    <p class="card-text">Country: {{ $contact['address']['city']['country']['name'] }}.</p>
                    <p class="card-text">City: {{ $contact['address']['city']['name'] }}.</p>
                    {{-- <p class="card-text">Date Of Joining: {{  date(" jS \of F Y ", strtotime($employee->employeeOfficeInformation->date_of_joining)) }}</p> --}}
                    {{-- <p class="card-text">Date Of Joining: {{  $employee->employeeOfficeInformation->date_of_joining->diffForHumans() }}</p> --}}
                    <p class="card-text">City: {{ $contact['address']['city']['name'] }}.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
            
                
        @empty
            <div class="alert alert-danger">No record found.</div>
        @endforelse
    
    

    </div>

  
@endsection