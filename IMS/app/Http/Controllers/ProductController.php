<?php

namespace App\Http\Controllers;

use App\Product;
use App\Supplier;
use App\Stocks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    /**
     * Init stock as soon as a product is added
     * 
     * @param App\Product $product
     * @return void
     */

    private function createStock($product)
    {
        $stock = new Stocks;

        $stock->product_id = $product->id;
        $stock->available = 0;
        $stock->required = 0;
        $stock->status = 1;

        $stock->save();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pagetitle' => 'Product',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/data-tables/js/jquery.dataTables.min.js',
                'plugins/data-tables/data-tables-script.js'
            ],
            'css' => [
                '/js/plugins/data-tables/css/jquery.dataTables.min.css',
            ],
            'products' => Product::get(),
        ];
        return view('product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'pagetitle' => 'Product',
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/jquery-validation/jquery.validate.min.js',
                'plugins/jquery-validation/additional-methods.min.js'
            ],
            'supplier' => Supplier::orderBy('name', 'asc')->get()
        ];
        
        return view('product.create', $data);
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
            'supplier' => 'bail|required',
            'description' => 'bail|required',
            'price' => 'bail|required|numeric',
            'status' => 'required',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->supplier_id = $request->supplier;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = $request->status;

        $product->save();

        // makes a stock for the resource
        $this->createStock($product);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // will not be used
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = [
            'pagetitle' => 'Product',  
            'permission' => Session()->get('permission'),
            'name' => Auth::user()->name,
            'js' => [
                'plugins/jquery-validation/jquery.validate.min.js',
                'plugins/jquery-validation/additional-methods.min.js'
            ],
            'product_edit' => $product,
            'supplier' => Supplier::orderBy('name', 'asc')->get()
        ];
        
        return view('product.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate([
            'name' => 'bail|required',
            'supplier' => 'bail|required',
            'description' => 'bail|required',
            'price' => 'bail|required|numeric',
            'status' => 'required',
        ]);

        $product->name = $request->name;
        $product->supplier_id = $request->supplier;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = $request->status;

        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::destroy($request->id);
        return redirect('/product');
    }
}
