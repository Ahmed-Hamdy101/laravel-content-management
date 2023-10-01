<?php

namespace App\Http\Controllers;

use App\Models\Catagory;

use App\Models\Category;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $catagory = Catagory::all();
         return view('/pages/catagory/index',compact('catagory'));

        $c = Category::all();
        return view('/pages/catagory/index',compact('c'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/catagory/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catagory= $request->catagory;

        $catagories = Category::create([
            'name' => $catagory,
        ]);
        return redirect('/catagory/')->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


}
