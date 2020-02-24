<div class="row">
	<div class="col-md-12" style="max-height: 600px; overflow-y: scroll;">
	<table class="table table-bordered table-striped small ">
		<tr>
	        <td><b>Hallazgo</b></td>
	    </tr>
	    <tr>
	        <td>{{ $hallazgo->hallazgo }}</td>
	    </tr>
	    <tr>
	        <td><br><b>Acción  Correctiva</b></td>
	    </tr>
	    <tr>
	        <td>{{ $hallazgo->accion2}}</td>
	    </tr>
	    <tr>
	        <td><br><b>Acción Preventiva</b></td>
	    </tr>
	    <tr>
	        <td>{{ $hallazgo->accion}}</td>
	    </tr>
	    <tr>
	        <td><br><b>Acción solicitada</b></td>
	    </tr>
	    <tr>
	        <td>{{ $hallazgo->recomendacion}}</td>
	    </tr>
	</table>
</div>
</div>