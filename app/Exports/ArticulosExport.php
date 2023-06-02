<?php

namespace App\Exports;

use App\Models\Articulos;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ArticulosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Titulo',
            'Ciudad',
            'Pais',
            'Autor',
        ];
    }
    public function collection()
    {
         $articulos = DB::table('articulos')->select('id','titulo', 'ciudad', 'pais', 'autor')->get();
         return $articulos;

    }
}