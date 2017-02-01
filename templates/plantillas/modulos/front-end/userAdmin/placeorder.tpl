
<div class="page-header">
	<h1>Thank you for ordering Gorilla Glass!</h1>
</div>

<div id="info">
	<div class="row">
		<div class="col-xs-12">
			<b>Optional: Do you want to add an estimate of your shipping cost to your Order?</b> <br/>
			<a href="repositorio/Shippinginfo.pdf" target="_blank">Learn about our shipping options and costs here.</a> <br />
			<br />
			<select class="form-control" id="selPaqueteria" name="selPaqueteria">
				{foreach from=$listaPaqueteria item=paqueteria}
					<option value="{$paqueteria.idPaqueteria}">{$paqueteria.nombre} {if $paqueteria.costo neq 0}- ${$paqueteria.costo}{/if}</option>
				{/foreach}
			</select>
		</div>
	</div>
	<br />
	<br />
	<div class="row">
		<div class="col-xs-12">
			<b>Do you wish to confirm your final invoice before we charge your card and ship your order?</b>
			<select class="form-control" id="selCargo" name="selCargo">
				<option value="1">Yes, please wait until I approve the final invoice before charging and shipping my order</option>
				<option value="2">No, Please charge the card you have on file ending in</option>
			</select>
			<br />
			<div class="row">
				<div class="col-sm-4 col-xs-6">
					<input class="form-control" id="txtCode" name="txtCode" value="" maxlength="4" placeholder="Last 4 digits of the card"/>
				</div>
			</div>
			<small>Please note that custom pieces and special requests are not included in your Order Sheet.</small>
		</div>
	</div>
	<br /><br />
	<div class="row">
		<div class="col-xs-12 text-right">
			<button class="btn btn-default" id="btnSubmit">Send</button>
			<input type="hidden" id="pedido" name="pedido" value="{$idPedido}" />
		</div>
	</div>
</div>

<div id="result">
	<br /><br />
	<p>A pdf containing your order will be sent to your email address shortly. Our sales team will contact you when we are ready to process your payment. </p>
	<br /><br /><br />
	<p><a href="welcome">Go back to the homepage</a></p>
</div>