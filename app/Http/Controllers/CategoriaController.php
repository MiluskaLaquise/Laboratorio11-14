<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    //
    public function index(){
        $categoria =categoria::all();
        return view('categoria.index')->with('categorias',$categoria);

    }
    public function create(){

        return view('categoria.create');

    }
    public function insert(Request $request){

            $categoria = new categoria();
            $categoria->descripcion=$request->descripcion;
            $categoria->estado=1;
            $categoria->save();
            return redirect('/categorias');
    }
    public function edit($id)
    {
        $categoria= categoria::find($id);
        return view('categoria.edit')->with('categoria',$categoria);
    }

    public function update(Request $request, $id)
    {
        $categoria=categoria::find($id);
        $categoria->descripcion=$request->descripcion;
        $categoria->save();
        return redirect('/categorias');
    }
    public function delete(Request $request, $id)
    {
        $categoria=categoria::find($id);
        $categoria->delete();
        return redirect('/categorias');
    }
    public function prueba(){

        $categorias=categoria::with('articulos')->get();
        dd($categorias);

    }

}
