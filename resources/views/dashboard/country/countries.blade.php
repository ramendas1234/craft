 @extends('../../dashboard/dashboard');
@section('dashboard-content')

    <table class="table">
        <thead>
        <tr>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($countries as $country)
            <tr>
                <td>{{ $country->name }}</td>
            </tr>
        @empty
            <tr>
                <td>No country found.</td>
            </tr>
        @endforelse    
        
        </tbody>
    </table>
@endsection
