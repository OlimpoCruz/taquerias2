<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Comentarios</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />		
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>				
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/tabs.js"></script>
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 		
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter.css" type="text/css" />		
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 

		<script type="text/javascript">
		function pasarvariable()
		{
			id = document.getElementById('iddelataqueria').innerHTML;
			name= document.getElementById('nombre').value;
			comen= document.getElementById('comentario').value;
			calif= document.getElementById('calificacion').innerHTML;
			if(comen=="" || name=="")
			{
				alert("Debe llenar todos los campos con *");
			
			}
			else
			{
				location.href="InsertarComentario.php?variable="+name+"&comen="+comen+"&calif="+calif+"&id="+id+"";
			}
		}
		</script>
					
	</head>
	
	<body id="bodyComentarios" class="home">

			<!-- Menu -->
			<div id="menu">
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><?php MostrarDatosTaqueria(); ?></li>							
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>

	
		
		<table id="TablaMenu">
			<tr><td colspan="2"><h1 align="center"> Menu:</h1></td></tr>
			<?php MostrarMenu(); ?>
		</table>
		
			<div id="main" >
				<div  id="TaqueriasComentariosBD">
						<table id="TablaComentarios">
							<th align="center">Nombre</th>
    						<th align="center">Calificación</th>
    						<th align="center">Comentario</th>
							<?php MostrarComentarios(); ?>
						</table>			
    			</div>		
			</div>

<label id="ComentariosText">Comentarios:</label>

<form method="post" name="formulario" action""> 
<!-- COMENTARIOS -->			
<div id="AreaComentarios">		
	<div>
		<label>Nombre: *</label><br>
		<input type="text" id="nombre" value="" ></div>
	<div>
		<label>Entrada: *</label><br>
		<textarea id="comentario" rows="6" cols="80"></textarea>
	</div>

	<!-- ESTRELLITAS -->
	<div class="exemple">
		<div class="exemple3" data-average="5" data-id="5"> </div>
	</div>

	<div>
		<h1 id="calificacion" name="calif" > 1 </h1>
	</div>

	<div id="BotonEnviar">
		<!-- <input type="button" value="Enviar!" class="botones" onClick=" <window.location='InsertarComentario.php?nombre='+document.getElementById('nombre').value "> -->
		<input type="button" value="Enviar!" class="botones" onClick="javascript:pasarvariable()">
	</div>


</div>
</form>

	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	  // get the clicked rate !
      $(".exemple3").jRating({onClick : function(element,rate){
      	var cali = rate; 
      	//alert(cali);
      	document.getElementById('calificacion').innerHTML = cali;
      	}
  	  });
	});

	</script>
			

</body>
</html



<?php
/*CODIGO PHP 3 FUNCIONES:
1.-  MUESTRA EL ENCABEZADO O DATOS DE LA TAQUERIA DESTINADOS AL ID QUE RECIBE POR GET.
2.-  MUESTRA LOS COMENTARIOS DESTINADOS AL ID QUE RECIBE POR GET.
3.-  MUESTRA EL MENU  DESTINADOS AL ID QUE RECIBE POR GET.
*/

function MostrarDatosTaqueria()
{
	/* El siguiente codigo carga los menus y los comentarios de la taqueria que fue seleccionada*/
$id_taqueria = $_GET['id']; // Almacena el id que recibe por get.
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


$sql = "SELECT * FROM sucursales WHERE id_taq=".$id_taqueria;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // echo "<table><tr><th>Nomre</th><th>Calificación</th></tr>";
    // Imprimir todos los datos del arreglo asociado a la tabla
    while($row = $result->fetch_assoc()) 
    {
    	 $nombre_taqueria = $row["nombre_taq"];
    	 $direccion_taqueria = $row["direccion_taq"];
    	 echo '<h1  id="iddelataqueria">'.$id_taqueria.'</h1>';
    	 echo '<a href="index.php" id="nombretaqueria">'.$nombre_taqueria.'<span class="subheader">'.$direccion_taqueria.'</span></a>';
    }
}
else
{
	$nombre_taqueria = "Null";
    $direccion_taqueria = "null";
    echo '<a href="index.php">'.$nombre_taqueria.'<span class="subheader">'.$direccion_taqueria.'</span></a>';
}

}

