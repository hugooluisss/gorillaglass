<div id="modal-car">
	<div class="container">
		<div class="col-md-6 modal-car-body">
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-10">
					<h2>Current Order</h2>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 text-right">
					<a href="#lnkCerrar" id="lnkCerrar" class="circle" onclick="javascript: return false;">
						<i class="fa fa-times-circle-o fa-3x hidden-xs" aria-hidden="true"></i>
						<i class="fa fa-times-circle-o fa-2x visible-xs" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 table-responsive">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<br />
					<a href="#lnkCerrar" id="lnkCerrar" onclick="javascript: return false;">< Back to products</a>
				</div>
				<div class="col-md-6">
					Done adding products?<br />
					<a href="#">Go to your prole page to place the order</a>
				</div>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-5 modal-car-body">
			<div class="row">
				<div class="col-sm-6 col-md-12">
					<br />
					<center>
					{if count($images) eq 0}
						<img src="{$PAGE.iconos}/items.jpg" class="img-responsive"/>
					{else}
						<img src="repositorio/productos/producto_{$itemId}/{$images[0]}" class="img-responsive"/>
					{/if}
					</center>
				</div>
				<div class="col-sm-6 col-md-12">
					<br />
					<br />
					{foreach name="etiquetas" from=$etiquetas item="row"}
						<div class="row">
							<div class="col-xs-5 col-sm-5 col-md-5">
								{$row}
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7" nivel="{$smarty.foreach.etiquetas.iteration}" total="{$etiquetas|@count}">
								<div class="btn-group order">
									<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECT</button>
									<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
									<div class="dropdown-menu">
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					<div class="row">
						<br />
						<div class="col-xs-5 col-sm-5 col-md-5 text-right">QUANTITY</div>
						<div class="col-xs-7 col-sm-7 col-md-3">
							<input type="number" value="0" id="txtCantidad" name="txtCantidad" class="form-control" />
						</div>
					</div>
					<div class="row">
						<br />
						<div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 text-center">
							<button class="btn btn-addProducto">ADD</button>
						</div>
					</div>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-xs-12 text-center">
					<a href="#lnkCerrar" id="lnkCerrar" class="visible-xs" onclick="javascript: return false;">< Back to products</a>
				</div>
			</div>
			<br /><br />
			<input type="hidden" id="idPedido" name="idPedido" value="{$idPedido}" />
			<input type="hidden" id="cliente" name="cliente" value="{$cliente}" />
		</div>
	</div>
</div>