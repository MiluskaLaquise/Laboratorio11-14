@extends('layouts.plantillabase')
@section('contenido')
    CATEGORIAS <br>

    <a href="categorias/create" type="button" class="btn btn-danger m-2">Coloar nueva descripcion</a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>

        </tr>
        </thead>
        <tbody>
 @foreach($categorias as $categoria)
        <tr>
            <th >{{$categoria->descripcion}}</th>
            <td >{{$categoria->estado ? 'LIBRE':'OCUPADO'}}</td>
            <td ><a href="categorias/{{$categoria->_id}}/edit" type="button" class="btn btn-info">Editar</a>
                <a href="categorias/{{$categoria->_id}}/delete" type="button" class="btn btn-warning">Eliminar</a> </td>
        </tr>
 @endforeach


        </tbody>
    </table>
@endsection
