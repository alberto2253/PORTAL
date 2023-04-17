 
  <?php
  require_once("conectar.php");
  $link = conectar();
  $sql = "SELECT folio_denuncia,empresa FROM denuncias";
  $res = mysqli_query($link, $sql);?>
 <div style="height: 200px; overflow: auto;">
  <table>
    <thead>
      <tr>
        <th>Folio</th>
        <th>Empresa denunciante</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while($registro = mysqli_fetch_array($res)){ ?>
      <tr>
        <td><?=$registro["folio_denuncia"]?></td>
        <td><?=$registro["empresa"]?></td>
        <td><a href="javascript:void(0);" onClick="javascript:detalle('<?=$registro["folio_denuncia"]?>')"; data-rel="reload">Ver detalle</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>






