@extends('VistasRetys.plantilla')

<link rel="stylesheet" href="{{ secure_asset('vendor/accordeon.css')}}">
@section('tarjetas')

<section class=" pt-4 pb-4">
	<div class="content">
		<div class="row ">
			<div class="col-12 text-center text-elegant-color-dark text-dark" >
				<p style=" font-size: 42px;">Categorías</p>
			</div>


			<div class="col-6 col-xl-3 col-md-4 accordion-container">
				<a style="color:#341050;" title="Educación" href="{{ secure_url('catego',['T06', 'Educación','1']) }}">
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img alt="cambiar imagen" onmouseout=" src='img/icon/educacionm2.png'"onmouseover="src='img/icon/educacion3.png'" src="img/icon/educacionm2.png" class="img-fluid mx-auto d-block" width="70">
                            <p class="font-weight-bold  text-center responsive-text-categorias">Educación</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4 accordion-container">
				<a style="color:#341050;" href="{{ secure_url('catego',['T03','Cultura','1']) }}" title="Cultura">
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/culturam2.png'"onmouseover="src='img/icon/culturam3.png'"
								src="img/icon/culturam2.png"
								class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Cultura</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
                href="{{ secure_url('catego',['T05','Economía y Negocios','1']) }}"
					title="Finanzas">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/finanzas1.png'"onmouseover="src='img/icon/finanzas2.png'"
								src="img/icon/finanzas1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Economía y Negocios </p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
                    href="{{ secure_url('catego',['T17','Empleo','1']) }}"
					title="Empleo">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/empleo1.png'"onmouseover="src='img/icon/empleo2.png'"
								src="img/icon/empleo1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Empleo</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T28','Familia','1']) }}"
					title="Familia">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/familia1.png'"onmouseover="src='img/icon/familia2.png'"
								src="img/icon/familia1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Familia</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T29','Justicia','1']) }}"
					title="Justicia">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/justicia1.png'"onmouseover="src='img/icon/justicia2.png'"
								src="img/icon/justicia1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Justicia</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T14','Medio Ambiente','1']) }}"
					title="Medio Ambiente">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body ">
						<div class="responsive-categorias mx-auto-lg">
							<img onmouseout=" src='img/icon/ambiente1.png'"onmouseover="src='img/icon/ambiente2.png'"
								src="img/icon/ambiente1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Medio Ambiente</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T22','Pago de Impuestos','1']) }}"
					title="Pago de inpuestos ">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/impuestos1.png'"onmouseover="src='img/icon/impuestos2.png'"
								src="img/icon/impuestos1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Pago de Impuestos</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T30','Quejas o Denuncias','1']) }}"
					title="Quejas o Denuncias">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/denuncias1.png'"onmouseover="src='img/icon/denuncias2.png'"
								src="img/icon/denuncias1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Quejas o Denuncias</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T15','Salud y Deporte','1']) }}"
					title="Salud y Deporte">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/salud1.png'"onmouseover="src='img/icon/salud2.png'"
								src="img/icon/salud1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Salud y Deporte</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a class="mx-auto" style="color:#341050;"
					href="{{ secure_url('catego',['T07','Seguridad','1']) }}"
					title="Seguridad">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/seguridad1.png'"onmouseover="src='img/icon/seguridad2.png'"
								src="img/icon/seguridad1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Seguridad</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T13','Transporte y Urbanismo','1']) }}"
					title="Transporte y Urbanismo">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/transporte1.png'"onmouseover="src='img/icon/transporte2.png'"
								src="img/icon/transporte1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Transporte y Urbanismo</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T18','Turismo','1']) }}"
					title="Turismo">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/turismo1.png'"onmouseover="src='img/icon/turismo2.png'"
								src="img/icon/turismo1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Turismo</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-6 col-xl-3 col-md-4">
				<a style="color:#341050;"
					href="{{ secure_url('catego',['T19','Vivienda','1']) }}"
					title="Vivienda">
					<div
						class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias mx-auto">
							<img onmouseout=" src='img/icon/vivienda1.png'"onmouseover="src='img/icon/vivienda2.png'"
								src="img/icon/vivienda1.png"
								class="img-fluid mx-auto d-block" width="70">
							<p
								class="font-weight-bold  text-center responsive-text-categorias">Vivienda</p>
						</div>
					</div>
				</a>
			</div>


		</div>
	</div>

</section>



  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">Mensaje de Bienvenida</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		    <p class="text-justify">Bienvenido al Registro Estatal de Trámites y Servicios, aquí podrás consultar la información de los trámites y servicios que el Gobierno del Estado de México te ofrece.</p>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
		</div>
	  </div>
	</div>
  </div>

@stop

@section('scripts')
	<script>

	$( document ).ready(function() {
		console.log( "scrip funcionando!" );
		$('#exampleModalCenter').modal('show')

	});

    $(function(){
        $(".accordion-titulo").click(function(e){

        e.preventDefault();

        var contenido=$(this).next(".accordion-content");

        if(contenido.css("display")=="none"){ //open
          contenido.slideDown(250);
          $(this).addClass("open");
        }
        else{ //close
          contenido.slideUp(250);
          $(this).removeClass("open");
        }

      });
    });

	</script>
@endsection
