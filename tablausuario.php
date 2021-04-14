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
	<div id="cont">
		
	</div>
	<script>
		let resul = "<table>"
		//console.log(persona);
		for (var i = 0;i<persona["personas"].length;i++) {
			resul = resul + "<tr>" + persona["personas"][i].nombre + "</tr>";
		}
		resul = resul + "</table>";
		document.getElementById("cont").innerHTML=resul;
	</script>

</body>
</html>