<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productlist;

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
    public function supplier()
    {
        $productlists = productlist::all();
        return view('supplier')->with('productlists',$productlists);
    }

    public function comuser()
    {
        $productlists = productlist::all();
        return view('comuser')->with('productlists',$productlists);
    }
}
