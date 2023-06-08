<x-mail::message>
# New Employee Inserted {{ $data->name }}
Hello Admin,
New Employee has been inserted in your system. 
<x-mail::panel>
Details :
------------
- Name : {{ $data->name.' '. $data->surname }} 
- Company : {{ $data->company->name }}
- Email : {{ $data->contact->email->email }}



</x-mail::panel>


<x-mail::button :url="$url" color="success">
Go to Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
