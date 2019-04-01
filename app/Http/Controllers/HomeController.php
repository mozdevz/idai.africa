<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer\Volunteer;
use App\GeoProvince;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $province_id = null )
    {   
        $volunteer = Volunteer::with([ 
            'City' => function ($query){ return $query->with('Province')->get(); }
        ])->where('user_id', Auth::user()->id)->first();

        $provinces = GeoProvince::with('GeoCity')->get();
  
        if (!is_null($province_id)) {
            $province = GeoProvince::with('GeoCity')->where('id',$province_id)->first();
            
        }else{

            $province = GeoProvince::with('GeoCity')->first();
        }

        return view('home')
        ->with('volunteer', $volunteer)
        ->with('provinces', $provinces)
        ->with('province', $province);
        ;
    }
}
