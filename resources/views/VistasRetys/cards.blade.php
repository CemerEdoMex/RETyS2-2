<link rel="stylesheet" href="{{ asset('vendor/cards.css') }}">
<div class="card mb-3">
    <h3 class="card-title text-center font-weight-bold text-dark"  style=" font-size: 42px;">Trámites más buscados

    </h3>
    <div class="contenedor">
		<div class="contenedor_tarjeta">
			<a href="https://sistemas2.edomex.gob.mx/TramitesyServicios/Tramite?tram=352&cont=0">
				<figure id="tarjeta">
					<img src="{{ asset('img/certificado.png') }}" class="frontal" alt="">
					<figcaption class="trasera">
						<h2 class="titulo text-center">Expedición del informe o certificado de no antecedentes penales</h2>
						<hr>
						<p class="text-center">Enlace de direccionamiento al trámite.</p>
					</figcaption>
				</figure>
			</a>
		</div>

		<div class="contenedor_tarjeta">
			<a href="https://sistemas2.edomex.gob.mx/TramitesyServicios/Tramite?tram=215&cont=0">
				<figure id="tarjeta">
					<img src="{{ asset ('img/coche.png') }}" class="frontal" alt="">
					<figcaption class="trasera">
						<h2 class="titulo text-center">Alta de vehículos nuevos.</h2>
						<hr>
						<p class="text-center">Enlace de direccionamiento al trámite.</p>
					</figcaption>
				</figure>
			</a>
		</div>

		<div class="contenedor_tarjeta">
			<a href="http://sistemas2.edomex.gob.mx/TramitesyServicios/Tramite?tram=33&cont=0">
				<figure id="tarjeta">
					<img src="{{asset ('img/verifica.png') }}" class="frontal" alt="">
					<figcaption class="trasera">
						<h2 class="titulo text-center">Pago de multa por verificación vehicular extemporánea.</h2>
						<hr>
						<p class="text-center">Enlace de direccionamiento al trámite.</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</div>

</div>
