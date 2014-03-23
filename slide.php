<script src="/web/codigos/js/jquery1102.js"></script>
<script src="/web/codigos/js/transit099.js"></script><!--http://ricostacruz.com/jquery.transit/-->
<script>
	
	$(document).ready(function(){
		//esta variable toma la cantidad de imagenes que se incorporan al slide
		var longitud = $(".contenedor .imagen-slide").length;
		//funcion para controlar el slide
		function slide(){
			for(var i = 0;i < longitud;i++){
				var random = Math.round(Math.random()*(longitud - 1));//resulta un numero random entre el 1 y 8.
				$(".slide").transition({opacity:0,delay:8000},50),
				$(".slide").transition({y:-300 * random},10),
				$(".slide").transition({opacity:1},1000);
			}
		}

		//el slide se repite cada 100 milisegundos.
		setInterval(function(){	
			slide();		
		},100);	

	});

</script>
	
<style type="text/css">
	.contenedor{
		position: static;
		width: 100%;
		height: 300px;
		margin: 0 auto;
		overflow: hidden;
		box-shadow: 0 0 10px #000;
		box-shadow: inset 0 0 60px black;
	}
	.imagen-slide{
		position: relative;
		margin: 0;
		padding: 0;
		display: block;
		width: 100%;
		height: 300px;
	}
	.imagen-slide{
		z-index: 2200;
	}
	.fondo-slide,.cristal,.panel{
		position: absolute;
		background-color: transparent;
		width: 100%;
		height: 300px;
		margin: 0;
		padding: 0;
		top: 0;
	}
	.slide{
		z-index: 2000;
	}
	.cristal{
		z-index: 2500;
		opacity: 0.3;
		background-color: #000;
	}
	.panel{
		z-index: 3000;
		opacity: 0.5;
	}
</style>
<div class="contenedor">
	<ul class="slide">
		<!--en esta seccion se inggresan las imagenes-->
		<li><img class="imagen-slide" src="/web/imagenes/slide/1.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/2.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/3.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/4.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/5.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/6.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/7.jpg"/></li>
		<li><img class="imagen-slide" src="/web/imagenes/slide/8.jpg"/></li>
	</ul>

	<!--primer panel es ubicado mediante css para ingresar datos sobre el slide-->
	<div class="cristal">
		
	</div>

	<!--segundo panel es ubicado mediante css para ingresar datos sobre el slide-->
	<div class="panel">
		<div class="header-panel titulos">
			
		</div>
		<div class="body-panel ">
			
		</div>
		<div class="footer-panel navblack">
			<p class="bigh1 titulos">Eber sánchez</p>
		</div>
	</div>
</div>
