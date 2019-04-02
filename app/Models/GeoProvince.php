<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\GeoCity;

class GeoProvince extends Model
{
    protected $fillable = ['id', 'name'];

    protected $table = 'geo_provinces';

    public function GeoCity()
    {
    	return $this->hasMany(GeoCity::class);
    }
}
