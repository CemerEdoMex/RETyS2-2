@extends('VistasRetys.layoutCards')
@section('tarjetas')




<div class="container">
    <button type="button" class="btn btn-primary">
        Municipios <span class="badge badge-light">{{ sizeof($data) }}  encontrados & {{ $totaltram }} trámites</span>
    </button>

    <br>
    <hr>

    <div class="card-columns">

        @for ($i = 0; $i < sizeof($data); $i++)
            <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">{{$data[$i]->mun_descripcion}}</h5>
                @if ($data[$i]->ruta)
                <img src="{{ asset($data[$i]->ruta) }}"  class="rounded" alt="...">
                @endif
                <p class="card-text"><a href="#">Visita su sitio web.</a> </p>
                <a href="{{ url('/municipios/'.$data[$i]->mun_descripcion.'/'.$data[$i]->mun_clave) }}" class="btn btn-primary">Ver trámites </a>
                </div>
            </div>
        @endfor

    </div>

</div>

@stop
