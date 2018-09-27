<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Carrusel de productos principales</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista"></div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">	
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Dirección web</label>
						<div class="col-lg-6">
							<input class="form-control" id="txtURL" name="txtURL" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtPosicion" class="col-lg-2">Posición</label>
						<div class="col-lg-2">
							<input class="form-control text-right" id="txtPosicion" name="txtPosicion" type="number">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="modal fade" id="winUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Subir Imágen</h1>
			</div>
			<div class="modal-body">
				<form method="post" action="?mod=cproductosprincipales&action=upload" enctype="multipart/form-data">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>