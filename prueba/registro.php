<?php 
include 'conexion.php';
//recibe los datos de los inputs
$codigo = $_POST['dpi'];
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Correo = $_POST['correo'];
$Direccion = $_POST['direccion'];
$Grado = $_POST['grado'];
//consulta para insertar los datos en la tabla
$insertar = "INSERT INTO persona(cod_persona, nombre_persona, apellidos_persona, correo_persona, direccion_persona, grado_persona) VALUES ('$codigo', '$Nombre', '$Apellido', '$Correo', '$Direccion', '$Grado')";




//ejecuta la consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo " 
	<script>
            alert('No se ha registrado');
            window.history.go(-1);
	</script>
	     ";
}else{

	echo " 
	<script>
            alert('Registrado con éxito');
            window.history.go(-1);
	</script>
	     ";
}


              $sentencia ="SELECT * FROM persona";
              $resultado=mysql_query($sentencia);
              while($filas=mysql_fetch_assoc($resultado)){
              echo "<tr>";
              	echo "<td>";
              		echo $filas['cod_persona'];
              	echo "</td>";
              	echo "<td>";
              		echo $filas['nombre_persona'];
              	echo "</td>";
              	echo "<td>";
              		echo $filas['apellidos_persona'];
              	echo "</td>";
              	echo "<td>";
              		echo $filas['correo_persona'];
              	echo "</td>";
              	echo "<td>";
              		echo $filas['direccion_persona'];
              	echo "</td>";
              	echo "<td>";
              		echo $filas['grado_persona'];
              	echo "</td>";
              echo "</tr>";	
          }               


              ?>