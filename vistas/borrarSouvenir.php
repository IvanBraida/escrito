<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Borrar Souvenir</title>
</head>
<body>
<able>
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Stock</th>
            <th>Precio</th>
        </thead>
        <form action="submit" method="POST">
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
                   
                    echo "<td> 
                            <button name='id' formaction='/borrar' value='".$souvenir['id']."'>  Eliminar  </button> </td>";
                    
                            echo "</tr>" ."</br>";
                }
            ?>
        </tbody>
        <button formaction="/menuPrincipal">Volver </button>
        </form>
        
    </table>
    

</body>
</html>