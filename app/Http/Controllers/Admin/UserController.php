<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{

    public function index()
    {
        // $users = User::with('roles')->get();
        // $users = DB::table('users')->get();
        // return View('admin.Users.index', [ 'users' => $users ]);
        // return response()->json([ 'users' => $users ], 200);
         return User::all();
    }

    // public function create()
    // {
    //     //
    //     return view('admin.Users.create');
    // }

   
    public function store(UserRequest $request)
    {
        
        $password=bcrypt($request->input('password'));// RECUPERATORIA DD ELA VARIABLE PASSWORD Y ENCRITANDO
        $request->merge(['password' => $password]);
        $datas = $request->all();
        $user=User::create($datas);
       
        return response()->json([
            'res' => true,
            'message'=>'Registro creado correctamente'
        ],201);
    }

    public function show(User $user)
    {
        return $user;
    }


    // public function edit($id)
    // {
    //     $user = User::find($id);
    //     return view('admin.Users.edit', [ 'user' => $user ]);
    // }


    public function update(UserUpdateRequest $request,$id)
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

        // return redirect()->route('admin.users.index')->with('status', 'Profile updated!');  
        
        return response()->json([
            'res' => true,
            'message'=>'Registro actualizado correctamente'
        ],200);
    }

    public function destroy($id)
    {
        //
         $user = User::find($id);

        $user->delete();
        return response()->json([
            'res' => true,
            'message'=>'Registro eliminado correctamente'
        ],200);
        // return redirect(route('admin.users.index'))->with([ 'message', 'record deleted successfully' ]);
    }

}
