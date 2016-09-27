<div class="box">
	<div class="box-body">
		<table id="tblEstados" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idEstado}</td>
						<td>{$row.nombre}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							{if $row.eliminar eq 1}
								<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" item="{$row.idEstado}"><i class="fa fa-times"></i></button>
							{/if}
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>