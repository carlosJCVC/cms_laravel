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

         return User::all();
    }

    public function store(UserRequest $request)
    {
        
        $password=bcrypt($request->input('password'));
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

    public function update(UserUpdateRequest $request,$id)
    {
  
     if($request->password!=null){
            // $user->password = $request->password;
            $password=bcrypt($request->input('password'));
            $request->merge(['password' => $password]); 
        }
        $input = $request->all();

        $user = User::findorfail($id);

        $updateuser = $user->update($input);

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
    }

}
