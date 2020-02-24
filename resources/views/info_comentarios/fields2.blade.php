
    <div class="row">
        <div class="col-sm-12">
            <textarea style="width: 100%;height: 200px" class="form-control" id="cometarios" name="cometarios" placeholder="Comentarios">{{ $infoComentarios->comentarios }}</textarea>
        </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-12">
       <h5>Documento cargado:<br>{{ $infoComentarios->nom_doc }}</h5>
            <input type="file" name="archivo" id="archivo" class="form-control">
            <input type="hidden" name="id_hallazgo" id="id_hallazgo" class="form-control" value="{{ $infoComentarios->id_hallazgo }}">
            <input type="hidden" name="dato" id="dato" value="{{ $infoComentarios->idic  }}">
        </div>
    </div>
    <br><br>
  <div class="modal-footer" id="footer_clientes_cuentas">
      <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>