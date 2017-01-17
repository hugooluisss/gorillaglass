<table id="tblCarrito" class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th class="hidden-xs text-center">Description</th>
			<th class="text-center">
				<span class="hidden-xs">Quantity</span>
				<span class="visible-xs">Q</span>
			</th>
			<th class="text-center">
				<span class="hidden-xs">Unit Price</span>
				<span class="visible-xs">UP</span>
			</th>
			<th class="text-center">
				<span class="hidden-xs">Product Total</span>
				<span class="visible-xs">PT</span>
			</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
		<tr>
			<td><input type="checkbox" value="{$row.idMovimiento}"/></td>
			<td >{$row.clave}</td>
			<td class="hidden-xs">{$row.descripcion}</td>
			<td class="text-right">{$row.cantidad}</td>
			<td class="text-right">{$row.precio / $row.cantidad}</td>
			<td class="text-right">{$row.precio}</td>
		</tr>
		{foreachelse}
			<tr>
				<td class="text-center" colspan="6">Sin productos</td>
			</tr>
		{/foreach}
	</tbody>
</table>

<div class="row">
	<div class="col-md-5">
		<a class="btn btn-delete btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Remove selected items</a>
	</div>
	<div class="col-md-7">
		<div class="alert alert-gris">
			<div class="row">
				<div class="col-xs-6 text-right">DISCOUNT</div>
				<div class="col-xs-6 text-right">{$etiquetaDescuento}%</div>
				<div class="col-xs-6 text-right">SUBTOTAL(USD)</div>
				<div class="col-xs-6 text-right">{$total}</div>
			</div>
		</div>
	</div>
</div>