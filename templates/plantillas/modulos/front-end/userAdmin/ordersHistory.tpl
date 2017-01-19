<div class="page-header">
	<h1>Order History</h1>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="tblOrdenes" class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">DATE PLACED</th>
							<th class="text-center">SUBTOTAL (USD)</th>
							<th class="text-center">STATUS</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$ordenes item="row"}
							<tr>
								<td>{$row.fecha|date_format}</td>
								<td class="text-right">$ {$row.subtotal}</td>
								<td class="text-center">
									<span class="colorEstado" style="background: {$row.color}">
										{$row.estado}
									</span>
								</td>
								<td style="text-align: center">
									<button class="btn btn-gris viewOrder" pedido="{$row.idPedido}">VIEW ORDER</button>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>