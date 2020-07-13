<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = DB::table('products')->get();
        // return view('admin.products.index')->with([ 'products' => $products ]);
        return Product::all();
    }

    // public function create()
    // {
    //     return view('admin.products.create');
    // }

    public function store(ProductRequest $request)
    {
        $input = $request->all();
        Product::create($input);
        // return redirect(route('admin.products.index'))->with(['success' => 'record created successfully']);
        return response()->json([
            'res' => true,
            'message'=>'producto actulizado correctamente'
        ],200);
    }


    public function show(Product $product)
    {
        return $product;
        // $product = Product::find($id);
        // return view('admin.products.index', [ 'product' => $product ]);
    }


    // public function edit($id)
    // {
    //     $product = Product::find($id);

    //     return view('admin.products.edit', [ 'product' => $product ]);
    // }

    public function update(ProductRequest $request, $id)
    {
         $input = $request->all();
        $product = Product::findorfail($id);
        // dd($input);
        $updateproduct = $product->update($input);

        $product->save();
        return response()->json([
            'res' => true,
            'message'=>'producto creado correctamente'
        ],201);
        // return redirect(route('admin.products.index'))->with(['success' => 'record created successfully']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json([
            'res' => true,
            'message'=>'producto Eliminado correctamente'
        ],200);
        // return redirect(route('admin.products.index'))->with([ 'message', 'record deleted successfully' ]);
    }
}
