<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     * Atrributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'username',
    	'password', 'description'
    ];
}
