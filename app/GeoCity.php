<?php

namespace App;

use App\GeoProvince;

use Illuminate\Database\Eloquent\Model;

class GeoCity extends Model
{	
	protected $fillable = ['geo_province_id', 'name'];
	
    public function Province(){
    	return $this->belongsTo(GeoProvince::class, 'geo_province_id');
    }
}
