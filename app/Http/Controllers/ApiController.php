<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Evento de inicio para o controlador de resposta
    public function onInitingControllerResponse(&$paramn)
    {
        return true;
    }

    // Evento de saída para o controlador de resposta
    public function onEndingControllerResponse(&$param)
    {
        return true;
    }
}
