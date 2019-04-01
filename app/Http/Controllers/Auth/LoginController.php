<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\IDAITraithelper;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers; //Default Laravel Trait
    use IDAITraithelper;    //Extra Idai Trait

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.idai-login');
    }

    /**
     * This method allows both Volunteers and Organizations to be redirected to
     * the correct home page after auth, based on the user role.
     *
     * @param Request $request
     * @param $user: the autenticated user
     *
     */
    protected function authenticated(Request $request, $user)
    {
        if ($this->isAdminUser($user)) return redirect()->route('organizations.findVolunteersView');
        if ($this->isNormalUser($user)) return redirect()->route('home');

        dd('User has no role');
    }



}
