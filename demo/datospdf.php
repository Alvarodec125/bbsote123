<?php
	include_once("ext/dbopen.php");
	include_once("ext/func.phpinc");
	include_once("ext/head.php");

//recuperar relacion usuario - materia
		$sql="SELECT * FROM mate_user as mu, materias as m, datosuser as du where mu.usuario_ins=du.id_user and mu.materia=m.id_m;";
	$respuesta=query($sql);
	

	echo "<table class=\"table table-dark table-borderless\" style=\"margin-top: 120px;\">";
   			echo "<tr bgcolor=\"red\">";
   			echo "<th> Nombre </th>";
    		echo "<th> Apellido Paterno </th>";
    		echo "<th> Apellido Materno </th>";
    		echo "<th> Tel&eacute;fono </th>";
    		echo "<th> Correo </th>";
    		echo "<th> Colegio </th>";
    		echo "<th> Materia </th>";
   			echo "</tr>";

    	foreach ($respuesta as $fila) {
    		echo "<tr bgcolor=\"white\">";
			echo "<td> {$fila['nombre']} </td>";
			echo "<td> {$fila['apellido_p']} </td>";
			echo "<td> {$fila['apellido_m']} </td>";
			echo "<td> {$fila['telefono']} </td>";
			echo "<td> {$fila['correo']} </td>";
			echo "<td> {$fila['colegio']} </td>";
			echo "<td> {$fila['materia']} </td>";
			echo "</tr>";
	}
  			echo "</table>";

  	?>
<?php
	include_once("ext/foot.php");
	include_once("ext/dbclose.phpinc");
?>