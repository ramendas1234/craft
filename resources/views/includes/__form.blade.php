@if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<form method="post" action="{{ route('employees.store') }}" >
    @csrf

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h5 class="mb-2 text-primary">Personal Information</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
            <div class="mb-3">
                <label for="fullName">First Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter first name" value="{{ old('name') }}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
            <div class="mb-3">
                <label for="fullName">Last Name</label>
                <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Enter last name" value="{{ old('surname') }}">
            </div>
            @error('surname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="eMail">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="eMail" placeholder="Enter email ID" value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter phone number" value="{{ old('phone') }}">
            </div>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="street">Street</label>
                <input type="text" class="form-control" name="street" id="street" placeholder="Street No." value="{{ old('street') }}">
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="pin">Pin</label>
                <input type="text" class="form-control @error('pin') is-invalid @enderror" name="pin" id="pin" placeholder="Enter pin number" value="{{ old('pin') }}">
            </div>
            @error('pin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="country">Country</label>
                <select  id="country-dropdown" class="form-select @error('country') is-invalid @enderror" name="country">
                    <option value="">-- Select Country --</option>
                    @foreach ($countries as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="city">City</label>

                <select  id="city-dropdown" class="form-select @error('city') is-invalid @enderror" name="city">
                    <option value="">-- Select city --</option>
                </select>
            </div>
            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h5 class="mb-2 text-primary">Office Information</h5>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="company">Company Branch</label>

                <select  id="company" class="form-select @error('company') is-invalid @enderror" name="company">
                    <option value="">-- Select Branch --</option>
                    @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('company')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="profession">Profession</label>

                <select  id="profession" class="form-select @error('profession') is-invalid @enderror" name="profession">
                    <option value="">-- Select Profession --</option>
                    @foreach ($professions as $profession)
                    <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('profession')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="experience">Experience</label>
                <input type="number" class="form-control @error('experience') is-invalid @enderror " name="experience" placeholder="experience" value="{{ old('experience') }}">
            </div>
            @error('experience')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="salary">Salary</label>
                <input type="number" class="form-control @error('salary') is-invalid @enderror " name="salary" placeholder="salary" value="{{ old('salary') }}">
            </div>
            @error('salary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="date_of_joining">Date Of Joining</label>
                <input type="date" class="form-control @error('date_of_joining') is-invalid @enderror " name="date_of_joining"  value="{{ old('date_of_joining') }}">
            </div>
            @error('date_of_joining')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">

                <label for="notice_period">Currently Notice Period</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_notice" value="1" id="is_notice_yes">
                        <label class="form-check-label" for="is_notice_yes">
                        Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_notice" value="0" id="is_notice_no">
                        <label class="form-check-label" for="is_notice_no">
                        No
                        </label>
                    </div>
                
            </div>
            @error('notice_period')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">

                <label for="is_remote">Is Remote?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_remote" value="1" id="is_remote_yes">
                        <label class="form-check-label" for="is_remote_yes">
                        Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_remote" value="0" id="is_remote_no">
                        <label class="form-check-label" for="is_remote_no">
                        No
                        </label>
                    </div>
                
            </div>
            @error('is_remote')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="gender">Gender</label>

                <select  id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender">
                    <option value="">-- Select Gender --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <label for="shift">Shifts</label>

                <select  id="shift" class="form-select @error('shift') is-invalid @enderror" name="shift">
                    <option value="">-- Select Shift --</option>
                    @foreach ($shifts as $shift)
                    <option value="{{ $shift->id }}">{{ $shift->duty }}</option>
                    @endforeach
                    
                </select>
            </div>
            @error('shift')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>






    </div>
    
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="text-right">
                <input type="submit" class="btn btn-primary" value="Save" />
            </div>
        </div>
    </div>
</form>
