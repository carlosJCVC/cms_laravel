<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public function view() {
        $user = User::find(1);
        $cliente = User::find(1);
        $cajas = User::find(1);
        $ventas = User::find(1);

        $values = [
            'user' => $user, 
            'user' => $user, 
            'user' => $user, 
            'user' => $user, 
            'user' => $user, 
        ];

        return view('test', compact('values'))->with($values);
    }
}