function MostrarComentarios()
{
/* El siguiente codigo carga los menus y los comentarios de la taqueria que fue seleccionada*/
$id_taqueria = $_GET['id']; // Almacena el id que recibe por get.
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


$sql = "SELECT * FROM comentarios WHERE fk_comen_tq =".$id_taqueria;
$result = $conn->query($sql);

if ($result->num_rows > 0) {

   // echo "<table><tr><th>Nomre</th><th>Calificación</th></tr>";
    // Imprimir todos los datos del arreglo asociado a la tabla
    while($row = $result->fetch_assoc()) 
    {
    	  echo'<tr class="columna"><td id="columna" align="center">'.$row["comen_nombre"].'</td>';
    	  switch ($row["comen_cali"]) 
     	{
    		case 0:
            echo '<td id="columna" align="center">'."<img src=\"Com-estrella0.png\"><br/><br/>".'</td>'.'<td id="columna" align="center">'.$row["comen_text"].'</td>';
        	break;
    		case 1:
            echo '<td id="columna" align="center">'."<img src=\"Com-estrella1.png\"><br/><br/>".'</td>'.'<td id="columna" align="center">'.$row["comen_text"].'</td>';
        	break;
   	 		case 2:
   	 		echo '<td id="columna" align="center">'."<img src=\"Com-estrella2.png\"><br/><br/>".'</td>'.'<td id="columna" align="center">'.$row["comen_text"].'</td>';
        	break;
        	case 3:
        	echo '<td id="columna" align="center">'."<img src=\"Com-estrella3.png\"><br/><br/>".'</td>'.'<td id="columna" align="center">'.$row["comen_text"].'</td>';
        	break;
        	case 4:
        	echo '<td id="columna" align="center">'."<img src=\"Com-estrella4.png\"><br/><br/>".'</td>'.'<td id="columna" align="center">'.$row["comen_text"].'</td>';
        	break;
        	case 5:
        	echo '<td id="columna" align="center">'."<img src=\"Com-estrella5.png\"><br/><br/>".'</td>'.'<td id="columna" align="center">'.$row["comen_text"].'</td>';
        	break;
		}
    	 //echo '<td id="columna" align="center">'.$row["comen_cali"].'</td>';
    	 //echo'<td id="columna" align="center">'.$row["comen_text"].'</td>';
     
    }
     	 echo'</tr>';
      	 echo "</table>\n"; 
}
else
{
	echo'<tr><td id="columna" align="center">'."Null".'</td>';
    	 echo '<td id="columna" align="center">'."Null".'</td>';
    	 echo'<td id="columna" align="center">'."Null".'</td>';
      	 echo'</tr>';
}
}

function MostrarMenu()
{
/* El siguiente codigo carga los menus y los comentarios de la taqueria que fue seleccionada*/
$id_taqueria = $_GET['id']; // Almacena el id que recibe por get.
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


$sql = "SELECT * FROM menus WHERE fk_menu_tq='$id_taqueria' ORDER BY costo DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // echo "<table><tr><th>Nomre</th><th>Calificación</th></tr>";
    // Imprimir todos los datos del arreglo asociado a la tabla
    while($row = $result->fetch_assoc()) 
    {
    	 echo'<tr><td>'.$row["producto"].'..............</td>';
    	 echo '<td>'."$".$row["costo"].'</td>';
    	 echo'</tr>';
    	
    }
}
else
{
	echo'<tr><td>'."No hay resultados para mostrar".'</td>'; 
	echo '<td>'."$"."0".'</td>';
    echo'</tr>';
}
}

?>
