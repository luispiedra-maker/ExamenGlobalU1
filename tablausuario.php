<!DOCTYPE html>
<html>
<head>
	
	<title>Usuarios</title>
</head>
<body>
	<?php 
		require_once("usuario.php");
		$obj = new Usuario();
		$arreglo = $obj->consultar();
		$json = json_encode($arreglo);
		//echo json_encode($arreglo);
		echo "<script>
			var persona= $json;
		 </script>";
	?>
	<div>
		<table id="cont">
			
		</table>
		
	</div>
	<script>
		let resul = "<th>Id</th><th>Nombre</th><th>Edad</th><th>Cuidad</th>";
		//console.log(persona);
		for (var i = 0;i<persona["personas"].length;i++) {
			//resul = resul + "<tr>" + persona["personas"][i].nombre + "</tr>";
			resul+= "<tr><td>" + persona["personas"][i].idpersona + "</td>";
			resul+= "<td>" + persona["personas"][i].nombre + "</td>";
			resul+= "<td>" + persona["personas"][i].edad + "</td>";
			resul+= "<td>" + persona["personas"][i].cuidad + "</td></tr>";

		}
		
		document.getElementById("cont").innerHTML=resul;
	</script>

</body>
</html>