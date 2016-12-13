{foreach from=$nodosPadre item="row"}
	<a href="{$row.url}">
		<div class="col-md-3 col-xs-12 col-sm-6" item="{$row.idProducto}">
			<div class="panel panel-default">
				<div class="panel-body">
					<!--<img src="{$PAGE.iconos}/items.jpg"/>-->
					{if count($row.img) eq 0}
						<img src="{$PAGE.iconos}/items.jpg"/>
					{else}
						<img src="repositorio/productos/producto_{$row.idProducto}/{$row.img[0]}"/>
					{/if}
				</div>
				<div class="panel-footer">
					{$row.nombre} <b>{$row.clave}</b>
				</div>
			</div>
		</div>
	</a>
{/foreach}