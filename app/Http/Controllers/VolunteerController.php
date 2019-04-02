<?php

namespace App\Http\Controllers;

use App\{
	Http\Requests\VolunteerRequest as Request,
	Models\Volunteer
};
use Illuminate\{
	Http\Request as LaravelRequest,
	Support\Facades\Auth
};

class VolunteerController extends Controller
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
	 * Store the volunteer in the storage
	 *
	 * @param  $request  Request
	 * @return \Illuminate\Http\Response
	 */
	public function addVolunteer(Request $request)
	{
		Volunteer::create([
			'telephone'	=> $request->telephone,
			'geo_city_id' => $request->city,
			'user_id' => Auth::user()->id,
		]);

		return redirect(
			route('volunteers.addVolunteerCategory')
		);
	}

	/**
	 *
	 *
	 *
	 */
	public function addVolunteerCategory(LaravelRequest $request)
	{
		return view('welcome');
	}   
}
