<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Menu Principal</title>
</head>
<body>
<h1>Menu Principal</h1>
<?php if(isset($parametros['exito']) && $parametros['exito'] == true): ?>
        <div style="color: #06d422">
            Se modifico con exito
        </div>
    <?php endif; ?>

    <?php if(isset($parametros['exito']) && $parametros['exito'] == false): ?>
        <div style="color: #FF0000">
            Su usuario no se pudo modificar
        </div>
    <?php endif; ?>
    <table>
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>fecha</th>
        </thead>
        <form action="/modificarDatos" method="POST">
        <tbody>
            <?php
                $souvenir = new souvenirsController();
                $souvenires = $souvenir -> mostrarSouvenir();

                foreach($souvenires as $souvenir){
                    echo "<tr>";
                    echo "<td> " . $souvenir['id'] . "</td>";
                    echo "<td> " . $souvenir['nombre'] . "</td>";
                    echo "<td> " . $souvenir['descripcion'] . "</td>";
                    echo "<td> " . $souvenir['stock'] . "</td>";
                    echo "<td> " . $souvenir['precio'] . "</td>";
                    
                   
                    
                    echo "<td>  <input type='radio' name='id' value= '$souvenir[id]'    >  </td>";
                            echo "</tr>" ."</br>";
                }
            ?>
            
        </tbody>
        
       
        
    </table>
    
     
    Nombre: <input type="text" name="nombre"></br>
    Descripcion: <input type="text" name="descripcion"></br>
    Stock: <input type="text" name="stock"></br>
    Precio: <input type="text" name="precio"></br>
    <button formaction="/modificarDatos">Modificar</button>
    <button formaction="/menuPrincipal">Volver</button>

    
    

     </form>        
    
    

</body>
</html>