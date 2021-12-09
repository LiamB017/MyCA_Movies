<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }
    public function index()
    {
        $user = Auth::user();

        $user->authorizeRoles('admin');
        
        return view('admin.home');
    }
}
