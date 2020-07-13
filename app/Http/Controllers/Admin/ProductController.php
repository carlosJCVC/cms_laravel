<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\User;
use App\Models\Category;
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

        $products = DB::table('products')->get();               
        

        return view('admin.products.index')->with([ 'products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();   
        return view('admin.products.create', [ 'categories'=>$categories, 'users'=>$users ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        if($archivo=$request->file('image')){ 
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $input['image']=$nombre;
        }
        Product::create($input);

        return redirect(route('admin.products.index'))->with(['success' => 'record created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.products.index', [ 'product' => $product ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $users = User::all();
        $product = Product::find($id);
        return view('admin.products.edit', [ 'product' => $product, 'categories'=>$categories, 'users'=>$users ]);
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
        

        $input = $request->all();
        
        if($archivo=$request->file('image')){ 
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $input['image']=$nombre;
        }

        $product = Product::find($id)->update($input);

        return redirect(route('admin.products.index'))->with(['success' => 'record created successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect(route('admin.products.index'))->with([ 'message' => 'record deleted successfully' ]);
    }
}
