<?php

namespace App\Imports;

use App\Models\Articulos;
use Maatwebsite\Excel\Concerns\ToModel;

class ArticulosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Articulos([
           'titulo'     => $row[0],
           'ciudad'    => $row[1], 
           'pais'    => $row[2], 
           'autor'    => $row[3],
           'imagen1'    => $row[4],
           'imagen2'    => $row[5],
           'imagen3'    => $row[6],
           'imagen4'    => $row[7],
           'imagen5'    => $row[8],
           'imagen6'    => $row[9],
           'imagen7'    => $row[10],
           'imagen8'    => $row[11],
           'imagen9'    => $row[12],
        ]);
    }
}
