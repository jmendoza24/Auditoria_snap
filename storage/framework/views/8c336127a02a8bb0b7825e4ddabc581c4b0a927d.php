




      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Empresa: <span class="red">*</span></label>
            <div class="col-md-9">
  				  <?php echo Form::text('razon_social', null, ['class' => 'form-control','required'=>'required']); ?>

            </div>
          </div>
        </div>
      </div>
      
      <input type="hidden" id="id_tipo" name="id_tipo" value="0" class="form-control" required="required">      
    <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>







<?php /**PATH /var/www/html/auditoria/resources/views/empresas/fields.blade.php ENDPATH**/ ?>