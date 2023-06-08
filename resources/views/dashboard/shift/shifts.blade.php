 @extends('../../dashboard/dashboard');
@section('dashboard-content')

    <table class="table">
        <thead>
        <tr>
            <th>Shifts</th>
            <th>Start Time</th>
            <th>End Time</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($shifts as $shift)
            <tr>
                <td>{{ $shift->duty }}</td>
                <td>{{ $shift->start_time }}</td>
                <td>{{ $shift->end_time }}</td>
            </tr>
        @empty
            <tr>
                <td>No Profession found.</td>
            </tr>
        @endforelse    
        
        </tbody>
    </table>
@endsection
