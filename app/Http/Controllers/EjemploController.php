<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
use App\Models\User;
use App\Exports\ArticulosExport;
use App\Imports\ArticulosImport;
use Excel;
use PDF;


class EjemploController extends Controller
{
    public function index()
    {
        $articulos=Articulos::all();
        $users=User::all();
        $dato=10;
        return view('ejemplo')->with('articulos',$articulos)->with('users',$users);

    }

    public function import(Request $req) 
    {
        Excel::import(new ArticulosImport, 'articulos.xlsx');
        return redirect('/')->with('success', 'All good!');
    }

    public function export(){
        return Excel::download(new ArticulosExport, 'Articulos.xlsx');
    }

    public function store(Request $req)
    {
        if(!is_null($req->id)){
            $articulo=Articulos::find($req->id);
        }
        else{
            $articulo=new Articulos();

            $articulo->titulo=$req->titulo;
            $articulo->ciudad=$req->ciudad;
            $articulo->pais=$req->pais;
            $articulo->autor=$req->autor;
            $articulo->contenido=$req->contenido;
            $articulo->imagen1=$req->imagen1;
            $articulo->imagen2=$req->imagen2;
            $articulo->imagen3=$req->imagen3;
            $articulo->imagen4=$req->imagen4;
            $articulo->imagen5=$req->imagen5;
            $articulo->imagen6=$req->imagen6;
            $articulo->imagen7=$req->imagen7;
            $articulo->imagen8=$req->imagen8;
            $articulo->imagen9=$req->imagen9;
            $articulo->save();
            return redirect('/ejemplo');
        }

    }

    public function elimina($id)
    {
        $articulo=Articulos::find($id);
        $articulo->delete();
        return redirect('/ejemplo');
    }

    public function muestraDetalle($id)
    {
        $articulo=Articulos::find($id);
        return view('edita')->with('articulo',$articulo);
    }


    public function actualiza(Request $req)
    {
        $articulo=Articulos::find($req->id);
        $articulo->titulo=$req->titulo;
        $articulo->ciudad=$req->ciudad;
        $articulo->pais=$req->pais;
        $articulo->autor=$req->autor;
        $articulo->contenido=$req->contenido;
        $articulo->imagen1=$req->imagen1;
        $articulo->imagen2=$req->imagen2;
        $articulo->imagen3=$req->imagen3;
        $articulo->imagen4=$req->imagen4;
        $articulo->imagen5=$req->imagen5;
        $articulo->imagen6=$req->imagen6;
        $articulo->imagen7=$req->imagen7;
        $articulo->imagen8=$req->imagen8;
        $articulo->imagen9=$req->imagen9;
        $articulo->save();
        return redirect('/ejemplo');
    }
}
