
  <?php
  require_once("conectar.php");
  $link = conectar();
  $sql = "SELECT folio_denuncia FROM denuncias WHERE folio_denuncia = $_POST[id_denuncia]";
  $res = mysqli_query($link, $sql);
  while($registro = mysqli_fetch_array($res)){
  ?>
  
  <label >FOLIO</label>
  <input type="text" id="folio" name="folio" value="<?=$registro["folio_denuncia"]?>" >
  <label name="comentario">INGRESE COMENTARIO</label>
  <textarea name="comentario" required></textarea>
  <label id="estatus" name="estatus" >Cambiar estatus de denuncia</label>
          <select id="estatus" name="estatus" required>
              <option value="Abierto">Seleccione</option>
              <option value="Cancelada">Cancelada</option>
              <option value="Finalizada">Finalizada</option>
           </select>
  <button type="submit"  value="Guardar" id="btnguardar"  onClick="javascript:validarFormulario();" >GUARDAR</button> 
 <?php

}
  ?>
