
<?php
require_once("conectar.php");
$link = conectar();

$folio = $_POST['folio'];
$password = $_POST['password'];

// Primera consulta para obtener información del folio y estatus
$sql = "SELECT folio_denuncia, estatus FROM denuncias WHERE folio_denuncia = '$folio' AND password = '$password'";
$res = mysqli_query($link, $sql);

if(mysqli_num_rows($res) > 0) {
    $registro = mysqli_fetch_array($res);
    $estatus = $registro['estatus'];
?>
    <h2>Información del Folio</h2>
    <p><strong>Número de Folio:</strong><?=$folio?><span id="numero-folio"></span></p>
    <p><strong>Estatus de la Denuncia:</strong><?=$estatus?><span id="estatus-denuncia"></span></p>
    <p><strong>Historial de Comentarios:</strong></p>
    <ul>
    <?php
        // Segunda consulta para obtener los comentarios
        $sql = "SELECT comentario FROM comentarios INNER JOIN denuncias ON comentarios.id_denuncia = denuncias.id_denuncia WHERE denuncias.folio_denuncia = '$folio'";
        $res = mysqli_query($link, $sql);
        while($registro = mysqli_fetch_array($res)) {
    ?>
            <li><?=$registro["comentario"]?></li>
    <?php
        }
    ?>
    </ul>
<?php
} else {
?>
    <script> alert("Folio y/o contraseña incorrectos");</script>
<?php
}
?>


