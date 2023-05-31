<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Articulos;

use PDF;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function getPDF(){
        $pdf = \PDF::loadView('londres');
        return $pdf->download('londres.pdf');
    }
}
