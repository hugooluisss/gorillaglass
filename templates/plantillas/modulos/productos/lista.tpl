{function menu level=1}
	{foreach $data as $entry}
		<tr class="treegrid-{$entry.contador} {if $level neq ""}treegrid-parent-{$level}{/if}">
			<td><span class="text-primary">{$entry.clave}</span> {$entry.nombre}</td>
			<td class="text-right">{$entry.precio}</td>
			<td class="text-right"><b>{$entry.total}</b></td>
			<td>
				<button type="button" class="btn btn-success" action="agregar" title="Nuevo" datos='{$entry.json}'><i class="fa fa-plus"></i></button>
				<button type="button" class="btn btn-default" action="imagen" title="Imagen" identificador="{$entry.idProducto}"><i class="fa fa-picture-o"></i></button>
				<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='{$entry.json}'><i class="fa fa-pencil"></i></button>
				{if count($entry.hijos) eq 0}
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" datos='{$entry.json}'><i class="fa fa-minus"></i></button>
				{/if}
			</td>
		</tr>
		
		{if is_array($entry.hijos)}
			{menu data=$entry.hijos level=$entry.contador}
		{/if}
	{/foreach}
{/function}

<table class="tree2 table-bordered table-striped table-condensed table" id="productos">
	<tr class="treegrid-1">
		<th>Productos</th>
		<th>Precio</th>
		<th>Venta</th>
		<th><button type="button" class="btn btn-success" action="agregar" title="Nuevo" datos='{$entry.json}'><i class="fa fa-plus"></i></button></th>
	</tr>
	{menu data=$productos.hijos level=$productos.contador}
</table>