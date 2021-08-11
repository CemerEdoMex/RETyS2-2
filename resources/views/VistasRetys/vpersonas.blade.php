@extends('VistasRetys.plantilla')
@section('tarjetas')



<!-- Categorias -->



<section class="pt-4 pb-4">
	<div class="container">
		<div class="row ">
			<div class="col-12 text-center text-elegant-color-dark h3">
				<strong>Personas</strong>
			</div>

			<div class="col-6 col-xl-3 col-md-4">

			     <form action="{{ secure_url('Personas',['1','Adultos Mayores','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/cana.png'"onmouseover="src='img/icon/cana2.png'"
								src="img/icon/cana.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Adultos Mayores</p>
						</div>
					</div>
				  </button>
               </form>	
				
			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
				 <form action="{{ secure_url('Personas',['17','Empresarios y Emprendedores','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/empresarios1.png'"onmouseover="src='img/icon/empresarios2.png'"
								src="img/icon/empresarios1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Empresarios y Emprendedores</p>
						</div>
					</div>
				  </button>
               </form>
			
			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
                 <form action="{{ secure_url('Personas',['18','Estudiantes','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/estudiantes1.png'"onmouseover="src='img/icon/estudiantes2.png'"
								src="img/icon/Estudiantes1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Estudiantes</p>
						</div>
					</div>
				  </button>
               </form>

				
					
			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
				 <form action="{{ secure_url('Personas',['15','Hombres','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/hombre1.png'"onmouseover="src='img/icon/hombre2.png'"
								src="img/icon/hombre1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Hombres</p>
						</div>
					</div>
				  </button>
               </form>

				
				
			</div>

			<div class="col-6 col-xl-3 col-md-4">

			     <form action="{{ secure_url('Personas',['2','Indígenas','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/indigena1.png'"onmouseover="src='img/icon/indigena2.png'"
								src="img/icon/indigena1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Indígenas</p>
						</div>
					</div>
				  </button>
               </form>

			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
				 <form action="{{ secure_url('Personas',['3','Jóvenes','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/jovenes1.png'"onmouseover="src='img/icon/jovenes2.png'"
								src="img/icon/jovenes1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Jóvenes</p>
						</div>
					</div>
				  </button>
               </form>

					
				
			</div>

			<div class="col-6 col-xl-3 col-md-4">

			      <form action="{{ secure_url('Personas',['4','Migrantes','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/migrantes1.png'"onmouseover="src='img/icon/migrantes2.png'"
								src="img/icon/migrantes1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Migrantes</p>
						</div>
					</div>
				  </button>
               </form>
				
			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
				 <form action="{{ secure_url('Personas',['5','Mujeres','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/mujer1.png'"onmouseover="src='img/icon/mujer2.png'"
								src="img/icon/mujer1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Mujeres</p>
						</div>
					</div>
				  </button>
               </form> 

			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
				 <form action="{{ secure_url('Personas',['6','Niños','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/niños1.png'"onmouseover="src='img/icon/niños2.png'"
								src="img/icon/niños1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Niños</p>
						</div>
					</div>
				  </button>
               </form>

			
					
			</div>

			<div class="col-6 col-xl-3 col-md-4">

			      <form action="{{ secure_url('Personas',['14','Notarios Públicos','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/notario1.png'"onmouseover="src='img/icon/notario2.png'"
								src="img/icon/notario1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Notarios Públicos</p>
						</div>
					</div>
				  </button>
               </form>
					
			</div>

			<div class="col-6 col-xl-3 col-md-4">

			      <form action="{{ secure_url('Personas',['8','Personas con Discapacidad','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/discapacidad1.png'"onmouseover="src='img/icon/discapacidad2.png'"
								src="img/icon/discapacidad1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Personas con Discapacidad</p>
						</div>
					</div>
				  </button>
               </form>

					
			</div>

			<div class="col-6 col-xl-3 col-md-4">
			     
				 <form action="{{ secure_url('Personas',['16','Productores','1']) }}"  method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/productores1.png'"onmouseover="src='img/icon/productores2.png'"
								src="img/icon/productores1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Productores</p>
						</div>
					</div>
				  </button>
               </form>
					
			</div>
				<div class="col-6 col-xl-3 col-md-4">
				 
				 <form action="{{ secure_url('Personas',['10','Servidores Públicos Estatal','1']) }}" method="get">
                      {{--@csrf--}}
                  <button type="submit" style="border:0px"> 
					<div class="card border-0 bg-transparent responsive-categorias card-body">
						<div class="responsive-categorias">
							<img onmouseout=" src='img/icon/servidor publico1.png'"onmouseover="src='img/icon/servidorpublico2.png'"
								src="img/icon/servidor publico1.png"class="img-fluid mx-auto d-block" width="70">
							<p class="font-weight-bold  text-center responsive-text-categorias">Servidores Públicos Estatal</p>
						</div>
					</div>
				  </button>
               </form>

					
			</div>

		</div>
	</div>


@stop
