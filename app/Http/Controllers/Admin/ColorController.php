<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colors;
use App\Http\Requests\ColorRequest;
use DB;

class ColorController extends Controller
{
  
    public function index()
    {

        return Colors::all();
    }


    public function store(ColorRequest $request)
    {
        $input = $request->all();
        Colors::create($input);

        return response()->json([
            'res' => true,
            'message'=>'color creado correctamente'
        ],200);
    }

    public function show(Colors $color)
    {
        return $color;
    }

    public function update(ColorRequest $request, $id)
    {
        //
        $input = $request->all();
        $color = colors::findorfail($id);

        $updatecolor = $color->update($input);
        $color->save();
        return response()->json([
            'res' => true,
            'message'=>'color actualizado correctamente'
        ],201);
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
    }
}
