<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colors;
use DB;
use App\Http\Requests\ColorRequest;

class ColorController extends Controller
{
  
    public function index()
    {
        // $color = DB::table('colors')->get();
        // return View('admin.colors.index', [ 'colors' => $color ]);
        return Colors::all();
    }

 
    // public function create()
    // {
    //     return view('admin.colors.create');
    // }


    public function store(ColorRequest $request)
    {
        $input = $request->all();
        Colors::create($input);

        return response()->json([
            'res' => true,
            'message'=>'color creado correctamente'
        ],200);
        // return redirect(route('admin.colors.index'))->with(['success' => 'record created successfully']);
    }

    public function show(Colors $color)
    {
        return $color;
    }


    // public function edit($id)
    // {
    //     $color = Colors::find($id);
    //     return view('admin.colors.edit', [ 'color' => $color ]);
    // }

    public function update(ColorRequest $request, $id)
    {
        //
        $input = $request->all();
        $color = colors::findorfail($id);
        // dd($input);
        $updatecolor = $color->update($input);
        $color->save();
        return response()->json([
            'res' => true,
            'message'=>'color actualizado correctamente'
        ],201);

        // return redirect(route('admin.colors.index'))->with(['success' => 'record created successfully']);
    }

 
    public function destroy($id)
    {
        //
         $color = colors::find($id);

        $color->delete();
        return response()->json([
            'res' => true,
            'message'=>'Color Eliminado correctamente'
        ],200);
        // return redirect(route('admin.colors.index'))->with([ 'message', 'record deleted successfully' ]);
    }
}
