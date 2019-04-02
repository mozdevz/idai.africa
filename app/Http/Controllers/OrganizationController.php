<?php

namespace App\Http\Controllers;

use App\{
    Models\Asset, 
    Models\Category,
    Models\Volunteer,
    Models\VolunteerAsset,
    Models\VolunteerCategory,
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
        // Getting $categories and $assets to show in the filter form
        $categories = Category::all();
        $assets = Asset::all();

        return view('organizations.find-volunteers', 
            compact('categories', 'assets')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function findVolunteers(Request $request)
    {
        //$volunteerId = session('volunteerId');

        // This code will produce a query like this: 
        // SELECT * FROM volunteers_assets WHERE assets_id IN (1, 2) 
        // AND WHERE volunteers_id = $volunteerId
        //$volunteerAssets = VolunteerAsset::whereIn(
            //'assets_id', $request->ajuda
        //)->where('volunteers_id', '=', $volunteerId)
        //->get();

        //session(
        //    ['countVolunteers' => ]
        //);

        $volunteerId = session('volunteerId'); //TODO: missing description for this variable

        $type = $request->local_categories ? 'Local' : 'Remote';

        $cat_list = $type === 'Local' 
                        ? $request->local_categories 
                        : $request->remote_categories;

        //TODO: include the query description in order to be clear for the devs

        if (!!$request->local_categories || !!$request->remote_categories)
        {
            //01 - quering for the volunteers assets
            $volunteerAssets = VolunteerAsset::whereIn(
                'assets_id', $request->assets ? $request->assets: []
            ) ->get();

            //02 - quering for the volunteers categories based on the list
            $volunterCategories = VolunteerCategory::whereIn(
                'category_id', $cat_list ? $cat_list : []
            ) ->get();

            //03 - Passing the result of the queries to the view (where we show the user filters result)
            return view('organizations.new-message',
                compact('type', 'volunteerAssets', 'volunterCategories')
            );

            //TODO: The code above, didn't be tested...

            //TODO: Store some data in 1-volunteers table, 2-volunteer_categories and 3.volunteer_assets
            //TODO: Query the inserted data in order to see the result
            //TODO: cache(store) data in the session
        }

        return redirect()->back()->with('warning', 'Favor selecione os filtros');
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
