<div class="row">
  {!! Form::hidden('id', null, ['class' => 'form-control']) !!}

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Año:</label>
      <div class="col-md-9">
      {!! Form::number('anio', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Trimestre:</label>
      <div class="col-md-9">
        <select class="form-control" name="trimestre" required="">
          <option value="">Seleccione...</option>
          @for($i=1; $i<=4; $i++)
            <option value="{{ $i}}">{{ $i}}</option>
          @endfor
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Dirección:</label>
      <div class="col-md-9">
      {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Region:</label>
      <div class="col-md-9">
        {!! Form::text('region', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Auditor 1:</label>
      <div class="col-md-9">
        <select class="form-control" id="auditor" name="auditor" style="width: 100%">
          <option value="0">selecciona una opción</option>
          @foreach($auditores as $auditores)
            <option value="{{ $auditores->id}}">{{ $auditores->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Auditor 2:</label>
      <div class="col-md-9">
        <select class="form-control" id="auditor2" name="auditor2" style="width: 100%">
          <option value="0">selecciona una opción</option>
          @foreach($auditores as $auditores2)
            <option value="{{ $auditores2->id}}">{{ $auditores2->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Proceso:</label>
      <div class="col-md-9">
        {!! Form::text('proceso', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Depto:</label>
      <div class="col-md-9">
        {!! Form::text('depto', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Area:</label>
      <div class="col-md-9">
        {!! Form::text('area', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Responsable:</label>
      <div class="col-md-9">
        <select class="form-control" id="responsable" name="responsable" style="width: 100%">
         <option value="0">selecciona una opción</option>
         @foreach($responsables as $responsable)
          <option value="{{ $responsable->id}}">{{ $responsable->name}}</option>
         @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Fecha Inf:</label>
      <div class="col-md-9">
        {!! Form::text('fecha_inf', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Fecha Com:</label>
      <div class="col-md-9">
        {!! Form::text('fecha_com', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Estatus:</label>
      <div class="col-md-9">
        {!! Form::text('estatus', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Gerencia:</label>
      <div class="col-md-9">
        <select class="form-control" id="gerencia" name="gerencia" style="width: 100%">
         <option value="0">selecciona una opción</option>
         @foreach($gerentes as $gerente)
            <option value="{{ $gerente->id}}">{{ $gerente->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Calificacion:</label>
      <div class="col-md-9">
        {!! Form::text('calificacion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Calificacion Num:</label>
      <div class="col-md-9">
        {!! Form::number('calificacion_num', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Tipo:</label>
      <div class="col-md-9">
        {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Empresa:</label>
      <div class="col-md-9">
        {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Hallazgo:</label>
      <div class="col-md-9">
        {!! Form::textarea('hallazgo', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Acción solicitada:</label>
      <div class="col-md-9">
        {!! Form::textarea('recomendacion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Riesgo:</label>
      <div class="col-md-9">
        {!! Form::textarea('riesgo', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Acción Preventiva:</label>
      <div class="col-md-9">
        {!! Form::textarea('accion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Acción  Correctiva:</label>
      <div class="col-md-9">
        {!! Form::textarea('accion2', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Causa raiz:</label>
      <div class="col-md-9">
        {!! Form::textarea('causa_raiz', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Situacion:</label>
      <div class="col-md-9">
        {!! Form::textarea('situacion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <hr>
<div class="col-md-12">
  <div class=" pull-right">
    <!--<a href="/hallazgos"><span class="btn btn-warning">Cancelar</span></a>--->
    <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>
</div>


</div>
<!---
 <div class="card-content">
      <div class="table-responsive">
           <table class="table-responsive table table-bordered" >
             <tr>{!! Form::hidden('id', null, ['class' => 'form-control']) !!}
               <td><h5 class="">Año: </h5></td>
               <td>{!! Form::number('anio', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
               <td><h5 class="">Trimestre: </h5></td>
               <td>{!! Form::number('trimestre', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
             </tr>
             <tr>
                <td><h5 class="">Dirección: </h5></td>
               <td>{!! Form::text('direccion', null, ['class' => 'form-control']) !!}</td>
                <td><h5 class="">Region: </h5></td>
               <td>{!! Form::text('region', null, ['class' => 'form-control']) !!}</td>
            </tr>
              
            <tr>
               <td><h5 class="">Auditor 1: </h5></td>
               <td>
                   <select class="form-control" id="auditor" name="auditor" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                   </select>
               <td><h5>Auditor 2: </h5></td>
               <td>
                    <select class="form-control" id="auditor2" name="auditor2" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                   </select>
            </tr>
             <tr>
               <td><h5 class="">Proceso: </h5></td>
               <td>{!! Form::text('proceso', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Depto: </h5></td>
               <td>{!! Form::text('depto', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Area: </h5></td>
               <td>{!! Form::text('area', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Responsable: </h5></td>
               <td>
                    <select class="form-control" id="responsable" name="responsable" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                    </select>
               </td>
             </tr>
             <tr>
               <td><h5 class="">Fecha Inf: </h5></td>
               <td>{!! Form::text('fecha_inf', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Fecha Com: </h5></td>
               <td>{!! Form::text('fecha_com', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Estatus: </h5></td>
               <td>{!! Form::text('estatus', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Archivo: </h5></td>
               <td>{!! Form::text('archivo', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Fila: </h5></td>
               <td>{!! Form::number('fila', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
               <td><h5 class="">Fila Id: </h5></td>
               <td>{!! Form::text('fila_id', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Anexo: </h5></td>
               <td>{!! Form::text('anexo', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Comentarios: </h5></td>
               <td>{!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Num Apoyo: </h5></td>
               <td>{!! Form::number('num_apoyo', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
               <td><h5 class="">Jefatura: </h5></td>
               <td>
                  <select class="form-control" id="jefatura" name="jefatura" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                    </select>
                </td>
             </tr>
             <tr>
               <td><h5 class="">Gerencia: </h5></td>
               <td>
                    <select class="form-control" id="gerencia" name="gerencia" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                    </select>
                </td>
               <td><h5 class="">Fec Usr: </h5></td>
               <td>{!! Form::text('fec_usr', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Aud Tip Val: </h5></td>
               <td>{!! Form::text('aud_tip_val', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Aud Monto: </h5></td>
               <td>{!! Form::number('aud_monto', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Año Folio: </h5></td>
               <td>{!! Form::number('ano_folio', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
               <td><h5 class="">Aud Reincidente: </h5></td>
               <td>{!! Form::text('aud_reincidente', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Aud Com Anexo: </h5></td>
               <td>{!! Form::text('aud_com_anexo', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Aud Fir Val: </h5></td>
               <td>{!! Form::number('aud_fir_val', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Aud Fec Asignado: </h5></td>
               <td>{!! Form::text('aud_fec_asignado', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">Aud Fec Revisado: </h5></td>
               <td>{!! Form::text('aud_fec_revisado', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Aud Fec Final: </h5></td>
               <td>{!! Form::text('aud_fec_final', null, ['class' => 'form-control']) !!}</td>
               <td><h5 class="">User Id: </h5></td>
               <td>{!! Form::text('user_id', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td><h5 class="">Enviar Mail: </h5></td>
               <td>
                    <select class="form-control" id="enviar_mail" name="enviar_mail" style="width: 100%">
                     <option value="0">No</option>
                     <option value="1">Si</option>
                    </select>
               </td>
               <td><h5 class="">User Id Resp: </h5></td>
               <td>{!! Form::text('user_id_resp', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
                 <td><h5 class="">Tipo: </h5></td>
                 <td>{!! Form::text('tipo', null, ['class' => 'form-control']) !!}</td>
                 <td><h5 class="">Calificacion: </h5></td>
                 <td>{!! Form::text('calificacion', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
                 <td><h5 class="">Calificacion Num: </h5></td>
                 <td>{!! Form::number('calificacion_num', null, ['min'=>'0','step'=>'any','class' => 'form-control']) !!}</td>
                 <td><h5 class="">Empresa: </h5></td>
                 <td>{!! Form::text('empresa', null, ['class' => 'form-control']) !!}</td>
             </tr>

             <tr>
               <td colspan="2"><h5 class="">Hallazgo: </h5></td> 
               <td colspan="2">{!! Form::textarea('hallazgo', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Recomendacion: </h5></td>
               <td colspan="2">{!! Form::textarea('recomendacion', null, ['class' => 'form-control']) !!}</td>   
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Riesgo: </h5></td>
               <td colspan="2">{!! Form::textarea('riesgo', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Accion: </h5></td>
               <td colspan="2">{!! Form::textarea('accion', null, ['class' => 'form-control']) !!}</td>
             </tr>
             
             <tr>
               <td colspan="2"><h5 class="">Accion2: </h5></td>
               <td colspan="2">{!! Form::textarea('accion2', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
                 <td colspan="2"><h5 class="">causa raiz: </h5></td>
                 <td colspan="2">{!! Form::textarea('causa_raiz', null, ['class' => 'form-control']) !!}</td>
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Situacion: </h5></td>
               <td colspan="2">{!! Form::textarea('situacion', null, ['class' => 'form-control']) !!}</td>
             </tr>
                
          </table>    

        <div class="modal-footer" id="footer_clientes_cuentas">
              <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
          </div>
        
    </div>
</div>--->