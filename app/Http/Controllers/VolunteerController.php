<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Models\Volunteer\Volunteer;

class VolunteerController extends Controller
{

	public function addVolunteer(Request $request, User $user)
	{
		$this->validate($request, [
			'province'	=>	'required|exists:geo_provinces,id|integer',
			'city'		=>	'required|exists:geo_cities,id|integer',
			'celphone'		=>	'required|string|size:9',
		]);

		//validate celphone number

		$volunteer = Volunteer::Create([
			'user_id'	=>	Auth::user()->id,
			'telephone'	=>	$request->celphone,
			'geo_city_id'	=>	$request->city,
		]);

		dd($volunteer);

		redirect(route('add_volunteer_category_form'));
	}

	public function AddVolunteerCategory(Request $request){
		return view('add.catform');
	}
    
}
