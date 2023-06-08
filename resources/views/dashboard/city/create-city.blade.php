 @extends('../../dashboard/dashboard');
@section('dashboard-content')

<form method="post" action="{{ route('dashboard.cities.store') }}" >
    @csrf
    

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
        <div class="mt-5 mb-3">
            <select class="form-control @error('country') is-invalid @enderror" name="country">
                    <option value="">--select country--</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
                
            </select>
        </div>
        @error('country')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
        <div class="mt-5 mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Add City" value="{{ old('name') }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-right">
            <input type="submit" class="btn btn-dark" value="Save" />
        </div>
    </div>
</form>    
@endsection
