@extends('informatico.dashBoard')

@section('breadcumb')
<li class="breadcumb_item"><a href="">Inicio/ </a></li>
<li class="breadcumb_item"><a class="selected" href="">Editar usuario</a></li>
@endsection
@section('edit')
<div class="edit_user">
<form action="#" method="POST">
        <label>Nombre</label><input class="input_edit_user" type="text" class="titleMessage">
        <label>Apellido materno</label><input class="input_edit_user" type="text">
        <label>Apellido paterno</label><input class="input_edit_user" type="text">
        <label>Puesto</label><select name="carrera" id="" class="sections">
            <option value="">Seleccione una opción</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <label>Rol:</label><select name="carrera" id="" class="sections">
            <option value="">Seleccione una opción</option>
            <option value="">Revisor</option>
            <option value="">Difusor</option>
            <option value="">Emisor</option>
            <option value="">Informático</option>
            <option value="">Receptor</option>
        </select>
        <label>Revisor <i><small>Nota: llenar el campo si existe un revisor para el usuario</small></i></label><input class="input_edit_user" type="text">
        <input id="sendMessage" type="submit" value="Agregar usuario">
    </form>
</div>


@endsection
