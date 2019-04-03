<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    
    /**
     * Create a new instance
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Return a view add person
     *
     * @return \Illuminate\Http\Response
     */
    public function addForm()
    {
    	return view('victim.new');
    }

    /**
     *
     *
     *
     */
    public function store()
    {
    	//TODO 
    }
}
