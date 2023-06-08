<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\City;
use App\Models\User;
use App\Models\Shift;
use App\Models\Company;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Profession;

use App\Http\Services\Unit;
use Illuminate\Http\Request;
use App\Http\Services\AreaService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use App\Exceptions\InvalidOrderException;
use Illuminate\Database\Eloquent\RelationNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomePageController extends Controller
{
    //
   public function displayHome(Request $request){
        $countries = Country::all();
        $professions = Profession::all();
        $companies = Company::all();
        $shifts = Shift::all();
        
        return view('home', ['countries'=> $countries, 'professions'=>$professions, 'companies'=> $companies, 'shifts'=>$shifts]);
   } 


   public function fetchCitiesByCountry(Request $request){
      $country_id = $request->input('country_id') ;
      $cities = City::where('country_id', $country_id)->get(['id', 'name']);
      return response()->json(['cities' => $cities]);
   }

   public function displayArea(AreaService $area){
     
     //dd(app()->make('areaservice')->areaOfRegtangle());
     dd($area);
   }

   public function displayExceptionHandler(){
     
      try{
         $user = Employee::findOrFail(32);
         $user->load(['projects']);
         return $user ;
      }
      catch(ModelNotFoundException $e){
         return view('errors.model-empty');
      }
      catch(RelationNotFoundException $e){
         return view('errors.model-relationship-not-found');
      }
      // catch(Exception $e){
      //    echo $e->getMessage();
      // }
    }

   public function queryBuilderTest(Request $request){
      //$users = DB::table('persons')->pluck('name', 'id');
      /*$users = DB::table('persons')->orderBy('id')->chunk(5, function (Collection $users) {
         
         foreach ($users as $user) {
           
            
         }
     }); */
     //$users = DB::table('persons')->where('company_id', 3)->count();
     //$users = DB::table('persons')->select('company_id')->distinct()->get();
     //$users = DB::table('persons')->select(DB::raw('count(id) as user_count'), 'company_id')->groupBy('company_id')->get();
     //$users = DB::table('persons')->rightJoin('employee_office_informations', 'persons.employee_office_information_id', '=', 'employee_office_informations.id')->select('*')->get();

     
     /*  Practice complex level where clause */
     //$cities = DB::table('cities')->select('id')->where('country_id','=',17);
     //$contacts = DB::table('address')->select('contact_id')->whereIn('city_id', $cities);
     //$persons_of_usa = DB::table('persons')->whereIn('contact_id', $contacts)->get();


     /*$persons_of_usa = DB::table('persons')->whereIn('contact_id', function(Builder $query) use ( $cities ) {
            $query->select('contact_id')->from('address')->whereIn('city_id', $cities);
     })->get();*/

     /*$persons_of_usa = DB::table('persons')->whereIn('contact_id', function(Builder $query) {
            $query->select('contact_id')->from('address')->whereIn('city_id', function(Builder $query){
               $query->select('id')->from('cities')->where('country_id','=',1);
            });
     })->join('employee_office_informations', 'persons.employee_office_information_id', '=', 'employee_office_informations.id')->get();
     dd($persons_of_usa); */


     /* Practice having clause */

     $persons_groupby_company = DB::table('persons')->join('companies', 'persons.company_id', '=', 'companies.id')
                                 ->select(DB::raw('count(persons.id) as numberofemployee'), 'company_id', 'companies.name' )
                                 ->groupBy('persons.company_id', 'companies.name')
                                 ->get();
     dd($persons_groupby_company);



      
   }


   public function collectionTest(Request $request){
      $players = collect(['taylor', 'abigail', null])->map(function ($name) {
            return strtoupper($name);
      })->reject(function ($name) {
            return empty($name);
      });

      dd($players);
   }

}
