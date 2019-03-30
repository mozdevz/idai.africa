<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    
    public function addForm(){
    	return view('victim.new');
    }
}
