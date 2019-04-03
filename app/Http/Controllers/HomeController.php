<?php

namespace App\Http\Controllers;

use App\Models\GeoProvince;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, int $provinceId = null)
    {
        $provinces = GeoProvince::with('GeoCity')->get();
  
        $province = is_null($provinceId) 
                        ? GeoProvince::with('GeoCity')->first()
                        : GeoProvince::with('GeoCity')
                            ->where('id', $provinceId)->first();

        return view(
            'home', 
            compact('provinces', 'province')
        );
    }
}
