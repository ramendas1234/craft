<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeOfficeInformation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','contact_id', 'company_id', 'employee_office_information_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'persons';

     /**
     * Get the phone associated with the user.
     */
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function employeeOfficeInformation(): BelongsTo
    {
        return $this->belongsTo(EmployeeOfficeInformation::class);
    }
}
