<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GeoCity;
class GeoProvince extends Model
{
    protected $fillable = ['id', 'name'];

    public function GeoCity(){
    	return $this->hasMany(GeoCity::class);
    }
}
