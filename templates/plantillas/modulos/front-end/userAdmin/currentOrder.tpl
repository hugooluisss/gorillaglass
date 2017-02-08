<div class="page-header">
	<h1>{$clienteObj->getRazonSocial()} - {$clienteObj->getNombre()}</h1>
	<h3>Current Order</h3>
</div>
<div class="row">
	<div class="col-xs-12 text-right">
		<button class="btn btn-default" id="print">Print Order</button>
	</div>
</div>
<br /><br />
<div class="table-responsive">
</div>

<input id="idPedido" type="hidden" value="{$idPedido}" />

<div class="row">
	<div class="col-sm-3 col-sm-offset-6 text-center">
		<a href="repositorio/Shippinginfo.pdf" target="_blank">Learn about our shipping options and costs here.</a>
	</div>
	<div class="col-sm-3">
		<a href="placeOrder" class="btn btn-blue">Place Order</a>
	</div>
</div>
<br />
<div class="row">
	<div class="col-sm-4">
		<small>
		<p>This is an estimate. The final invoice will be sent to your registered email address after the order is processed. Custom pieces and special requests are not included in this estimate.</p>
		</small>
	</div>
	<div class="col-sm-5">
		<small>
		<p>Please note that orders under $100 will have a $15 surcharge.</p>
		<p>The standard bulk discounts are as follows:</p>
		5%   discount for sales of $500.00 and above.<br />
10% discount for sales of $1,000.00 and above.<br />
15% discount for sales of $2,000.00 and above.<br />
		</small>
	</div>
	<div class="col-sm-3 text-center">
		<br />
		<p>
			<b>Any questions?</b><br />
			sales@getgorilla.com<br />
			or call us at 831-469-3665
		</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<a href="welcome">Back to catalog</a>
	</div>
</div>