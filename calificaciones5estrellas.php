
<?php

/*
En este documento se imprimen todas las Taquerias que  tienen 5 estrellas se encuentran en la tabla sucursales de la BD taquerias.
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


$sql = "SELECT * FROM sucursales WHERE promedio_taq = 5";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<div class='CSSTableGenerator'>";
    echo "<table  border = '1'> \n";
    echo "<tr><td>Nombre</td><td>Calificación</td></tr> \n";
   // echo "<table><tr><th>Nomre</th><th>Calificación</th></tr>";
    // Imprimir todos los datos del arreglo asociado a la tabla
    while($row = $result->fetch_assoc()) 
    {
            echo  "<tr><td>".'<a href="comentarios.php?id='.$row["id_taq"].'">'."<p>".$row["nombre_taq"]."</p>"."</td>".'</a>'."</td><td>";
            echo "<img src=\"estrella5.png\"><br/><br/>";	
    }
    echo "</table>\n"; 
        echo "</div>";
    //echo "</table>";

} else {
    echo "0 results";
}
$conn->close();
?>	