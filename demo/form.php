<?php
	include_once("ext/dbopen.php");
	include_once("ext/func.phpinc");
	include_once("ext/head.php");
?>
	<center>
	<h1 style=" color: white;  font-size: 40px;"> 
	Universidad Evangélica Boliviana <br>  Para Marcar La Diferencia </h1> 
	</center>

		<h3 style=" background: rgba(248, 248, 255, 0.8); font-size: 28px; margin-top: 30px;">
		<center>FORMULARIO DATOS PERSONALES</center>
		<br>
		<form action="enviar.php" method="post" style="margin-left: 38%;">
			Correo: <input type="email" name="corr" style="font-size: 18px;">
				<br><br>
			Nombre: <input type="text" name="nom" style="font-size: 18px;">
				<br><br>
			Apellido Paterno: <input type="text" name="ap" style="font-size: 18px;">
				<br><br>
			Apellido Materno: <input type="text" name="am" style="font-size: 18px;">
				<br><br>
			Colegio: <input type="text" name="col" style="font-size: 18px;">
				<br><br>
			Telefono: <input type="text" name="tel" style="font-size: 18px;">
				<br><br>
			<?php

			$sql="select * from materias;";
			$respuesta=query($sql);

			//INICIO DE LA TABLA
  			echo "<table border=\"10\" style=\"font-size: 26px;\">";
   			echo "<tr bgcolor=\"yellow\">";
   			echo "<td> _º_ </td>";
    		echo "<td> Horario </td>";
    		echo "<td> Materia </td>";
   			echo "</tr>";

    		foreach ($respuesta as $a){
      		echo"<tr bgcolor=\"#F7D4C9\">";
      		echo "<td> <input type=\"checkbox\" name=\"campo[]\" value=\"{$a['id_m']}\"> </td>";
      		echo "<td> {$a['horario']} </td>";
      		echo "<td> {$a['materia']} </td>";
   			echo "</tr>";
     		} 
  			echo "</table>";
			?>
			<br>
				<input type="submit" value="Inscribir" style="font-size: 25px; margin-left: 13%;">
<br><br>
		</form>
	</h3>
	

<?php
	include_once("ext/foot.php");
	include_once("ext/dbclose.phpinc");
?>