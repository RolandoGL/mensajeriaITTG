@extends('receptor.index_receptor')
@section('breadcumb')
<li class="breadcumb_item"><a href="">Inicio/ </a></li>
<li class="breadcumb_item"><a class="selected" href="">Mis mensajes</a></li>
@endsection
@section('myMessages')
<table class="table_categories">
<thead>
<th colspan="2">Mensaje</th>
</thead>
<tbody>
   
        <tr>
            
            <td>Titulo del mensaje</td>
            <td class="table_actions" style="width: 30px;">
                <a class="acciones_links" href="">Mostrar</a>
            </td>
        </tr>
</tbody>
</table>
@endsection