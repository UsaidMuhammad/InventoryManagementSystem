<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pagetitle' => 'Supplier',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/data-tables/js/jquery.dataTables.min.js',
                'plugins/data-tables/data-tables-script.js'
            ],
            'css' => [
                '/js/plugins/data-tables/css/jquery.dataTables.min.css',
            ],
            'suppliers' => Supplier::get()
        ];
        return view('supplier.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'pagetitle' => 'Customers',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/jquery-validation/jquery.validate.min.js',
                'plugins/jquery-validation/additional-methods.min.js'
            ]
        ];
        
        return view('supplier.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'bail|required',
            'address' => 'bail|required',
            'email' => 'bail|required|email',
            'number' => 'bail|required|numeric',
            'status' => 'required'
        ]);

        $supplier = new supplier;
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->email = $request->email;
        $supplier->number = $request->number;
        $supplier->status = $request->status;

        $supplier->save();

        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //will not be used
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
