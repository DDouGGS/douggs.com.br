<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_service;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // Responde a Page
    public function page(Request $request, $category, $page)
    {
        $ev = \event_manager\EventManager::notify('onInitingControllerResponse', ['category' => $category, 'page' => $page, 'request' => $request]);
        return view($category . '.' . $page);
    }

    // Responde a Categoria
    public function categorys(Request $request, $categorys)
    {
        $ev = \event_manager\EventManager::notify('onInitingControllerResponse', ['category' => $categorys, 'request' => $request]);
        return view('categorys.' . $categorys);
    }

    // tela de entrada no sistema
    public function enter(Request $request, User $usr)
    {
        $model = $usr->where('email', $request->input('email'))->where('password', md5($request->input('password')))->get();
        if ($model[0]->user_id) {
            // salvar dados do login na sessão
            // salvar cookie no navegador do usuário
            return view('categorys.developments');
        }
        return view('enter');
    }

    // tela de entrada no sistema
    public function registration(Request $request, User $usr, User_service $userService)
    {
        // cadastramento
        if ($request->input('_token')) {
            // 1. Valide os dados do formulário (Boa prática!)
            $dadosValidados = $request->validate([
                'name'  => 'required|string|max:90',
                'document' => 'string|max:25',
                'email' => 'required|email|max:180',
                'password' => 'required|min:6',
            ]);

            // 2. Criptografe a senha antes de salvar
            $dadosValidados['password'] = md5($dadosValidados['password']);
            // 3. Salve no banco de dados usando o Eloquent
            $crt = $usr::create($dadosValidados);
            if (!is_object($crt)) {
                return view('categorys.developments');
            }
            // 4. Salvar serviço
            $userService->user_id = $crt->user_id;
            $userService->service_id = 1;
            $userService->save();
            // salvar dados do login na sessão
            // salvar cookie no navegador do usuário
            // saida
            return view('blog');
        }

        return view('registration');
    }
}
