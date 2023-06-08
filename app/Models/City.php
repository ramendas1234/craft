<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country_id'];

    public function address()
    {
        return $this->hasMany(Address::class, 'city_id');
    }

    // public function scopeKolkata(Builder $query)
    // {
    //     $query->where('id', 1);
    // }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
