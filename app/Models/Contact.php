<?php

namespace App\Models;

use App\Models\Email;
use App\Models\Phone;
use App\Models\Address;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact';

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function email(): HasOne
    {
        return $this->hasOne(Email::class);
    }

    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }


}
