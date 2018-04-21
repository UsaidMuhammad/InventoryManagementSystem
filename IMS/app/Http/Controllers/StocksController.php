<?php

namespace App\Http\Controllers;

use App\Stocks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pagetitle' => 'Stocks',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/data-tables/js/jquery.dataTables.min.js',
                'plugins/data-tables/data-tables-script.js'
            ],
            'css' => [
                '/js/plugins/data-tables/css/jquery.dataTables.min.css',
            ],
            'stocks' => Stocks::get(),
        ];
        return view('stocks.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  will not be used
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // will not be used
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function show(Stocks $stocks)
    {
        // will not be used
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function edit(Stocks $stocks)
    {
        $data = [
            'pagetitle' => 'Stocks',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/data-tables/js/jquery.dataTables.min.js',
                'plugins/data-tables/data-tables-script.js'
            ],
            'css' => [
                '/js/plugins/data-tables/css/jquery.dataTables.min.css',
            ],
            'stocks' => $stocks
        ];
        return view('stocks.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stocks $stocks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stocks $stocks)
    {
        // will not be used
    }
}
