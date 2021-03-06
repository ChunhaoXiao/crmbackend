<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSource;
use App\Models\Customer;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\Auth;


class DataSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $type)
    {
        if(in_array($type, ['customers', 'products', 'businesses', 'contracts', 'contacts']))
        {
            return Auth::user()->$type()->latest()->paginate();
        }

        // if($type == 'customer') {
        //    return Auth::user()->customers()->latest()->paginate(20);  //要加where('user_id', Auth::user()->id)
        // }

        // if($type == 'product') {
        //     $products = Product::latest()->paginate();
        //     return ProductResource::collection(Auth::user()->products()->paginate(20));
        // }

        // if($type == 'business') {
        //     return Auth::user()->businesses()->latest()->paginate(20);
        // }

        

        return DataSource::src($type)->paginate();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
