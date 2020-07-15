<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Product::all();
    }

    public function store(ProductRequest $request)
    {
        $input = $request->all();
        Product::create($input);

        return response()->json([
            'res' => true,
            'message'=>'producto actulizado correctamente'
        ],200);
    }


    public function show(Product $product)
    {
        return $product;
    }

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
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json([
            'res' => true,
            'message'=>'producto Eliminado correctamente'
        ],200);
    }
}
