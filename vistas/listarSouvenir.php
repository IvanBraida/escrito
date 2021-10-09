<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar</title>
</head>
<body>
<table>
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
                   
                    echo "<td>";
                    
                            echo "</tr>" ."</br>";
                }
            ?>
            
        </tbody>
        
       
        
    </table>
    
    <button formaction="/menuPrincipal">Volver </button>
    </form>
</body>
</html>