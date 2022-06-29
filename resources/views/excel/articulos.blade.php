<table>
    <thead>
    <tr>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Categoria</th>
    </tr>
    </thead>
    <tbody>
@foreach($articulos as $articulo)
    <tr>
        <td>
            {{$articulo->descripcion}}
        </td>
        <td>
            {{$articulo->estado ? 'activo':'inactivo'}}
        </td>
        <td>
            {{$articulo->categorias}}
        </td>
    </tr>
@endforeach
    </tbody>
</table>
