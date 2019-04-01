<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Category;
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

		$volunteer = Volunteer::where('user_id', Auth::user()->id)->first();

		//validate celphone number

		if (!is_null($volunteer)) {

			$volunteer->geo_city_id =  $request->city;
			$volunteer->telephone = $request->celphone;
			
			$volunteer->save();			
		}

		if (is_null($volunteer)) {
				$volunteer = Volunteer::Create([
				'user_id'	=>	Auth::user()->id,
				'telephone'	=>	$request->celphone,
				'geo_city_id'	=>	$request->city,
			]);
		}
		
		
		return redirect(route('add_volunteer_category_form'));
	}

	public function AddVolunteerCategory(Request $request){

		$volunteer =  Volunteer::with('Category')->where('user_id', Auth::user()->id)->first();
		
		$local_cat = Category::where('is_locale', 1)->get();
		$remote_cat = Category::where('is_remote', 1)->get();

		$volunteer_category_ids = array();

		foreach ($volunteer->category as $category) {
			 array_push($volunteer_category_ids, $category->id);
		}

		return view('volunteer.addcatform')
		->with('remote', $remote_cat)
		->with('volunteer_cats', $volunteer_category_ids)
		->with('locale', $local_cat);
	}

	public function StoreVolunteerCategory(Request $request){

		$volunteer = Volunteer::where('user_id', Auth::user()->id)->first();

		$volunteer->Category()->sync($request->cat);

		//flash('Thank your for your Volunteering, Please be in alleet as we can contact you asap', 'success');

		return redirect('/home');
		
	}
    
}
