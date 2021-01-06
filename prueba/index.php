<!DOCTYPE html>	
<html>
<head>
	 <title>Proyecto tabla</title>
	 <meta charset="UTF-8">
     <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="script.js"></script>
</head>
<body>

<!-NAVBAR->

<nav class="navbar navbar-light bg-light" >
	
	
	<img src="logoexpor2.png" alt="" width="130" height="100" >
	<h3 class="navbar-brand">PRÁCTICA DE DISEÑO</h3> 
</nav>


	
<!- FORMULARIO ->
	<div class="container mt-2">
	<h5>LLene los campos con lo que se le solicita</h5>
         <form   action="registro.php" method="post" class="row mt-3 col-form-label-lg" onsubmit="return reciba();">
	         <div class="col-xs-12 col-sm-6 col-md-4">
		         <label for="validationCustom01" class="form-label">Nombre</label>
		             <input type="text" class="form-control" id="nombre" name="nombre">
		                 <div class="valid-feedback">
			             Correcto!
		                 </div>
	         </div>
	         <div class="col-xs-12 col-sm-6 col-md-4">
		         <label for="validationCustom02" class="form-label">Apellido</label>
		            <input type="text" class="form-control" id="apellido" name="apellido">
		                 <div class="valid-feedback">
			             Correcto!
		                 </div>
	         </div>
	         <div class="col-xs-12 col-sm-6 col-md-4">
	             <label for="validationCustomUsername" class="form-label">Correo Electrónico</label>	
		            <div class="input-group has-validation">
		              <span class="input-group-text" id="inputGroupPrepend">@</span>
		                <input type="text" class="form-control" id="correo" name="correo">
		                 <div class="invalid-feedback">
			             Escriba un correo
		                 </div>
		             </div> 
	         </div>
	         <div class="col-xs-12 col-sm-6 col-md-4">
		         <label for="validationCustom03" class="form-label">Número de DPI</label>
		            <input type="value" class="form-control" id="dpi" name="dpi">
		             <div class="valid-feedback">
			         Correcto!
		             </div>
	         </div>
	         <div class="col-xs-12 col-sm-6 col-md-4">
		         <label for="validationCustom04" class="form-label">Dirección Domiciliar</label>
		           <input type="text" class="form-control" id="direccion" name="direccion">
		             <div class="valid-feedback">
			         Correcto!
		             </div>
	         </div>
	         <div class="col-xs-12 col-sm-6 col-md-4">
		         <label for="validationCustom04" class="form-label">Grado Académico xd</label>
		            <input type="text" class="form-control" id="grado" name="grado">
		             <div class="valid-feedback">
			         Correcto!
		             </div>
	         </div>


		     <div class="col-sm-12 mt-4">
                 <button type="Submit" class="float-right btn btn-primary" > <b>+</b> Agregar Registro</button>
             </div>


         </form>
 </div>        
 





<!-TABLA->
<div class="container mt-5">
	 <h2>Tabla de registro de los datos ingresados</h2>
     <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" id="tabla_factura" name="tabla_factura">
	         <tr class="table-success">
		         <th class="">
			         DPI
		         </th>
		         <th>
			         Nombre
		         </th>
		         <th>
			         Apellido
		         </th>
		         <th>
			         Correo
		         </th>
		         <th>
			         Dirección
		         </th>
		         <th>
			         Grado Académico
		         </th>
	         </tr>
	         <tbody id="content_table">
	         
	         <?php
              
              include 'conexion.php';
              $sentencia = "SELECT * from persona";
              $resul = mysqli_query($conexion,$sentencia);
              while ($filas=mysqli_fetch_array($resul)) {
               echo "<tr>";
               echo "<td>";echo $filas['cod_persona'];echo "</td>";
               echo "<td>";echo $filas['nombre_persona'];echo "</td>";
               echo "<td>";echo $filas['apellidos_persona'];echo "</td>";
               echo "<td>";echo $filas['correo_persona'];echo "</td>";
               echo "<td>";echo $filas['direccion_persona'];echo "</td>";
               echo "<td>";echo $filas['grado_persona'];echo "</td>";


               echo "</tr>";


              }
              

	         ?>



	         </tbody>
         </table>
     </div>
</div>




<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>