<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class CustomLoginController extends Controller
{
    

    public function Register(Request $request){
        
        

		$this->validate($request, [
            'email' => 'required|unique:users,email|email|max:255',
            'name'  =>  'required|unique:users,name|alpha_dash|min:5',
            'password'  =>  'required|min:6',
            'password_confirmation'	=>	'required|same:password',
            'terms' => 'required'
        ]);

       

        $user = User::create([
            'name'  => $request->name,
            'email' =>  $request->email,
            'password'  =>  bcrypt($request->password),
        ]);

        
        
        //Mail::send(new VerifyEmail($user));


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        
            return redirect('/home');
        }

        return back();
	}

}
