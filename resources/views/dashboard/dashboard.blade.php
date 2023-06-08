@extends('layout.app');
@section('title', 'Dashboard')

@section('content')
<div class="row gutters">
       
{{-- @dd(Route::is(['dashboard.cities', 'dashboard.cities.*'])) --}}

    <div class="col-md-4">
            <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
                <ul class="nav flex-column text-white w-100 mt-5">
                
                <li class="mb-3">
                    <a href="#" class="accordion-button nav-link h3 text-white my-2 p-3"  data-bs-toggle="collapse" data-bs-target="#panelCountry" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <i class="bx bxs-dashboard"></i>
                        <span class="mx-2">Country</span>
                    </a>
                    <div id="panelCountry" class="accordion-collapse collapse @if(Route::is(['dashboard.countries', 'dashboard.countries.*'])) show @endif" aria-labelledby="panelsStayOpen-headingOne" style="">
                        <div class="accordion-body">
                            <ul>
                                <li class="mb-3">
                                    <a href="{{ route('dashboard.countries.create') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Add Country</span>
                                    </a>
                                </li>

                                <li class="mb-3">
                                    <a href="{{ route('dashboard.countries') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Countries</span>
                                    </a>
                                </li>
                            </ul>

                            
                        </div>
                      </div>
                </li>

                <li class="mb-3">
                    <a href="#" class="accordion-button nav-link h3 text-white my-2 p-3"  data-bs-toggle="collapse" data-bs-target="#panelCity" aria-expanded="true">
                        <i class="bx bxs-dashboard"></i>
                        <span class="mx-2">City</span>
                    </a>
                    <div id="panelCity" class="accordion-collapse collapse @if(Route::is(['dashboard.cities', 'dashboard.cities.*'])) show @endif">
                        <div class="accordion-body">
                            <ul>
                                <li class="mb-3">
                                    <a href="{{ route('dashboard.cities.create') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Add City</span>
                                    </a>
                                </li>

                                <li class="mb-3">
                                    <a href="{{ route('dashboard.cities') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Cities</span>
                                    </a>
                                </li>
                            </ul>

                            
                        </div>
                      </div>
                </li>


                <li class="mb-3">
                    <a href="#" class="accordion-button nav-link h3 text-white my-2 p-3"  data-bs-toggle="collapse" data-bs-target="#panelProfession" aria-expanded="true">
                        <i class="bx bxs-dashboard"></i>
                        <span class="mx-2">Profession</span>
                    </a>
                    <div id="panelProfession" class="accordion-collapse collapse @if(Route::is(['dashboard.professions', 'dashboard.professions.*'])) show @endif">
                        <div class="accordion-body">
                            <ul>
                                <li class="mb-3">
                                    <a href="{{ route('dashboard.professions.create') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Add Profession</span>
                                    </a>
                                </li>

                                <li class="mb-3">
                                    <a href="{{ route('dashboard.professions') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Professions</span>
                                    </a>
                                </li>
                            </ul>

                            
                        </div>
                      </div>
                </li>



                <li class="mb-3">
                    <a href="#" class="accordion-button nav-link h3 text-white my-2 p-3"  data-bs-toggle="collapse" data-bs-target="#panelShift" aria-expanded="true">
                        <i class="bx bxs-dashboard"></i>
                        <span class="mx-2">Shift</span>
                    </a>
                    <div id="panelShift" class="accordion-collapse collapse @if(Route::is(['dashboard.shifts', 'dashboard.shifts.*'])) show @endif">
                        <div class="accordion-body">
                            <ul>
                                <li class="mb-3">
                                    <a href="{{ route('dashboard.shifts.create') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Add Shift</span>
                                    </a>
                                </li>

                                <li class="mb-3">
                                    <a href="{{ route('dashboard.shifts') }}" class="nav-link h3 text-white my-2">
                                        <i class="bx bxs-dashboard"></i>
                                        <span class="mx-2">Shifts</span>
                                    </a>
                                </li>
                            </ul>

                            
                        </div>
                      </div>
                </li>

                
                <li href="#" class="mb-3">
                    <a href="#" class="nav-link h3 text-white my-2">
                        <i class="bx bx-user-check"></i>
                        <span class="mx-2">Profile</span>
                    </a>
                </li>
                <li href="#" class="mb-3">
                    <a href="#" class="nav-link h3 text-white my-2">
                        <i class="bx bx-conversation"></i>
                        <span class="mx-2">Contact</span>
                    </a>
                </li>
                </ul>
            
            </div>
    </div> 
    
    <div class="col-md-8">
        <!-- Main Wrapper -->
        <div class="p-1 my-container active-cont">
            @yield('dashboard-content')
            {{-- <h3 class="text-dark p-3">RESPONSIVE SIDEBAR NAV 💻 📱 </h3>
            <p class="px-3">Responsive navigation sidebar built using <a class="text-dark" href="https://getbootstrap.com/">Bootstrap 5</a>.</p>
            <p class="px-3"><a href="https://github.com/harshitjain-hj" class="text-dark">Checkout my Github</a></p> --}}
        </div>
    </div>



</div>

      
@endsection