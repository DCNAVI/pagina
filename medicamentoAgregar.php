<?php 
session_start();
 require_once('Conexion.php');

if(isset($_POST['btnregistro'])){
    
        $Nombre = $_POST['Nombre'];
        $Proveedor= $_POST['Proveedor'];
        $Caracteristicas = $_POST['Caracteristicas'];
         $Cantidad = $_POST['Cantidad'];
          $Costo = $_POST['Costo'];
           $Caducidad = $_POST['Caducidad'];
       
           
            
         #Creamos un INSERT para agregar el usuario
            $insertUser = "INSERT INTO medicamento(Nombre,Proveedor,Caracteristicas,Cantidad,Costo,Caducidad)
                           VALUES('{$Nombre}','{$Proveedor}','{$Caracteristicas}',{$Cantidad},{$Costo},'{$Caducidad}');";
                           # Mandamos el INSERT a la BD 

            if($conexion->query($insertUser)){
                echo "MEDICAMENTO REGISTRADO CORRECTAMENTE<br />";   
            }else{
                echo $conexion->error;
            }    
}


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Hospital General </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
</head>
<body>

	<div id='contenido'>
		<header>
			<hgroup>
			<h1>Medicamentos</h1>
			</hgroup>
		
		<nav>
			<ul>
		<li><a href="index.php" > Inicio</a></li>
			<li><a href="PacienteAgregar.php">Paciente</a></li>
			<li><a href="enfermedadAgregar.php">Enfermedades</a></li>
			<li><a href="InventarioAgregar.php">Inventario</a></li>
			<li><a href="medicamentoAgregar.php">Medicamento</a></li>
			<li><a href="citaagregar.php ">Cita</li>
			<li><a href="sesion.php ">SesionCita</a></li>

			</ul>
		</nav>
		</header>
		<section>
			<div id='principal'>
					<div id='formulariosd'>
					<center>
  
						<hgroup> 
							  <h1>Registro Medicamentos</h1>
						</hgroup>
				
<br/>

    <form action = "#" method = "POST">
    Nombre:
   <input  type = "text" name = "Nombre" placeholder = "Nombre" required style="WIDTH: 400px; HEIGHT: 20px"  ><br /><br/>
   Proveedor:
   <input type = "text" name = "Proveedor" placeholder = "Proveedor" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Caracteristica:
   <input type = "text" name = "Caracteristicas" placeholder = "Caracteristicas" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Cantidad:
   <input type = "number" name = "Cantidad" placeholder = "Cantidad" required  style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Costo:
   <input type = "number" name = "Costo" placeholder = "Costo" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Caducidad:
   <input type = "date" name = "Caducidad" placeholder = "Caducidad"  style="WIDTH: 400px; HEIGHT: 20px; "><br /><br>
 
    
<br/>


         <input type = "submit" name = "btnregistro" value = "Registrarse " style='width:160px; height:35px' ><br/>
               
                </form> <!--fin form -->

                
</center>
				
					</div>
				
				
					<div id='menusd'>
						<hgroup> 
							<h2>Menu</h2>
							<nav>
							</hgroup>

								<ul>
									<li><a href="index.php" ">Inicio</a></li>
									<li><a href="medicamentoAgregar.php" ">Agregar</a></li>
								
									<li><a href="medicamentolista.php" ">Lista</a></li>
						
									<li><a href="Reporte.php ">Reporte</a></li>
								</ul>
							</nav>
					</div>
			</div>
		</section>
		
	</div>
	<script src="js/main.js"></script>
</body>
</html>