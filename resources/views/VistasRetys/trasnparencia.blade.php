@extends('VistasRetys.plantilla')


@section('tarjetas')

<!-- <link rel="stylesheet" href=""> -->
<!-- Aqui va todo tu html --->

<div class="card" id="transparencia">
    <div class="card-header text-center">
      Titulo de la seccion
    </div>
    <div class="card-body">
      <h5 class="card-title">Tratamiento especial</h5>
      <p class="card-text">Con el texto de apoyo a continuación como una introducción natural a contenido adicional.</p>
      <a href="#" class="btn btn-primary">Buton Adicional</a>
    </div>
  </div>

@stop

@section('scripts')
    <!-- example

    <script src="{{ secure_asset('bootstrap4.5/js/bootstrap.min.js') }}"></script>

    -->
@endsection
