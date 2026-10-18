<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistryController extends ApiController
{
    public function registry(Request $request)
    {
        return json_encode([true]);
    }
}
