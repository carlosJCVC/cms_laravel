<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colors;
use DB;
use App\Http\Requests\ColorRequest;
class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $color = DB::table('colors')->get();

        return View('admin.colors.index', [ 'colors' => $color ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        //
         $input = $request->all();

        Colors::create($input);

        return redirect(route('admin.colors.index'))->with(['success' => 'record created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $color = Colors::find($id);

        return view('admin.colors.edit', [ 'color' => $color ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, $id)
    {
        //
         $input = $request->all();
        $color = colors::findorfail($id);
        // dd($input);
        $updatecolor = $color->update($input);

        $color->save();

        return redirect(route('admin.colors.index'))->with(['success' => 'record created successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $color = colors::find($id);

        $color->delete();

        return redirect(route('admin.colors.index'))->with([ 'message', 'record deleted successfully' ]);
    }
}
