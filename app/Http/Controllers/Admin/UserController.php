<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('client')->only('index');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return User::with('products')->get();
        $users = User::with('products')->get();
        return response()->json(['users'=>$users],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser=User::create($request->all());
        return response()->json($newUser,201);
    }

    /**
     * Display the specified resource.
     * Your can use model binding in your variable example
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user,200);
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
        $user= User::find($id);
        $user->update($request->all());
        return response()->json($user,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return response()->json(['res'=>true],204);
    }

    /*public function login(Request $request){
        $user = User::whereEmail($request->email)->first();
        if(!is_null($user) && Hash::check($request->password, $user->password))
        {
            $token = $user->createToken('cms_laravel')->accessToken;

            return response()->json([
                'res'=>true,
                'token'=>$token,
                'message'=>'Bienvenido al sistema'
            ],200);
        }else{
            return response()->json([
                'res'=>false,
                'message'=>'cuenta o pawssword incorrecto'
            ],200);
        }
    }
    public function logout(){
        $user=auth()->user();
        $user->tokens->each(function($token,$key){
            $token->delete();
        });
        //$user->save();
        return response()->json([
            'res'=>true,
            'message'=>'adios'
        ],200);
    }*/
}
