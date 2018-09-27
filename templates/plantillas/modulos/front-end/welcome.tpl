<div class="container">
<div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-sm-12">
            <div id="product_image">
                <!-- BEGIN SLIDER -->
                <div class="stage">
                    	<div id="SLDR-ONE" class="carousel slide" data-ride="carousel">
                		
						
						
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="repositorio/img/anterior/homeslide/slide_1.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_2.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_3.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_4.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_5.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_6.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_7.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_8.jpg">
							</div>
							<div class="item">
								<img src="repositorio/img/anterior/homeslide/slide_9.jpg">
							</div>
						</div>
						
                	</div>
                    
                    
                    
                    
                    <!--
                        <ul class="wrp animate">
                            <li class="elmnt-one"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_1.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-two"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_2.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-three"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_3.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-four"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_4.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-five"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_5.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-six"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_6.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-seven"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_7.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-eight"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_8.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-nine"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_9.jpg" width="623" height="400"></div></div></li>
                           <!--  <li class="elmnt-ten"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_10.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-ten"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_11.jpg" width="623" height="400"></div></div></li>
                           <li class="elmnt-ten"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_12.jpg" width="623" height="400"></div></div></li>
                        </ul>
                        -->
                </div>
                <!-- END SLIDER -->
         </div><!-- /product_image -->

        </div>
        <!-- END COLUMN -->
  </div><!-- /row -->
      <div class="row">
        <!-- BEGIN LEFT COLUMN -->
        <div class="col-sm-7">
            <div class="row">
            {foreach from=$nodosPrimerNivel item="row"}
                <div class="col-xs-6 col-sm-2 text-center">
                     <span class="product_link">
                        <a href="{$row.url}">{$row.nombre}</a>
                     </span>
                </div>
            {/foreach}
            </div>
            <div class="featured_product">
                <h1 class="text-center">Featured Products</h1>
                <!-- BEGIN SLIDER -->
                <div class="stage2">
                	<div id="SLDR-TWO" class="carousel slide" data-ride="carousel">
                		<ol class="carousel-indicators">
                			{foreach from=$listaProductosPrincipales item="row" name="carouselTwo"}
                				<li data-target="#SLDR-TWO" data-slide-to="{$smarty.foreach.carouselTwo.iteration}" {if $row.active}class="active{/if}"></li>
                			{/foreach}
                		</ol>
						
						
						<div class="carousel-inner" role="listbox">
							{foreach from=$listaProductosPrincipales item="row"}
								{if $row.existe}
									<div class="item {if $row.active}active{/if}">
										<a href="{$row.url}"><img src="repositorio/principales/{$row.idItem}.jpg"></a>
									</div>
								{/if}
							{/foreach}
						</div>
						
						<a class="left carousel-control" href="#SLDR-TWO" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#SLDR-TWO" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
                	</div>
                
                
                
                
                	<!--
                    <div id="SLDR-TWO" class="sldr">
                        <ul class="wrp animate">


                            <li class="elmnt-one"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112922-Hybrid+Teardrops/" ><img src="/repositorio/img/anterior/primary/plugs_hybrid_teardrops.jpg" width="623" height="400"><p>1</p></a></div></div></li>
                            <li class="elmnt-two"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112833-Iridescent+Shield+Weights/" ><img src="/repositorio/img/anterior/primary/weights_iridescent_shields.jpg" width="623" height="400"><p>2</p></a></div></div></li>
                          <li class="elmnt-three"><div><div class="wrap"><a href="http://www.getgorilla.com/home/113306-Shield+Rings/" ><img src="/repositorio/img/anterior/primary/rings_shield.jpg" width="623" height="400"><p>3<p></a></div></div></li>
                           <li class="elmnt-four"><div><div class="wrap"><a href="http://www.getgorilla.com/home/113301-Steel+Stands/" ><img src="/repositorio/img/anterior/primary/stands.jpg" width="623" height="400"><p>4<p></a></div></div></li>
                            <li class="elmnt-five"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112414-O+rings/" ><img src="/repositorio/img/anterior/primary/extras_orings.jpg" width="623" height="400"><p>5</p></a></div></div></li>
                             <li class="elmnt-six"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112471-Hybrid+Concave+Plugs/" ><img src="repositorio/productos/producto_112471/Hybrid-Concave-Plugs-(1).jpg" width="623" height="400"><p>6</p></a></div></div></li>
                            <li class="elmnt-seven"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112633-Hybrid+Deluxe+Dichroic+Plugs/" ><img src="repositorio/img/anterior/primary/plugs_hybrid_deluxe_dichroic.jpg" width="623" height="400"><p>7</p></a></div></div></li>
                            <li class="elmnt-eight"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112415-Drilo+Cocoons/" ><img src="repositorio/img/anterior/primary/weights_drilo_cocoon.jpg" width="623" height="400"><p>8</p></a></div></div></li>
                            <li class="elmnt-nine"><div><div class="wrap"><a href="http://www.getgorilla.com/home/109158-Deluxe+Dichroic+Eclipse+Hangers+with+Diablo+Coils/" ><img src="repositorio/img/anterior/primary/shapes_dd_eclipse_diablo_coils.jpg" width="623" height="400"><p>9</p></a></div></div></li>
                            <li class="elmnt-ten"><div><div class="wrap"><a href="http://www.getgorilla.com/home/109205-Solid+Martele+Eclipse+Hangers+with+Diablo+Coils/" ><img src="repositorio/img/anterior/primary/shapes_solid_eclipse_diablo_coils.jpg" width="623" height="400"><p>10</p></a></div></div></li>
                            <li class="elmnt-eleven"><div><div class="wrap"><a href="http://www.getgorilla.com/home/112318-Triton+Weights/" ><img src="repositorio/img/anterior/primary/forms_triton.jpg" width="623" height="400"><p>11</p></a></div></div></li>
                            <!--<li class="elmnt-eight"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_8.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-nine"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_9.jpg" width="623" height="400"></div></div></li>
                          <li class="elmnt-ten"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_10.jpg" width="623" height="400"></div></div></li>
                            <li class="elmnt-ten"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_11.jpg" width="623" height="400"></div></div></li>
                           <li class="elmnt-ten"><div><div class="wrap"><img src="repositorio/img/anterior/homeslide/slide_12.jpg" width="623" height="400"></div></div></li>
                        </ul>
                    </div> -->
                </div>
                <!-- END SLIDER -->
            </div><!-- /featured_product -->
           </div>
        <!-- END LEFT COLUMN -->

        <!-- BEGIN RIGHT COLUMN -->
        <div class="col-sm-5">
            <div class="intro_text">
                <p>Gorilla Glass is the premier brand in glass piercing jewelry. For over a decade we have been designing and handcrafting unique pieces to match your individuality and style.<br>
                  <br>
                  Our complete line of of jewelry styles and colorways has something for everyone, with constant new releases for both the passionate collector and the everyday user.</p>
                <p>Years of technical innovation, constant experimentation and a love for design give us the ability to consistently produce our signature styles to the highest standard, as well as to make custom jewelry to fit your individual needs.</p>
                <p>Each piece of Gorilla Glass jewelry is designed and handcrafted in-house by skilled glass artisans at our extensive design and production studio in Oaxaca, Mexico.</p>
                <p>
                  <!-- <p>Read More</p> -->
              </p>
            </div>

            <div class="locator">
                <h2>Where to Purchase</h2>
                <div class="col-xs-4">
                    <a href="inicio"><img src="repositorio/img/anterior/home_gorilla_left.png" alt="Gorilla" class="gorilla img-responsive" /></a>
                    <a href="signup">Wholesale</a>
                </div>
                <div class="col-xs-4">
                    <img src="repositorio/img/anterior/logo_entre_gorillas.png" alt="Gorilla Glass" class="img-responsive" />
                </div>
                <div class="col-xs-4">
                    <a href="retailLocator"><img src="repositorio/img/anterior/home_gorilla_right.png" alt="Gorilla" class="gorilla img-responsive" /></a>
                    <a href="retailLocator">Retail Locator</a>
                </div>
            </div>
        </div>
        <!-- END RIGHT COLUMN -->
      </div><!-- /row -->
</div>
