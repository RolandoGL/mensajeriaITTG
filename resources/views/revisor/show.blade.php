@extends('revisor.dashBoard')
@section('breadcumb')
<li class="breadcumb_item"><a href="">Revisor/ Inicio/ </a></li>
<li class="breadcumb_item"><a class="selected" href="">Ver mensaje</a></li>
@endsection
@section('show')
<div class="message_container">
    <label>Titulo: </label><br>
    <label>Estado: </label><br>
    <label>Descripcion</label><textarea disabled name="description" id="" cols="30" rows="10"></textarea>
</div>
@endsection