<?php

	require("Clases/Texto.php");

?>

<html>

	<head>
		<title>String</title>
	</head>
	<body>

		
		<h4>TEXTO GUIONIZADO</h4>

		<form action="index.php" method="get">
			<label>Insertar texto: </label><input type="text" name="txtMensaje">	
			<input type="submit" name="btnEnviar" value="Transformar"><br>	
		</form>

		<?php

			if(isset($_GET["btnEnviar"])){
				
				$cadena = $_GET["txtMensaje"];	

				$texto = new Texto($cadena);

				$texto->guionizarTexto();
			}

		?>

	</body>
</html>