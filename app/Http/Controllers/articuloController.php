<?php

namespace App\Http\Controllers;

use App\Exports\ArticulosExport;
use App\Models\articulo;
use App\Models\categoria;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class articuloController extends Controller
{
    //
    public function index(){
        $articulos =articulo::all();
        return view('articulo.index')->with('articulos',$articulos);

    }
    public function prueba(){
        $articulos= articulo::with('categorias')->get();
        dd($articulos);
    }
    public function create(){
        $categorias=categoria::all();
        return view('articulo.create')->with('categorias',$categorias);
    }
    public function insert(Request $request){

        $articulos = new articulo();
        $articulos->descripcion=$request->descripcion;
        $articulos->categoria_id=$request->categoria_id;
        $articulos->estado=1;
        $articulos->save();
        return redirect('/articulos');
    }
    public function export()
    {
        return Excel::download(new ArticulosExport, 'articulos.xlsx');
    }




}

