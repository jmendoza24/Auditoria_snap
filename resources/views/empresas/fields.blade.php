{{-- <!-- Razon Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control']) !!}
</div>

Submit Field
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-default">Cancel</a>
</div> --}}




{{--  @if($editar == 0)             
 --}}      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Empresa: <span class="red">*</span></label>
            <div class="col-md-9">
  				  {!! Form::text('razon_social', null, ['class' => 'form-control','required'=>'required']) !!}
            </div>
          </div>
        </div>
      </div>
      
      <input type="hidden" id="id_tipo" name="id_tipo" value="0" class="form-control" required="required">      
    <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>

{{--  @else
   <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Nombre: <span class="red">*</span></label>
            <div class="col-md-9">
              {!! Form::text('name', null, ['id'=>'name','class' => 'form-control','required'=>'required']) !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Correo: <span class="red">*</span></label>
            <div class="col-md-9">
              {!! Form::text('email', null, ['id'=>'email','class' => 'form-control','required'=>'required']) !!}
            </div>
          </div>
        </div>
      </div>
       
      
      <input type="hidden" id="id_tipo" name="id_tipo" value="0" class="form-control" required="required">      
    <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>

 @endif
 --}}





