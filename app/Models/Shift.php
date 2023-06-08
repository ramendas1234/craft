<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\EmployeeOfficeInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shift extends Model
{
    use HasFactory;

    public function employeeInformations() : HasMany
    {
        return $this->hasMany(EmployeeOfficeInformation::class) ;
    }
}
