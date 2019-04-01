<?php

namespace App\Models\Volunteer;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Volunteer extends Model
{
    
    protected $fillable = [ "id", "fullname", "telephone", "password", "email", "geo_city_id", "is_verified", "channel_id", "verification_code", "created_at", "updated_at" ];

    public function User (){
    	return $this->belongsTo(User::class);
    }

}
