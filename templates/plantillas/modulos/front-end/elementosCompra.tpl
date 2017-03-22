<select class="selectpicker" {if $index eq $etiquetas}multiple{/if} nivels="{$index}" total="{$etiquetas|@count}">
{foreach from=$lista item="row"}
	<option value='{$row.idProducto}' datos='{$row.json}'>{$row.nombre}</option>
{/foreach}
</select>
