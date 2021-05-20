@extends('emisor.dashBoard')
@section('breadcumb')
<li class="breadcumb_item"><a href="">Inicio/ </a></li>
<li class="breadcumb_item"><a class="selected" href="">Redactar mensaje</a></li>
@endsection
@section('create')
<div class="create_message">
<button id="addMaterial">Agregar material</button>
    <form action="#" method="POST">
        <label>Título:</label><input type="text" class="titleMessage" placeholder="Escribe un título">
        <label>Mensaje:</label><textarea name="menssage" id="" cols="30" rows="10" class="inMessage" placeholder="Redacta aquí tu mensaje"></textarea>
        <label>Material de apoyo</label>
        <div id="addElement">
            <input type="file" class="Files">
        </div>
        <script>
            var crear = document.getElementById("addElement");
            var button = document.getElementById("addMaterial");
            button.onclick = function(){
                var input = document.createElement("input");
                input.setAttribute("type","file");
                crear.appendChild(input);
            }
        </script>
        <label>Segmento</label>
       <div><label >General </label><input type="checkbox"></div>
        <label>Carrera: </label><select name="carrera" id="" class="sections">
            <option value="">Seleccione una opción</option>
            <option value="">Mecánica</option>
            <option value="">Sistemas computacionales</option>
            <option value="">Industrial</option>
            <option value="">Electrónica</option>
            <option value="">Eléctrica</option>
            <option value="">Bioquímica</option>
            <option value="">Química</option>
            <option value="">Gestión empresarial</option>
            <option value="">Logística</option>
        </select>
        <label>Semestre:</label><select name="carrera" id="" class="sections">
            <option value="">Seleccione una opción</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
            <option value="">6</option>
            <option value="">7</option>
            <option value="">8</option>
            <option value="">9</option>
        </select>
        <div>
        <label>Servicio social </label><input type="checkbox">
        <label>Residencia profesional </label><input type="checkbox">
        </div>
        <input id="sendMessage" type="submit" value="Enviar mensaje">
    </form>
</div>


@endsection
