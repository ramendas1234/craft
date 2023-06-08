<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Profession;
use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    //
    public function showdashboard(Request $request)
    {

        return view('dashboard.dashboard');
    }

    public function createCountry(Request $request)
    {
        return view('dashboard.country.create-country');
        // return view('dashboard.dummy');
    }

    public function storeCountry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Country, "name"',
        ]);

        if($validated){
            $country_name = $validated['name'];
            $country = new Country();
            $country->name = $country_name ;
            $country->save();
        }
        return redirect()->back()->with('status', 'Country Inserted Successfully!');
        
    }

    public function listCountries()
    {
        return view('dashboard.country.countries', ['countries'=>Country::latest()->get()]);
    }



    public function createCity(Request $request)
    {
        return view('dashboard.city.create-city', ['countries' => Country::all()]);
        // return view('dashboard.dummy');
    }

    public function storeCity(Request $request)
    {

        $validated = $request->validate([
            'country' => 'required',
            'name' => 'required|unique:App\Models\City, "name"',
        ]);

        if($validated){
            $country = $validated['country'];
            $city_name = $validated['name'];
            $city = new City();
            $city->name = $city_name ;
            $city->country_id = $country ;
            $city->save();
        }

        $request->session()->flash('status', 'City Inserted Successfully!');
        return redirect()->route('dashboard.cities');
        
    }

    public function listCities()
    {
        return view('dashboard.city.cities', ['cities'=>City::latest()->get()]);
    }

    public function createProfession(Request $request)
    {
        return view('dashboard.profession.create-profession');
        // return view('dashboard.dummy');
    }

    public function storeProfession(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\Profession, "name"',
        ]);

        if($validated){
            $profession_name = $validated['name'];
            $profession = new Profession();
            $profession->name = $profession_name ;
            $profession->save();
        }
        $request->session()->flash('status', 'Profession Inserted Successfully!');
        return redirect()->route('dashboard.professions');
        
    }

    public function listProfessions()
    {
        return view('dashboard.profession.professions', ['professions'=>Profession::latest()->get()]);
    }


    public function createShift(Request $request)
    {
        return view('dashboard.shift.create-shift');
        // return view('dashboard.dummy');
    }

    public function storeShift(Request $request)
    {
        $rules = [
            'duty' => 'required|unique:App\Models\Shift, "duty"',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ];

        $messages = [
            'duty.required' => 'The :attribute can not be empty.',
            'end_time.after' => 'End time must be greater than start time'
        ];
        $validated = Validator::make($request->all(), $rules , $messages)->validate();
        

       

        // $validated = $request->validate([
        //     'duty' => 'required|unique:App\Models\Shift, "duty"',
        //     'start_time' => 'required',
        //     'end_time' => 'required',
        // ]);

        if($validated){
            $shift = new Shift();
            // $shift = Shift::make([
            //  'duty'=> $validated['duty'],
            //  'start_time'=> $validated['start_time'],
            //  'end_time'=> $validated['end_time']
            
            // ]);
            $shift->duty = $validated['duty'] ;
            $shift->start_time = $validated['start_time'] ;
            $shift->end_time = $validated['end_time'] ;
            $shift->save();
        }
        $request->session()->flash('status', 'Profession Inserted Successfully!');
        return redirect()->route('dashboard.shifts');
        
    }

    public function listShifts()
    {
        return view('dashboard.shift.shifts', ['shifts'=>Shift::latest()->get()]);
    }


}
