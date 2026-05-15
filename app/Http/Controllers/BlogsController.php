<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // Responde a Page
    public function page(Request $request, $category, $page)
    {
        return view($category . '.' . $page);
    }
}
