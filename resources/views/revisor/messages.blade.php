@extends('emisor.dashBoard')

@section('breadcumb')
<li class="breadcumb_item"><a class="selected" href="">Revisor/Inicio</a></li>
@endsection

@section('TableMessage')
<table class="table_categories">
<thead>
<tr class="link_add"><td colspan="3"><a href="/tablero/Revisor/create">Redactar mensaje</a></td></tr>
<th>Mensaje</th>
<th>Estado</th>
<th class="table_actions">Acciones</th>
</thead>
<tbody>
   
        <tr>
            
            <td>mensaje 1</td>
            <td>Aceptado</td>
            <td class="table_actions">
                <a class="acciones_links" href="/tablero/Revisor/edit">Editar</a>
                <a class="acciones_links" href="/tablero/Revisor/show">Revisar</a>
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