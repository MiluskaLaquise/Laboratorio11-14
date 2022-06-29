@extends('layouts.plantillabase')
@section('contenido')
    ARTICULOS <br>

    <a href="articulos/create" type="button" class="btn btn-danger m-2">Nuevo articulo</a>
    <a href="articulos/export" type="button" class="btn btn-danger m-2">exportar</a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">categoria</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        @foreach($articulos as $articulo)
            <tr>
                <td>
                    {{$articulo->descripcion}}
                </td>
                <td>
                    {{$articulo->categoria_id}}

                </td>
                <td>
                    {{$articulo->estado ?'ACTIVO':'INACTIVO'}}
                </td>
            </tr>
        @endforeach
        </tr>
        </thead>
        <tbody>



        </tbody>
    </table>
@endsection
