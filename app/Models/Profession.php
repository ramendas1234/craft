<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeOfficeInformation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profession extends Model
{
    use HasFactory;

    public function employeeInformations() : HasMany
    {
        return $this->hasMany(EmployeeOfficeInformation::class) ;
    }
}
