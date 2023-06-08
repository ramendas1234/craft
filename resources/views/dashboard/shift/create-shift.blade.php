 @extends('../../dashboard/dashboard');
@section('dashboard-content')

<form method="post" action="{{ route('dashboard.shifts.store') }}" >
    @csrf
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
        <div class="mt-5 mb-3">
            <input type="text" class="form-control @error('duty') is-invalid @enderror" name="duty" placeholder="Add Duty" value="{{ old('duty') }}">
        </div>
        @error('duty')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    
    
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="mb-3">
                <label>Start Time:</label>
                <input type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" placeholder="Start Time" value="{{ old('start_time') }}">
            </div>
            @error('start_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="mb-3">
                <label>End Time:</label>
                <input type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" placeholder="End Time" value="{{ old('end_time') }}">
            </div>
            @error('end_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-right">
            <input type="submit" class="btn btn-dark" value="Save" />
        </div>
    </div>
</form>    
@endsection
