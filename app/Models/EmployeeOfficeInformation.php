<?php

namespace App\Models;

use App\Models\Shift;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeOfficeInformation extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        'date_of_joining'
    ];
    protected $table = 'employee_office_informations';
    protected $fillable = ['profession_id','date_of_joining', 'experience', 'is_notice_period', 'is_remote', 'salary', 'gender', 'profession_id ', 'shift_id'];

    public function employee() : HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function profession() : BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    public function shift() : BelongsTo
    {
        return $this->belongsTo(Shift::class);
    }

}
