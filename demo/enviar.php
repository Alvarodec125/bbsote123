<?php
	include_once("ext/dbopen.php");
	include_once("ext/func.phpinc");
	include_once("ext/head.php");

	//VARIABLES
	$correo=$_POST['corr'];
	$nombre=$_POST['nom'];
	$ap=$_POST['ap'];
	$am=$_POST['am'];
	$telefono=$_POST['tel'];
	$colegio=$_POST['col'];
	$campo=$_POST['campo'];
	
//ingresar datos usuario tabla
	$sql="INSERT INTO datosuser(nombre,apellido_p,apellido_m,colegio,telefono,correo) VALUES ('{$nombre}','{$ap}','{$am}','{$colegio}','{$telefono}','{$correo}');";
	query($sql);

//relacion datos usuario materias escogida
	$tam=count($campo);

	$sql="SELECT id_user from datosuser where nombre='{$nombre}' and correo='{$correo}';";
	$respuesta=query($sql);	
	foreach($respuesta as $fila){
		$id="{$fila['id_user']}";
	}
	
	for($i=0;$i<$tam;$i++){
		$sql="INSERT INTO mate_user VALUES ('{$id}','{$campo[$i]}');";
		query($sql);
	}

?>
<center style="color:black; margin-top: 20%; background-color: white;"><h2> MUCHAS GRACIAS POR LLENAR EL FORMULARIO!! <BR>UEB - PARA MARCAR LA DIFERENCIA!!!<br>
	 <a href="indexMaterias.php"> volver al comienzo </a> </h2>
</center>

<?php
	include_once("ext/foot.php");
	include_once("ext/dbclose.phpinc");
?>
