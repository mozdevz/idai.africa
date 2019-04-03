<?php
/**
 * Created by PhpStorm.
 * User: joseseie
 * Date: 3/31/19
 * Time: 8:38 PM
 */

namespace App\Traits;


use App\User;
use TCG\Voyager\Models\Role;

trait IDAITraithelper
{
    public function isAdminUser(User $user)
    {
        //Checking if the user has admin role
        return Role::where('name', 'admin')->where('id', $user->role_id)->first();
    }
    public function isNormalUser(User $user)
    {
        //Checking if the user has Normal role
        return Role::where('name', 'user')->where('id', $user->role_id)->first();
    }
    public function isContentManagerUser(User $user)
    {
        //Checking if the user has Normal role
        return Role::where('name', 'Content Manager')->where('id', $user->role_id)->first();
    }


}