<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $token = auth('api')->attempt($request->all());

        if ($token)
            return response()->json(['token' => $token], 200);

        return response()->json(['Access' => 'Wrong password or login'], 403);
    }    
    
    //
    public function logout()
    {
         auth('api')->refresh();
         return response()->json(['token excluido' => 'logout realizado'], 200);
    }    
    
    //
    public function me()
    {
        return auth()->user();
    }    
    
    //
    public function refresh()
    {
        $token = auth('api')->refresh();
        return response()->json(['token refreshed' => $token], 200);
    }
}
