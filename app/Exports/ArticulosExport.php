<?php

namespace App\Exports;

use App\Models\articulo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ArticulosExport implements FromView
{
    public function view(): View
    {
        return view('excel.articulos', [
            'articulos' => articulo::with('categorias')->get()
        ]);
    }
}
