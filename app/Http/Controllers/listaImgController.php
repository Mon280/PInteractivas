<?php

namespace App\Http\Controllers;
use App\Models\Articulos;
use Illuminate\Http\Request;

class listaImgController extends Controller
{
    public function index()
    {
        $articulos=Articulos::all();
        $dato=10;
        return view('listaImg')->with('articulos',$articulos);
    }


}
