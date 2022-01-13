<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        return view('admin.dashboard');
       // return view('home');
    }
    public function allUsers(){

        return view('admin.users.index');
    }

    public function allwaterdirnk(){

        return view('admin.water.index');
    }

    public function allbrands(){

        return view('admin.brands.index');
    }
    public function myAccount(){
        return view('admin.accountSetting');
        
    }

    public function alltype(){

        return view('admin.type.index');
    }

    public function allvolume(){

        return view('admin.volume.index');
    }

    public function allminerals(){

        return view('admin.minerals.index');
    }

   
}
