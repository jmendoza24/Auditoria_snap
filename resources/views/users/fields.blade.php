 @if($editar == 0)             
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
       <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1"></label>
            <div class="col-md-9">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Tipo: </label>
            <div class="col-md-9">
                <select class="form-control" id="tipo" name="tipo">
                    <option value="0">Selecciona una opción</option>
                    <option value="1">Responsable</option>
                    <option value="2">Auditor</option>
                    <option value="3">Gerente</option>
                    <option value="4">Administrador</option>
                </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Contraseña: <span class="red">*</span></label>
            <div class="col-md-9">
                <input type="password" name="password" id="password" class="form-control" required="required">

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Confirmación:<span class="red">*</span></label>
            <div class="col-md-9">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="required">

            </div>
          </div>
        </div>
      </div>
      
      <input type="hidden" id="id_tipo" name="id_tipo" value="0" class="form-control" required="required">      
    <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>
 @else
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
       <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1"></label>
            <div class="col-md-9">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Tipo: </label>
            <div class="col-md-9">
                <select class="form-control" id="tipo" name="tipo">
                    <option value="0" >Selecciona una opción</option>
                    <option value="1" {{ ($user->tipo==1) ? 'selected' : ''  }}>Responsable</option>
                    <option value="2" {{ ($user->tipo==2) ? 'selected' : ''  }}>Auditor</option>
                    <option value="3" {{ ($user->tipo==3) ? 'selected' : ''  }}>Gerente</option>
                    <option value="4" {{ ($user->tipo==4) ? 'selected' : ''  }}>Administrador</option>
                </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Contraseña: <span class="red">*</span></label>
            <div class="col-md-9">
              <input type="password" name="password" id="password" class="form-control" value="">
{{--                             {!! Form::text('password', null, ['id'=>'password','class' => 'form-control','required'=>'required']) !!}
 --}}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput1">Confirmación:<span class="red">*</span></label>
            <div class="col-md-9">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="required" value="">

{{--               {!! Form::text('password_confirmation', null, ['id'=>'password_confirmation','class' => 'form-control','required'=>'required']) !!}
 --}}            </div>
          </div>
        </div>
      </div>
      
      <input type="hidden" id="id_tipo" name="id_tipo" value="0" class="form-control" required="required">      
    <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>

 @endif






