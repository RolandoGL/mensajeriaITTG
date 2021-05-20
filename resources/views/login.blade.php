<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('recursos/stylesLogin.css') }}">

    <title>Bienvenido</title>
    

</head>
<body>
    
    <form class="form_content" action="/tablero" method="post">
        @csrf
        <div class="form_header">
            <img class="form_header_img" src="../recursos/img/logos.png" alt="">
        </div>
        <div class="form_content_container">
            <label class="lbl">usuario</label>
            <input class="form_content_text" type="text" name="usuario" placeholder="&#128101;UsuarioEjemplo">
            <label class="lbl">Contraseña</label>
            <input class="form_content_text" type="password" name="password" placeholder="&#128272;***************">
            <input class="form_content_btn" type="submit" value="ingresar">
            <a href="">Registrarse</a>
        </div>
    </form>
    <script src="./app.js"></script>
</body>
</html>