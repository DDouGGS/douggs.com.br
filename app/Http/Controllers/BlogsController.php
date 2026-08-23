<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // Responde a Page
    public function page(Request $request, $category, $page)
    {
        $ev = event_manager\EventManager::notify('onInitingControllerResponse', ['category' => $category, 'page' => $page, 'request' => $request]);
        return view($category . '.' . $page);
    }

    // Responde a Categoria
    public function categorys(Request $request, $categorys)
    {
        $ev = event_manager\EventManager::notify('onInitingControllerResponse', ['category' => $categorys, 'request' => $request]);
        return view('categorys.' . $categorys);
    }
}
