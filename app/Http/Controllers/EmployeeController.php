<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Events\UserCreateDone;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Models\EmployeeOfficeInformation;
use App\Mail\NotifyAdminNewEmployeeInsert;
use App\Http\Requests\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        //$employee = Employee::with(['company', 'contact.email'])->find(38);
        //event(new UserCreateDone($employee));
        $employees = Employee::with(['contact.email', 'contact.phone','contact.address', 'contact.address.city', 'contact.address.city.country'])->get() ;
        return response(view('employees.employees', ['employees' => $employees]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request): RedirectResponse
    {
        //
        $validatedData = $request->validated();
        
        if($validatedData){

            // save employee metadata
            $employee_meta = EmployeeOfficeInformation::create(
                [
                    'date_of_joining' => $validatedData['date_of_joining'],
                    'experience' => $validatedData['experience'],
                    'is_notice_period' => $validatedData['is_notice'],
                    'is_remote' => $validatedData['is_remote'],
                    'salary' => $validatedData['salary'],
                    'gender' => $validatedData['gender'],
                    'profession_id' => $validatedData['profession'],
                    'shift_id' => $validatedData['shift'],
                ]
            );

            

            $contact = new Contact();
            $contact->save();
            $contact->employee()->create([
                'name'=>$validatedData['name'],
                'surname'=> $validatedData['surname'],
                'employee_office_information_id' => $employee_meta->id ,
                'company_id' => $validatedData['company']  
            ]);
            $contact->email()->create([
                'email' => $validatedData['email']
            ]);
            $contact->phone()->create([
                'phone' => $validatedData['phone']
            ]);

            // creating new city
            $city = $validatedData['city'] ;
            
            // save address
            $contact->address()->create([
                'street' => $validatedData['street'],
                'pincode' => $validatedData['pin'],
                'city_id' => $city
            ]);


            event(new UserCreateDone($contact->employee));

            //dd($contact->employee);
            //$contact->employee->employeeInformation()->associate($employee_meta);

            
            

        }
        

        return redirect()->back()->with('status', 'Employee Inserted Successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        //
    }
}
