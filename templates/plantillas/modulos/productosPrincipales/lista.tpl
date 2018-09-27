<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>URL</th>
					<th>Posicion</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idItem}</td>
						<td>{$row.url}</td>
						<td>{$row.posicion}</td>
						<td>{if $row.existe}<img src="repositorio/principales/{$row.idItem}.jpg" style="width: 50px; height: 50px;" />{/if}</td>
						<td class="text-right">
							<button type="button" class="btn btn-success" action="upload" title="upload" datos='{$row.json}'><i class="fa fa-upload"></i></button>
							
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" item="{$row.idItem}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>