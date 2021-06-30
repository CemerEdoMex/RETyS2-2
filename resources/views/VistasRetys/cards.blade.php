<link rel="stylesheet" href="{{ secure_asset('vendor/cards.css') }}">
<div class="card mb-3">
    <h3 class="card-title text-center font-weight-bold text-dark"  style=" font-size: 42px;">Trámites más buscados

    </h3>
    <div class="contenedor">
		<div class="contenedor_tarjeta">
			<a href="{{ secure_url('cedulainfo',352) }}">
				<figure id="tarjeta">
					<img src="{{ secure_asset('img/certificado.png') }}" class="frontal" alt="">
					<figcaption class="trasera">
						<h2 class="titulo text-center">Expedición del informe o certificado de no antecedentes penales</h2>
						<hr>
						<p class="text-center">Enlace de direccionamiento al trámite.</p>
					</figcaption>
				</figure>
			</a>
		</div>

		<div class="contenedor_tarjeta">
			<a href="{{ secure_url('cedulainfo',215) }}">
				<figure id="tarjeta">
					<img src="{{ secure_asset ('img/coche.png') }}" class="frontal" alt="">
					<figcaption class="trasera">
						<h2 class="titulo text-center">Alta de vehículos nuevos.</h2>
						<hr>
						<p class="text-center">Enlace de direccionamiento al trámite.</p>
					</figcaption>
				</figure>
			</a>
		</div>

		<div class="contenedor_tarjeta">
			<a href="{{ secure_url('cedulainfo',33) }}">
				<figure id="tarjeta">
					<img src="{{secure_asset ('img/verifica.png') }}" class="frontal" alt="">
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
