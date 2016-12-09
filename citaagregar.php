<?php 
session_start();
 require_once('Conexion.php');

if(isset($_POST['btnregistro'])){
    
     
    
         $Fecha= $_POST['Fecha'];
          $Hora= $_POST['Hora'];
          $Estado= $_POST['Estado'];
        

           
            
         #Creamos un INSERT para agregar el usuario
            $insertUser = "INSERT INTO cita(Hora,Fecha,IdUsuario)
                           VALUES('{$Hora}','{$Fecha}',{$Estado});";
                           # Mandamos el INSERT a la BD 

            if($conexion->query($insertUser)){
               // echo "Enfermedad Registrada Correctamente<br />";  
                 header("Location: citaagregar.php");
            }else{
                echo $conexion->error;
                echo $insertUser;
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
			<h1>Citas</h1>
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
							  <h1>Registro de Citas</h1>
						</hgroup>
				
<br/>

    <form action = "#" method = "POST">
 Fecha
   <input type = "date" name = "Fecha" placeholder = "Fecha" required style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Hora:
   <input  type = "time" name = "Hora" placeholder = "Hora"  required style="WIDTH: 400px; HEIGHT: 20px"  ><br /><br/>
   Paciente:
   
<?php 
  $verEstado = "SELECT * from usuarios;";
	$ResultadoEstado= mysqli_query($conexion, $verEstado);
	
?>
    <select  name="Estado" style="WIDTH: 400px; HEIGHT: 20px;" >
  <?php while ($Estado= $ResultadoEstado -> fetch_object()) {
   ?>
   <option value= "<?php echo $Estado->IdUsuario; ?>
   ">
<?php echo $Estado->Nombre;+" " ?> 
<?php echo $Estado->ApellidoP;+ " " ?>

<?php echo $Estado->ApellidoM; ?>
   </option>
<?php } ?>
</select><br/><br/>
<br/>


         <input type = "submit" name = "btnregistro" value = "Registrar " style='width:160px; height:35px' ><br/>
               
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
									<li><a href="citaagregar.php" ">Agregar</a></li>
								
									<li><a href="citalista.php" ">Lista</a></li>
						
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