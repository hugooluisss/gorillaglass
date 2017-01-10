{foreach from=$lista item="row"}
	<li><a class="dropdown-item" href="#" datos='{$row.json}'>{$row.nombre}</a></li>
{/foreach}