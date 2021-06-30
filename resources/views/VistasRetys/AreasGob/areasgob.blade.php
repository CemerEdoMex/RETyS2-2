@extends('VistasRetys.layoutCards')
@section('tarjetas')




<div class="container">
    <button type="button" class="btn btn-primary">
     Catálogo de Trámites y Servicios por Áreas de Gobierno <span class="badge badge-light">{{ sizeof($dataQuery2)}} encontrados & {{ $totaltram }} trámites</span>
    </button>

    <br>
    <hr>

    <div class="card-columns">

        @for ($i = 0; $i < sizeof($dataQuery2); $i++)
            <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">{{$dataQuery2[$i]->sujetoobligado}}</h5>
                @if ($dataQuery2[$i]->ruta)
                <img src="{{ secure_asset($dataQuery2[$i]->ruta) }}"  class="rounded" alt="...">
                @endif
                <p class="card-text"><a href="{{$dataQuery2[$i]->url}}" target="_blanck">Visita su sitio web.</a> </p>
                <form action="/areasgog/{{ $dataQuery2[$i]->idsujeto }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary"> Ver Trámites </button>
                </form>
                </div>
            </div>
        @endfor

    </div>

</div>

@stop
