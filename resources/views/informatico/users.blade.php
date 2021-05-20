@extends('informatico.dashBoard')
@section('breadcumb')
<li class="breadcumb_item"><a class="selected" href="">Informático/ Inicio/</a></li>
@endsection
@section('TableUsers')
<table class="table_categories">
<thead>
<tr class="link_add"><td colspan="3"><a href="/tablero/informatico/create">Agregar usuario</a></td></tr>
<th>Usuario</th>
<th>Rol</th>
<th class="table_actions">Acciones</th>
</thead>
<tbody>
        <tr>
            
            <td>usuario 1</td>
            <td>Alumno</td>
            <td class="table_actions">
                <a class="acciones_links" href="/tablero/informatico/edit">Editar</a>
                <a class="acciones_links" href="/tablero/informatico/show">Ver</a>
                <form action="" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="acciones_links" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
</tbody>
</table>
@endsection