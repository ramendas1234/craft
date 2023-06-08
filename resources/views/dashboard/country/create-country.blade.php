 @extends('../../dashboard/dashboard');
@section('dashboard-content')

<form method="post" action="{{ route('dashboard.countries.store') }}" >
    @csrf
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
        <div class="mt-5 mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Add Country" value="{{ old('name') }}">
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
