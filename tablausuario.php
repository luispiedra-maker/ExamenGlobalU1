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
		console.log(persona);
		for (var i = 0;Things.length - 1; i >= 0; i--) {
			0;Things[i]
		}
	</script>

</body>
</html>