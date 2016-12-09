<?php 
session_start();
 require_once('Conexion.php');
 if(isset($_POST['btnregistro'])){
 	$Fecha= $_POST['Fecha'];
$verUsuarios="SELECT * From cita c INNER JOIN Usuarios u
ON c.IdUsuario=u.IdUsuario WHERE Fecha='{$Fecha}' ORDER BY Hora";
$resultadousuario= $conexion->query($verUsuarios);

}else {

	$verUsuarios="SELECT * From cita c INNER JOIN Usuarios u
ON c.IdUsuario=u.IdUsuario ORDER BY Fecha, Hora";
$resultadousuario= $conexion->query($verUsuarios);
}


 if (isset($_GET['eliminar'])) {
    	#capturamos la variable url 
    	$idusuarioeliminar=$_GET['eliminar'];
    	#creamos la consulta a eliminar 
    	$eliminarusuario = "DELETE FROM cita WHERE IdCita= {$idusuarioeliminar};";
    	#MANDAMOS LA CONSULTA ALA BD 
    	if ($conexion->query($eliminarusuario)){
    		header("location:citaLista.php");
    	}else{
}
echo "Error al eliminar Cita intente de nuevo .<br/>";

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
							  <h1>Lista de Citas</h1>
						</hgroup>
				
<br/>
  <form action = "#" method = "POST">
   <input type = "date" name = "Fecha" placeholder = "Fecha" style="WIDTH: 400px; HEIGHT: 20px" ><br /><br/>
    <input type = "submit" name = "btnregistro" value = "Buscar " style='width:160px; height:35px' ><br/>
               
                </form> <!--fin form -->
<table>
		
		<td>Fecha</td>
		<td>Hora</td>
		<td>Usuario</td>
		<td>Eliminar</td>
		<td>Editar</td>

	<?php while($Usuarios= $resultadousuario->fetch_object()) { ?>
		<tr>

		
		<td> <?php echo $Usuarios->Fecha; ?></td>
		<td> <?php echo $Usuarios->Hora; ?></td>
		<td> <?php echo $Usuarios->Nombre; ?>&nbsp<?php echo $Usuarios->ApellidoP; ?>&nbsp<?php echo $Usuarios->ApellidoM; ?></td>
		<td><?php echo "<a href='citaLista.php?eliminar={$Usuarios-> IdCita}'>Eliminar</a>";?></td>
		<td><?php echo "<a href='enfermedadeditar.php?eliminar={$Usuarios-> IdCita}'>Editar</a>";?></td>
		</tr>
		<?php } ?>

</table>
 
               
              

                
</center>
				
					</div>
				
				
					<div id='menusd'>
						<hgroup> 
							<h2>Menu</h2>
							<nav>
							</hgroup>

								<ul>
										<li><a href="index.php" ">Inicio</a></li>
									<li><a href="citaAgregar.php" ">Agregar</a></li>
								
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