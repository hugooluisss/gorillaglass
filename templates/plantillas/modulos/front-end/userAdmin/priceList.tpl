<div class="page-header">
	<h3>Price List</h3>
</div>
<!--
<div class="row">
	<div class="col-xs-12 text-right">
		<a href="cuseradmin" target="_blank">Price List PDF</a>
	</div>
</div>
<br />
<br />-->

<div class="row">
	<div class="col-xs-12 text-right">
		PRICE X 
		<select id="multiplicator">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
	</div>
</div>
<br />
<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>CODE</th>
					<th>DESCRIPTION</th>
					<th>PRICE PER PIECE (USD)</th>
					<th>PRICE PER PAIR (USD)</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.clave}</td>
						<td>{$row.descripcion2}</td>
						<td class="text-right" price="{$row.precio}">{$row.precio|string_format:"%.02f"}</td>
						{if in_array($row.clave[0], array("P", "W", "E", "F"))}
							<td class="text-right" price="{$row.precio}">{($row.precio*2)|string_format:"%.02f"}</td>
						{else}
							<td>&nbsp;</td>
						{/if}
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>