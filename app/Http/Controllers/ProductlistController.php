<?php

namespace App\Http\Controllers;

use App\productlist;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function supply()
    {
        return view('supply');
    }
    public function login1()
    {
        return view('login1');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             //check validation
        $this->validate($request,[

            
            'pname' => 'required | string |max:191',
            'pamount' => 'required | string | max :191',
            
        ]);

         
        //insert data into  table
        $productlist = new productlist;
        $productlist->pname = $request->pname;
        $productlist->pamount= $request->pamount;
        $productlist->save();

        return redirect()->route('supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productlist  $productlist
     * @return \Illuminate\Http\Response
     */
    public function show(productlist $productlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productlist  $productlist
     * @return \Illuminate\Http\Response
     */
    public function edit(productlist $productlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productlist  $productlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productlist $productlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productlist  $productlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(productlist $productlist)
    {
        //
    }
}
