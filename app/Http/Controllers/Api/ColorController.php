<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors =  Color::with('colors')->get();
        return response()->json([ 'colors' =>$colors ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input  = $request->all();
        Color::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Color creado correctamente'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        return response()->json(['color' => $color ], 200);
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
        $input  = $request->all();
        $color = Color::findorfail($id);
        $color->update($input);
        $color->save();

        return response()->json([
            'res' => true,
            'message' => 'Color actualizado correctamente'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::findorfail($id);
        $color->delete();

        return response()->json([
            'res' => true,
            'message' => 'Color eliminado correctamente'
        ], 200);
    }
}
