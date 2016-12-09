<?php 
session_start();
 require_once('Conexion.php');

if(isset($_POST['btnregistro'])){
    
        $Tipo = $_POST['Tipo'];
        $Nombre= $_POST['Nombre'];
        $Proovedor = $_POST['Proovedor'];
         $Caracteristica= $_POST['Caracteristica'];
         $Cantidad= $_POST['Cantidad'];
          $Costo = $_POST['Costo'];
           $Fecha = $_POST['Fecha'];
           
       
           
            
         #Creamos un INSERT para agregar el usuario
            $insertUser = "INSERT INTO inventario(Tipo,Nombre,Proovedor,Caracteristica,Cantidad,Costo,Fecha)
                           VALUES('{$Tipo}','{$Nombre}','{$Proovedor}','{$Caracteristica}',{$Cantidad},{$Costo},'{$Fecha}');";
                           # Mandamos el INSERT a la BD 

            if($conexion->query($insertUser)){
                echo "INVENTARIO REGISTRADO CORRECTAMENTE<br />";   
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
			<h1>Inventario</h1>
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
							  <h1>Registro Inventario</h1>
						</hgroup>
				
<br/>

    <form action = "#" method = "POST"  >
Tipo:
    <select Name="Tipo"style="WIDTH: 400px; HEIGHT: 20px">
    <option value="Otro">Otro</option>
  <option value="Mueble">Mueble</option>
  <option value="Maquina">Maquina</option>
  <option value="Papeleria">Papeleria</option>
</select><br/><br/>
Nombre:
   <input  type = "text" name = "Nombre" placeholder = "Nombre" required style="WIDTH: 400px; HEIGHT: 20px"  ><br /><br/>
   Proveedor:
   <input type = "text" name = "Proovedor" placeholder = "Proveedor" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Caracteristica: 
   <input type = "text" name = "Caracteristica" placeholder = "Caracteristica" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Cantidad:
   <input type = "number" name = "Cantidad" placeholder = "Cantidad" required min='1'style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Costo:
   <input type = "number" name = "Costo" placeholder = "Costo" min='1' style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Fecha:
   <input type = "date" name = "Fecha" placeholder = "Fecha"  style="WIDTH: 400px; HEIGHT: 20px; "><br /><br>

    
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
									<li><a href="InventarioAgregar.php" ">Agregar</a></li>
								
									<li><a href="inventariolista.php" ">Lista</a></li>
						
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