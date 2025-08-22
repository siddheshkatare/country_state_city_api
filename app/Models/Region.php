<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';

    protected $fillable = [
        'name',
        'flag',
        'wikiDataId',
        'created_at',
        'updated_at',
    ];

    public function subregions()
    {
        return $this->hasMany(SubRegion::class);
    }
}
