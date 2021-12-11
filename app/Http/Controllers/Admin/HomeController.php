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
     $this->middleware('role:admin');
    }
    //  @return \Illuminate\Contracts\Support\Renderable
    public function index()
    {
       
        return view('admin.home');
    }
}
