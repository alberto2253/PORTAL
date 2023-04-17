

<?php
	session_start(); //Siempre al principio.
	require_once("conectar.php");
	$link = conectar();
?>
<?php
	
		$sql="SELECT id FROM usuarios WHERE usuario = '$_POST[usuario]' AND contrasena = '$_POST[contrasena]'";
		$res = mysqli_query($link, $sql);
		if(mysqli_num_rows($res) > 0)
		{
			$registro = mysqli_fetch_array($res);
			##############################################
			## CREO VARIABLES DE SESION PARA EL USUARIO ##
			##############################################
			$_SESSION["nomUsuario"] = $_POST["usuario"];
			$_SESSION["idUsuario"] = $registro["id"];
			
			?>
            	<script>
					alert("Bienvenido <?=$_POST["usuario"]?>");
					window.location.href = "portaladmin.html";
                </script>
            <?php
		}
		else
		{
			?>
			<script> alert("Usuario y/o contraseña incorrectos");</script> 
            <?php
		}
	
?>