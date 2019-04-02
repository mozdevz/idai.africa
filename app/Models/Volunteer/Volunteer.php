<?php

namespace App\Models\Volunteer;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Asset;  
use App\Category;
use App\GeoCity;

class Volunteer extends Model
{
    
    protected $fillable = [ "user_id", "fullname", "telephone", "password", "email", "geo_city_id", "is_verified", "channel_id", "verification_code", "created_at", "updated_at" ];

    public function User (){
    	return $this->belongsTo(User::class);
    }

    public function Category(){
    	return $this->belongsToMany(Category::class);
    }

    public function City(){
    	return $this->belongsTo(GeoCity::class, 'geo_city_id');
    }

    public function Asset(){
        return $this->belongsToMany(Asset::class);
    }

}
