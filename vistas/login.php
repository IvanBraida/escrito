<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesion</title>
</head>
<body>
<?php if(isset($parametros['falla']) && $parametros['falla'] == true): ?>
        <div class="alert alert-danger" style="color: #FF0000"> Login Incorrecto</div>
    <?php endif; ?>
    <form action="/iniciarSesion" method="POST">
    Usuario: <input type="text" placeholder="Ingrese su usuario" name="usuario" > </br>
    contraseña: <input type="password" placeholder="Ingrese la contraseña" name="contrasenia"></br>
    <button type="submit"  formaction="/iniciarSesion">Iniciar sesion</button>
    

    </form>



</body>
</html>