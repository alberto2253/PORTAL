<?php
  require_once("conectar.php");
  $link = conectar();
  $comentario = $_POST['comentario'];
  $folio = $_POST['folio'];
  $sql = "INSERT INTO comentarios (id_denuncia, comentario) SELECT denuncias.id_denuncia, '$comentario' FROM denuncias WHERE denuncias.folio_denuncia = '$folio'";
  $res = mysqli_query($link, $sql);

   $estatus=$_POST['estatus'];
   $sql2 = "UPDATE denuncias SET estatus='$estatus' WHERE folio_denuncia='$folio'";
   $res2 = mysqli_query($link, $sql2);
?>

