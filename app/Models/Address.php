<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Address extends Model
{
    use HasFactory;
    protected $fillable = ['street','pincode', 'city_id', 'contact_id'];

    protected $table = 'address';

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    
    
}
