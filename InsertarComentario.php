<?php

/* Este codigo nos permitira comunicar la insercion de nuevos comentarios a la tabla comentarios
tambien nos permite modificiar o actualizar el promedio de la taqueria segun el promedio de los comentarios calculados sobre esa taqueria*/

//varibles que recibimos por get para  insertar y actualizar
$id = $_GET['id'];
$nombre = $_GET['variable'];
$comen = $_GET['comen'];
$calificacion = $_GET['calif'];

//variables usadas por la BD
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

//hacemos la insercion de un nuevo comentario 
$sql = "insert into comentarios(comen_nombre, comen_text, comen_cali, fk_comen_tq)values('$nombre','$comen','$calificacion','$id')";
if (mysqli_query($conn, $sql)) {
    echo "Tu comentario fue enviado</br>";

} else {
    echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}

//seleccionamos todos los comentarios para hacer el calculo del proemedio
$sql2 = "SELECT * FROM comentarios WHERE fk_comen_tq='$id'";
$result = $conn->query($sql2);
$suma = 0;
$contador = 0;

//se hace el calculo del promedio sumando y dividiendo todas las calificaciones
    while($row = $result->fetch_assoc()) 
    {
    	 $renglon = $row["comen_cali"];
    	 $suma = $suma + $renglon;
         $contador = $contador + 1;    
    }
    echo "contador".$contador."</br>";
    $promedio = $suma / $contador;

    echo "suma".$suma.'</br>';
    $intpromedioround = Round($promedio);

     echo "promedio redondenad:".$intpromedioround.'</br>';
    

// actualizamos la tabla con el promedio calculado
$sql = "UPDATE sucursales SET promedio_taq='$intpromedioround' WHERE id_taq='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
//redireccionamos mandando de nuevo el id de la taqueria.
header('Location: comentarios.php?id='.$id);
?> 