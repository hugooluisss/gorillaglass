<table id="tblCarrito" class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Product Total</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
		<tr>
			<td><input type="checkbox" value="{$row.idMovimiento}"/></td>
			<td>{$row.clave}</td>
			<td>{$row.descripcion}</td>
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