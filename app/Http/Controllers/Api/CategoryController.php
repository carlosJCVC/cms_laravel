<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  Category::with('products')->get();
        return response()->json([ 'categories' =>$categories ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $input  = $request->all();
        Category::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Categoria creado correctamente'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return response()->json(['category' => $category ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $input  = $request->all();
        $category = Category::findorfail($id);
        $category->update($input);
        $category->save();

        return response()->json([
            'res' => true,
            'message' => 'Categoria actualizado correctamente'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response json
     */
    public function destroy($id)
    {
        $category = Category::findorfail($id);
        $category->delete();

        return response()->json([
            'res' => true,
            'message' => 'Categoria eliminado correctamente'
        ], 200);
    }
}
