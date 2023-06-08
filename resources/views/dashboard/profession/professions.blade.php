 @extends('../../dashboard/dashboard');
@section('dashboard-content')

    <table class="table">
        <thead>
        <tr>
            <th>Professions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($professions as $profession)
            <tr>
                <td>{{ $profession->name }}</td>
            </tr>
        @empty
            <tr>
                <td>No Profession found.</td>
            </tr>
        @endforelse    
        
        </tbody>
    </table>
@endsection
