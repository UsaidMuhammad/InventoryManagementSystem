<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pagetitle' => 'Customers',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/data-tables/js/jquery.dataTables.min.js',
                'plugins/data-tables/data-tables-script.js'
            ],
            'css' => [
                '/js/plugins/data-tables/css/jquery.dataTables.min.css',
            ],
            'customers' => Customers::get()
        ];
        return view('customers.index',$data);
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
        
        return view('customers.create', $data);
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
            'email' => 'bail|required|email',
            'number' => 'required|numeric'
        ]);

        $customer = new Customers;
        $customer->customer_name = $request->name;
        $customer->customer_email = $request->email;
        $customer->customer_number = $request->number;

        $customer->save();

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // will not be used
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'pagetitle' => 'Customers',  
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/jquery-validation/jquery.validate.min.js',
                'plugins/jquery-validation/additional-methods.min.js'
            ],
            'customer_edit' => Customers::find($id)
        ];
        
        return view('customers.create', $data);
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
     * @param  void
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
}
