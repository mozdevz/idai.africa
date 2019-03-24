<?php

namespace App;

use Models\Condition;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name','neighborhood', 'age', 'gender', 'condition_id', 'photo_url','condition_description','created_at','updated_at'];
    // Condition_id = missing/safe/

    public function condition(){
    	return $this->belongsTo(Condition::class);
    }


}
