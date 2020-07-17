<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoriesRequest;
use DB;

class CategoriesController extends Controller
{
  
    public function index()
    {
        $categories =  Category::with('products');

        return response()->json([ 'categories' => $categories, $success => true ], 200);
    }

    public function store(CategoriesRequest $request)
    {
        $input = $request->all();

        Category::create($input);

        return response()->json([
            'res' => true,
            'message'=>'Categoria creado correctamente'
        ],201);
    }

 
    /**
     * Display a category of the resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response Json
     */
    public function show(Categories $category)
    {
        return  response()->json([ 'category' => $category ], 200);
    }

    public function update(CategoriesRequest $request,$id)
    {
        $input = $request->all();

        $category = Category::findorfail($id);
        $category->update($input);
        $category->save();

        return response()->json([
            'res' => true,
            'message'=>'Categoria actualizado correctamente'
        ], 201);
    }


    public function destroy($id)
    {
        $category = Category::findorfail($id);

        $category->delete();

        return response()->json([
            'res' => true,
            'message'=>'Categoria Eliminado correctamente'
        ], 200);
    }
}
