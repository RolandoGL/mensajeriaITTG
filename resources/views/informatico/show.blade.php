@extends('informatico.dashBoard')

@section('breadcumb')
<li class="breadcumb_item"><a href="">Inicio/ </a></li>
<li class="breadcumb_item"><a class="selected" href="">Ver usuario</a></li>
@endsection

@section('show')
<div class="show_users">
    <label class="lb_inf_users">Nombre: </label>
    <label class="lb_inf_users">Apellido paterno: </label>
    <label class="lb_inf_users">Apellido materno: </label>
    <label class="lb_inf_users">Rol: </label>
    <label class="lb_inf_users">Puesto: </label>
    <label class="lb_inf_users">Revisor</label>
</div>
@endsection