<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

use App\Http\Requests\CategoriesRequest;
class CategoriesController extends Controller
{
  
    public function index()
    {
        // $categories = DB::table('categories')->get();
        // return View('admin.categories.index', [ 'categories' => $categories ]);
        return Category::all();
    }

 
    // public function create()
    // {
    //     return view('admin.categories.create');
    // }

    public function store(CategoriesRequest $request)
    {
        //
        $input = $request->all();
        Category::create($input);
        // return redirect(route('admin.categories.index'))->with(['success' => 'record created successfully']);
        return response()->json([
            'res' => true,
            'message'=>'Categoria creado correctamente'
        ],200);
    }

 
    public function show(Categories $category)
    {
        return  $category;
    }

    // public function edit($id)
    // {
    //     $category = Category::find($id);
    //     return view('admin.categories.edit', [ 'category' => $category ]);
    // }

  
    public function update(CategoriesRequest $request, $id)
    {
        $input = $request->all();
        $category = Category::findorfail($id);
        $updatecategory = $category->update($input);
        $category->save();
        return response()->json([
            'res' => true,
            'message'=>'Categoria actualizado correctamente'
        ],201);
        // return redirect(route('admin.categories.index'))->with(['success' => 'record created successfully']);
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json([
            'res' => true,
            'message'=>'Categoria Eliminado correctamente'
        ],200);
        // return redirect(route('admin.categories.index'))->with([ 'message', 'record deleted successfully' ]);
    }
}
