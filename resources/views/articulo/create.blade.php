@extends('layouts.plantillabase')
@section('contenido')
    <h2>NUEVO ARTICULO</h2>
    <form action="/articulos/insert" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nueva descripcion</label>
            <input type="text" class="form-control" name="descripcion"  >
        </div>
        <div class="mb-3">
            <label class="form-label">categoria</label>
            <select class="form-select" aria-label="Default select example" name="categoria_id">
                <option selected>seleccionar categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->_id}}">{{$categoria->descripcion}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
