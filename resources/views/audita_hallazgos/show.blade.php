@include('audita_hallazgos.show_fields')
<h4>Comentarios</h4>
<hr>
    <div class="modal-footer" id="footer_clientes_cuentas">
              <button data-toggle="modal" data-target="#cometarios" type="button" class="btn btn_azul" ><i class="fa fa-plus"></i> Comentario</button>
          </div>
        <br><br>
        <div class="" style="overflow: auto;" id="tbl_com">
               @include('info_comentarios.table')
       </div>
		<div class="modal fade text-left" id="cometarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      <div class="modal-content" id="contenidos">
		        <div class="modal-header naranja">
		          <h4 class="modal-title" id="myModalLabel17">Nuevo Comentario</h4>
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		        </div>
		        <form method="POST" action="/comentarios" enctype="multipart/form-data">
              @csrf
      		          <div class="modal-body" id="">
                       @include('info_comentarios.fields')
      					    </div>
		      </form>
		      </div>
		    </div>
		  </div>

      <div class="modal fade text-left" id="cometarios2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="contenidos">
            <div class="modal-header naranja">
              <h4 class="modal-title" id="myModalLabel17">Editar Comentario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="/comentarios2" enctype="multipart/form-data">
              @csrf
                    <div class="modal-body" id="fields2">
                    </div>
          </form>
          </div>
        </div>
      </div>
