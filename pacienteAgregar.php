<?php 
session_start();
 require_once('Conexion.php');

if(isset($_POST['btnregistro'])){
    
        $Nombre = $_POST['Nombre'];
        $ApellidoP= $_POST['ApellidoP'];
        $ApellidoM = $_POST['ApellidoM'];
         $Telefono = $_POST['Telefono'];
          $Correo = $_POST['Correo'];
           $Edad = $_POST['Edad'];
           $Estado=$_POST['Estado'];
           $Seguro=$_POST['Seguro'];

           
            
         #Creamos un INSERT para agregar el usuario
            $insertUser = "INSERT INTO usuarios(Nombre,ApellidoP,ApellidoM,Telefono,Correo,Edad,IdEstado,IdSeguro)
                           VALUES('{$Nombre}','{$ApellidoP}','{$ApellidoM}','{$Telefono}','{$Correo}',{$Edad},{$Estado},{$Seguro});";
                           # Mandamos el INSERT a la BD 

            if($conexion->query($insertUser)){
                echo "USUARIO REGISTRADO CORRECTAMENTE<br />";   
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
			<h1>Paciente</h1>
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
							  <h1>Registro Usuarios</h1>
						</hgroup>
				
<br/>

    <form action = "#" method = "POST">
    Nombre:
   <input  type = "text" name = "Nombre" placeholder = "Nombre"  required style="WIDTH: 400px; HEIGHT: 20px"  ><br /><br/>
   A Paterno:
   <input type = "text" name = "ApellidoP" placeholder = "ApellidoPaterno" required style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
     A Materno:
   <input type = "text" name = "ApellidoM" placeholder = "ApellidoMaterno" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Telefono:
   <input type = "text" name = "Telefono" placeholder = "telefono" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   E-Mail:
   <input type = "text" name = "Correo" placeholder = "correo" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
   Edad:
   <input type = "number" name = "Edad" placeholder = "Edad"  min="1"style="WIDTH: 400px; HEIGHT: 20px; "><br /><br>
 	Estado:
  <?php 
  $verEstado = "SELECT IdEstado, Nombre from estado;";
	$ResultadoEstado= mysqli_query($conexion, $verEstado);
	 $verSeguro = "SELECT IdSeguro, Nombre from seguro;";
	$ResultadoSeguro =mysqli_query($conexion, $verSeguro);
?>
    <select  name="Estado" style="WIDTH: 400px; HEIGHT: 20px;" >
  <?php while ($Estado= $ResultadoEstado -> fetch_object()) {
   ?>
   <option value= "<?php echo $Estado->IdEstado; ?>
   ">
<?php echo $Estado->Nombre; ?> 
   </option>
<?php } ?>
</select><br/><br/>
 Seguro:
   
    <select  name="Seguro" style="WIDTH: 400px; HEIGHT: 20px;" >
  <?php while ($Seguro= $ResultadoSeguro -> fetch_object()) {
   ?>
   <option value= "<?php echo $Seguro->IdSeguro; ?>
   ">
<?php echo $Seguro->Nombre; ?> 
   </option>
<?php } ?>
</select><br/><br/>
    
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
									<li><a href="PacienteAgregar.php" ">Agregar</a></li>
								
									<li><a href="Pacientelista.php" ">Lista</a></li>
						
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