{function menu level=1}
	{foreach $data as $entry}
		<tr class="treegrid-{$nodo} {if $level neq ""}treegrid-parent-{$level}{/if}">
			<td>{$entry.nombre}</td>
			<td>
				<button type="button" class="btn btn-success" action="agregar" title="Nuevo" datos='{$entry.json}'><i class="fa fa-plus"></i></button>
				<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='{$entry.json}'><i class="fa fa-pencil"></i></button>
				{if count($entry.hijos) eq 0}
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" datos='{$entry.json}'><i class="fa fa-minus"></i></button>
				{/if}
			</td>
		</tr>
		
		{if is_array($entry.hijos)}
			{menu data=$entry.hijos level=$nodo++}
			
			{assign var="nodo" value=$nodo++}
		{/if}
	{/foreach}
{/function}

{assign var="nodo" value=2}

<table class="tree2 table-bordered table-striped table-condensed table" id="productos">
	<tr class="treegrid-1">
		<td>Productos</td>
		<td>
			<button type="button" class="btn btn-success" action="agregar" title="Nuevo" datos='{$row.json}'><i class="fa fa-plus"></i></button>
		</td>
	</tr>
	{menu data=$productos.hijos}
</table>