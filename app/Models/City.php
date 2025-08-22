<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'name',
        'state_id',
        'state_code',
        'country_id',
        'country_code',
        'latitude',
        'longitude',
        'created_at',
        'updated_at',
        'flag',
        'wikiDataId',
    ];

    public function state()
    {
        return $this->belongsTo(State::class,'state_id','id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
}
