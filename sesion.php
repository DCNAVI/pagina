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
			<h1>Sesion</h1>
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
							  <h1>Sesion de Cita</h1>
						</hgroup>
				
<br/>

    <form action = "#" method = "POST">

   Cita:
   
<?php 
$hoy = date("Y-n-d");
echo $hoy;
  $vercita = "SELECT * from cita where Fecha='$hoy' Order by Hora ;";
	$Resultadocita= mysqli_query($conexion, $vercita);
  $verloc = "SELECT * from localizacion ;";
	$Resultadoloc= mysqli_query($conexion, $verloc);	
	  $verMed = "SELECT * from medicamento where Cantidad >= 1;";
	$ResultadoMed = mysqli_query($conexion, $verMed);
	$verEnf = "SELECT * from enfermedad";
	$ResultadoEnf = mysqli_query($conexion, $verEnf);
?>
    <select  name="cita" style=" WIDTH: 400px; HEIGHT: 20px;" >
  <?php while ($cita= $Resultadocita -> fetch_object()) {
   ?>
   <option value= "<?php echo $cita->IdCita; ?>
   ">
<?php echo $cita->Hora; ?> 
   </option>
<?php } ?>

</select><br/><br/>

(ctrl para seleccionar varios) Enfermedad:
<select multiple name="Enfermedad" size:9 style=" width: 400px; height: 200px;" >
  <?php while ($Enf= $ResultadoEnf -> fetch_object()) {
   ?>
   <option value= "<?php echo $Enf->IdEnfermedad; ?>
   ">
<?php echo $Enf->Nombre; ?> 
   </option>
<?php } ?>
</select><br/><br/>
Largo:
   <input type = "number" name = "largo" placeholder = "largo"  min="1"style=" width: 400px; HEIGHT: 20px; "><br /><br>
 Ancho:
   <input type = "number" name = "ancho" placeholder = "ancho"  min="1"style=" WIDTH: 400px; HEIGHT: 20px; "><br /><br>
  Profundidad:
   <input type = "number" name = "profundidad" placeholder = "profundidad"  min="1"style=" WIDTH: 400px; HEIGHT: 20px; "><br /><br>
  (ctrl para seleccionar varios) Medicamento:
<select multiple name="Medicamento" size:9 style=" width: 400px; height: 200px;" >
  <?php while ($Med= $ResultadoMed -> fetch_object()) {
   ?>
   <option value= "<?php echo $Med->IdMedicamento; ?>
   ">
<?php echo $Med->Nombre; ?> 
   </option>
<?php } ?>
</select><br/><br/>

Localizacion:
<select  name="localizacion" style="WIDTH: 400px; HEIGHT: 20px;" >
  <?php while ($loc= $Resultadoloc -> fetch_object()) {
   ?>
  <option value= "<?php echo $loc->IdLocalizacion; ?> 
   ">
  <?php echo $loc->Nombre; ?> 
   </option>
<?php } ?>
</select><br/><br/>
<br/>


         <input type = "submit" name = "btnregistro" value = "Iniciar " style='width:160px; height:35px' ><br/>
               
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