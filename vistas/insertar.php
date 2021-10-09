<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alta De Souvenirs</title>
</head>
<body>
<h1>Insertar Souvenir</h1>
    <?php if(isset($parametros['exito']) && $parametros['exito'] == true): ?>
        <div style="#06d422">
            Se Guardo su souvenir con exito
        </div>
    <?php endif; ?>

    <?php if(isset($parametros['exito']) && $parametros['exito'] == false): ?>
        <div style="color: #FF0000">
           El souvenir no pudo ser guardado
        </div>
    <?php endif; ?>
<form action="/insertar" method="POST">
        Nombre: <input type="text" name="nombre" id="nombre"> <br>
        Descripcion: <input type="text" name="descripcion" id="descripcion"> <br>
        Stock que desee ingresar : <input type="text" name="stock" id="stock"> <br>
        Precio : <input type="text" name="precio" id="precio"> <br>
        
       

        <button action="submit">Insertar Souvenir</button>
        <button formaction="/menuPrincipal">Volver </button>


    
    

</body>
</html>