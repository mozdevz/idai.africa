<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
    	'fullname', 'telephone', 
    	'password', 'email', 
        'geo_city_id', 'is_verified', 
        'channel_id', 'verification_code', 
        'created_at', 'updated_at', 
        'user_id'
    ];

    /**
     * The relationship with user
     *
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
