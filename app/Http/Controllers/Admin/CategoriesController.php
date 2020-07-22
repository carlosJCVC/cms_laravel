<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoriesRequest;
use DB;

class CategoriesController extends Controller
{
  
    /**
     * TODO
     * nombre incorrecto , realizar de acuerdo a psr-2
     */
    public function index()
    {
        $categories =  Category::with('products');

        return response()->json([ 'categories' => $categories, $success => true ], 200);
    }

    /**
     * TODO
     * request retorna una vista cuando se envia datos incorrecto o falta algun campo requerido 
     * realizar que respinda un json 
     */
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

    /**
     * TODO
     * esta funcion es erronea , hay error corregir
     */
    public function update(CategoriesRequest $request,$id)
    {
        $input = $request->all();

        /**
         * TODO 
         * findOrFail es similar a un try catch esto si falla retorn una vista
         * Retornar un error json
         */
        $category = Category::findorfail($id);
        $category->update($input);
        $category->save();

        return response()->json([
            'res' => true,
            'message'=>'Categoria actualizado correctamente'
        ], 201);
    }

    /**
     * TODO 
     * variable en ruta es categoria y la variable en controlador es $id 
     * * Confunde
     */
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
