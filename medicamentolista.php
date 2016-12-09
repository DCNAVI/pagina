<?php 
session_start();
 require_once('Conexion.php');
$verUsuarios="SELECT * From medicamento ";
$resultadousuario= $conexion->query($verUsuarios);


 if (isset($_GET['eliminar'])) {
    	#capturamos la variable url 
    	$idusuarioeliminar=$_GET['eliminar'];
    	#creamos la consulta a eliminar 
    	$eliminarusuario = "DELETE FROM medicamento WHERE IdMedicamento= {$idusuarioeliminar};";
    	#MANDAMOS LA CONSULTA ALA BD 
    	if ($conexion->query($eliminarusuario)){
    		header("location:medicamentolista.php");
    	}else{
echo "Error al eliminar Usuario intente de nuevo .<br/>";

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
			<h1>Medicamento</h1>
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
							  <h1>Lista de Medicamento</h1>
						</hgroup>
				
<br/>

<table>
		<td>Id</td>
		<td>Nombre</td>
		<td>Proveedor</td>
		<td>Caracteristicas</td>
		<td>Cantidad</td>
		<td>Costo</td>
		<td>Caducidad</td>
		<td>Eliminar</td>
		<td>Editar</td>
	<?php while($Usuarios= $resultadousuario->fetch_object()) { ?>
		<tr>

		<td> <?php echo $Usuarios->IdMedicamento; ?></td>
		<td> <?php echo $Usuarios->Nombre; ?></td>
		<td> <?php echo $Usuarios->Proveedor; ?></td>
		<td> <?php echo $Usuarios->Caracteristicas; ?></td>
		<td> <?php echo $Usuarios->Cantidad; ?></td>
		<td> $<?php echo $Usuarios->Costo; ?></td>
		<td> <?php echo $Usuarios->Caducidad; ?></td>
		
		<td><?php echo "<a href='medicamentolista.php?eliminar={$Usuarios-> IdMedicamento}'>Eliminar</a>";?></td>
		<td><?php echo "<a href='medicamentoeditar.php?eliminar={$Usuarios-> IdMedicamento}'>Editar</a>";?></td>
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