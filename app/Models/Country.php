<?php

namespace App\Models;
use App\Models\City;
use App\Models\Address;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    // public function cityKolkataAddress()
    // {
    //     return $this->through('cities')->has('address');
    // }

    

    // public function cityAddress(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Address::class, City::class);
    // }
}
