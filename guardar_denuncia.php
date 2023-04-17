

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "portal_denuncias";

$conexion = mysqli_connect($host, $user, $password, $database);

// Verificar si la conexión fue exitosa
if (mysqli_connect_error()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

// Recuperar los datos enviados desde el formulario
$empresa = $_GET["empresa"];
$pais = $_GET["pais"];
$estado = $_GET["estado"];
$nucentro = $_GET["nucentro"];
$anonimo = $_GET["anonimo"];
$nombre = $_GET["nombre"];
$email = $_GET["email"];
$telefono = $_GET["telefono"];
$detalle_denuncia = $_GET["detalle_denuncia"];
$fecha_hechos = $_GET["fecha_hechos"];
$password = $_GET["password"];
$estatus = "Abierto";



$folio = str_pad(mt_rand(1, 99999), 5, "0", STR_PAD_LEFT);


$query = "INSERT INTO denuncias (empresa, pais, estado, nucentro, anonimo, nombre, email, telefono, detalle_denuncia, fecha_hechos, password, folio_denuncia, estatus) VALUES ('$empresa', '$pais', '$estado', '$nucentro', '$anonimo', '$nombre', '$email', '$telefono', '$detalle_denuncia', '$fecha_hechos', '$password','$folio', '$estatus')";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
  
 ?>
 <script type="text/javascript">alert("Denuncia recibida anota tu folio: " + <?=$folio?>);</script>
 <script type="text/javascript">alert("Registro de denuncia exitoso ");</script><?php
} else {
  echo "Error al guardar la denuncia: " . mysqli_error($conexion);
}


mysqli_close($conexion);
?>

