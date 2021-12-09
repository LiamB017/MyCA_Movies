<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    public function index()
    {
        return view('user.home');
        
    }
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
              abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) ||
           abort(401, 'This action is unauthorized.');
        
    }
 
 
     public function hasAnyRole($roles)
     {
       return null !== $this->roles()->whereIn('name', $roles)->first();
    }
 
   
 
    public function hasRole($role)
     {
       return null !== $this->roles()->where('name', $role)->first();
    }
 
}
