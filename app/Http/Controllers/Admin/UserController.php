<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return "hola";
        // $users = User::with('roles')->get();

        $users = DB::table('users')->get();

        return View('admin.Users.index', [ 'users' => $users ]);
        return response()->json([ 'users' => $users ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        
       $password=bcrypt($request->input('password'));// RECUPERATORIA DD ELA VARIABLE PASSWORD Y ENCRITANDO
        $request->merge(['password' => $password]);
        $datas = $request->all();
        $user=User::create($datas);
       
       
        return redirect(route('admin.users.index'));
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

        $user = User::find($id);

        return view('admin.Users.edit', [ 'user' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request,$id)
    {
  
     if($request->password!=null){
            // $user->password = $request->password;
            $password=bcrypt($request->input('password'));// RECUPERATORIA DD ELA VARIABLE PASSWORD Y ENCRITANDO
            $request->merge(['password' => $password]); 
        }
        $input = $request->all();

        $user = User::findorfail($id);
        // preguntamos si el password biene vacio
        // $user->removeRole($user->roles->implode('name', ' ,'));
        $updateuser = $user->update($input);
        // $user->save();

        return redirect(route('admin.Users.index'));   
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
         $user = User::find($id);

        $user->delete();

        return redirect(route('admin.users.index'))->with([ 'message', 'record deleted successfully' ]);
    }
}
