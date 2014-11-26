
<?php

/*
En este documento se imprimen todas las Taquerias que se encuentran en la tabla sucursales de la BD taquerias.
Las imprime en orden descendiente 5-->0 segun su calificacion que tengan, dado por el promedio de los comentarios.
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taquerias";

// Se crea la conexion con la BD
$conn = new mysqli($servername, $username, $password, $dbname);
// Se prueba la conexion, en caso de error arrojarlo.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM sucursales ORDER BY promedio_taq DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   echo "<div class='CSSTableGenerator'>";
   echo "<table  border = '1'> \n";
   echo "<tr><td>Nombre</td><td>Direccion</td><td>Calificación</td></tr> \n";
    // Imprimir todos los datos del arreglo asociado a la tabla
    while($row = $result->fetch_assoc()) 
    {
     //Switch que asigna la imagen segun el promedio.
          
     switch ($row["promedio_taq"]) 
     	{
    		case 0:
            echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."<td>"."<p>".$row["direccion_taq"]."<p>"."</td>".'</a>'."</td><td>";
        	echo "<img src=\"estrella0.png\"><br/><br/>";
        	break;
    		case 1:
            echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."<td>"."<p>".$row["direccion_taq"]."<p>"."</td>".'</a>'."</td><td>";
        	echo "<img src=\"estrella1.png\"><br/><br/>";
        	break;
   	 		case 2:
   	 		echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."<td>"."<p>".$row["direccion_taq"]."<p>"."</td>".'</a>'."</td><td>";
        	echo "<img src=\"estrella2.png\"><br/><br/>";
        	break;
        	case 3:
        	echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."<td>"."<p>".$row["direccion_taq"]."<p>"."</td>".'</a>'."</td><td>";
        	echo "<img src=\"estrella3.png\"><br/><br/>";
        	break;
        	case 4:
        	echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."<td>"."<p>".$row["direccion_taq"]."<p>"."</td>".'</a>'."</td><td>";
        	echo "<img src=\"estrella4.png\"><br/><br/>";
        	break;
        	case 5:
        	echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."<td>"."<p>".$row["direccion_taq"]."<p>"."</td>".'</a>'."</td><td>";
        	echo "<img src=\"estrella5.png\"><br/><br/>";
        	break;
		}
         
    }

        
        echo "</table>\n"; 
        echo "</div>";

} else {
    echo "0 results";
}
$conn->close();
?>	