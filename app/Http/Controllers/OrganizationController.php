<?php

namespace App\Http\Controllers;

use App\{
    Model\Volunteer,
    Model\VolunteerAsset,
    Repositories\Contracts\Organization
};
use Illuminate\{
    Http\Request,
    Support\Facades\DB
};

class OrganizationController extends Controller
{

    /**
     * The organization repository implementation
     *
     * @var \App\Model\Organization
     */
    protected $organization;

    /**
     * Create a new instance
     *
     * @return void
     */
    public function __construct(Organization $organization)
    {
        $this->organization = $organization;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('organizations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findVolunteersView()
    {
        return view('organizations.find-volunteers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function findVolunteers(Request $request)
    {
        $volunteerId = session('volunteerId');

        // This code will produce a query like this: 
        // SELECT * FROM volunteers_assets WHERE assets_id IN (1, 2) 
        // AND WHERE volunteers_id = $volunteerId
        $volunteerAssets = VolunteerAsset::whereIn(
            'assets_id', $request->ajuda
        )->where('volunteers_id', '=', $volunteerId)
        ->get();

        //session(
        //    ['countVolunteers' => ]
        //);
    }

    /**
     * Display the new message form.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newMessage()
    {
        return view('organizations.new-message');
    }
}
