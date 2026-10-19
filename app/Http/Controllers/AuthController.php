<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends ApiController
{
    // Registrar novo usuário
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ], 201);
    }

    // Fazer login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais informadas estão incorretas.'],
            ]);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login realizado com sucesso',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Fazer logout (revogar tokens)
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout realizado com sucesso. Token revogado.'
        ]);
    }

    // Retornar dados do usuário autenticado
    public function me(Request $request)
    {
        return response()->json($request->user());
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

    // public function show(Post $post)
    // {
    //     return response()->json([
    //         'sucesso' => true,
    //         'mensagem' => 'show: Olá, esta é a minha API no Laravel 8!'
    //     ]);
    // }

    // public function update(Request $request, Post $post)
    // {
    //     return response()->json([
    //         'sucesso' => true,
    //         'mensagem' => 'update: Olá, esta é a minha API no Laravel 8!'
    //     ]);
    // }

    // public function destroy(Request $request)
    // {
    //     return response()->json([
    //         'sucesso' => true,
    //         'mensagem' => 'destroy: Olá, esta é a minha API no Laravel 8!'
    //     ]);
    // }
}
