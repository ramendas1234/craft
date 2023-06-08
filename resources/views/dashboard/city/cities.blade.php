 @extends('../../dashboard/dashboard');
@section('dashboard-content')

    <table class="table">
        <thead>
        <tr>
            <th>Cities</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($cities as $city)
            <tr>
                <td>{{ $city->name }}</td>
                <td>{{ $city->country->name }}</td>
            </tr>
        @empty
            <tr>
                <td>No city found.</td>
            </tr>
        @endforelse    
        
        </tbody>
    </table>
@endsection
