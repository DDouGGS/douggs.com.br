<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use AppModelsUser;
use IlluminateSupportFacadesHash;
use Illuminate\Support\Facades\Hash;

class UserController extends ApiController
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    // Fazer logout (revogar tokens)
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout realizado com sucesso. Token revogado.'
        ]);
    }

    public function index(Request $request)
    {
        return response()->json([
            'sucesso' => true,
            'mensagem' => 'index: Olá, esta é a minha API no Laravel 8!',
            'request' => (array) $request
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'sucesso' => true,
            'mensagem' => 'store: Olá, esta é a minha API no Laravel 8!'
        ]);
    }

    public function show(Post $post)
    {
        return response()->json([
            'sucesso' => true,
            'mensagem' => 'show: Olá, esta é a minha API no Laravel 8!'
        ]);
    }

    public function update(Request $request, Post $post)
    {
        return response()->json([
            'sucesso' => true,
            'mensagem' => 'update: Olá, esta é a minha API no Laravel 8!'
        ]);
    }

    public function destroy(Request $request)
    {
        return response()->json([
            'sucesso' => true,
            'mensagem' => 'destroy: Olá, esta é a minha API no Laravel 8!'
        ]);
    }
}
