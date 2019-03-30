<?php

namespace App\Models;

use App\Models\Victim;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{

	protected $fillable = ['id','condition_status','created_at','updated_at'];
    
}
