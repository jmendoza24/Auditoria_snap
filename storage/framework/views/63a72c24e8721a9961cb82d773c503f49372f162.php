
    <div class="row">
        <div class="col-sm-12">
            <textarea style="width: 100%;height: 200px" class="form-control" id="cometarios" name="cometarios" placeholder="Comentarios"><?php echo e($infoComentarios->comentarios); ?></textarea>
        </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-12">
       <h5>Documento cargado:<br><?php echo e($infoComentarios->nom_doc); ?></h5>
            <input type="file" name="archivo" id="archivo" class="form-control">
            <input type="hidden" name="id_hallazgo" id="id_hallazgo" class="form-control" value="<?php echo e($infoComentarios->id_hallazgo); ?>">
            <input type="hidden" name="dato" id="dato" value="<?php echo e($infoComentarios->idic); ?>">
        </div>
    </div>
    <br><br>
  <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div><?php /**PATH /var/www/html/auditoria/resources/views/info_comentarios/fields2.blade.php ENDPATH**/ ?>