<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRegions extends Model
{
    use HasFactory;

    protected $table = 'subregions';

    protected $fillable = [
        'name',
        'region_id',
        'translations',
        'flag',
        'wikiDataId',
        'created_at',
        'updated_at',
    ];
}
