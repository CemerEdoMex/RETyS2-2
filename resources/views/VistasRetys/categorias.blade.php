@extends('VistasRetys.layoutCards')
@section('tarjetas')

  <div class="container">
    <button type="button" class="btn btn-primary">
        Educacion <span class="badge badge-light">4 Trámites encontrados</span>
      </button>
      <br><br>

        <div class="row  mb-4">



              <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Título del tramitee</h5>
                    <p class="card-text">Contenido dedicado a información del tramite, aun en desarrollo.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Título del tramitee</h5>
                    <p class="card-text">Contenido dedicado a información del tramite, aun en desarrollo.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Título del tramitee</h5>
                    <p class="card-text">Contenido dedicado a información del tramite, aun en desarrollo.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Título del tramitee</h5>
                      <p class="card-text">Contenido dedicado a información del tramite, aun en desarrollo.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
              </div>




         {{-- @foreach ($terg as $item)

              @if ($item->ambito == 3)
                  <div class="card border-success mb-3 text-center justify-content-center" style="max-width: 20rem;">
                  @elseif ($item->ambito == 4)
                  <div class="card border-primary mb-3 text-center justify-content-center" style="max-width: 20rem;">
                  @else
                  <div class="card border-secondary mb-3 text-center justify-content-center" style="max-width: 20rem;">
              @endif

              <div class="card-header "><h6 class="card-title font-weight-bold" style="text-align: center">{{$item->denominacion}}</h6>  </div>

                  <div class="card-body  justify-content-center text-primary " >
                      @if ($item->ambito == 3)
                      <span class="badge badge-success">Estatal</span>
                      @elseif ($item->ambito == 4)
                      <span class="badge badge-primary">Minicipal</span>
                      @else
                      <span class="badge badge-secondary">Federal</span>
                      @endif

                       <img src="img/icon/certificado.png" style="width:30%;" class="img-size-50 mr-3 img-circle mx-auto d-block" alt="User Image">

                      @if ($item->costo_cantidad > 0)
                          <h5 class="card-title font-weight-bold" style="text-align: center">Costo:$ {{$item->costo_cantidad}}</h5>
                      @else
                          <h5 class="card-title text-success font-weight-bold" style="text-align: center">Costo:$ 0.0</h5>
                      @endif

                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                      <img src="img/icon/principioafin.png" style="width:20%;" class=" img-circle mx-auto "title="Principio a Fín">
                      @if ($item->enlinea == 1)
                          <img src="img/icon/preenlinea.png" style="width:20%;" class=" img-circle mx-auto" title="Pregestión en Línea">
                      @endif
                      <img src="img/icon/carpeta.png" style="width:20%;" class=" img-circle mx-auto " title="Carpeta Ciudadana" >
                      <button type="button" class="btn btn-outline-primary" style="width: 120px">Portal de pago</button>
                      <button type="button" class="btn btn-outline-primary"style="width: 120px">Portal de citas</button>
                      @if ($item->enlinea == 1)
                      <button type="button" class="btn btn-outline-primary" style="width: 120px"> Trámite en línea</button>
                      @endif
                      <button type="button" class="btn btn-outline-primary" style="width: 120px">Descargar formato</button>
                  </div>
                  @if ($item->ambito == 3)
                  <a class="btn btn-success" href="{{ route('trasnparencia') }}" role="button">Más información</a>
                  @elseif ($item->ambito == 4)
                  <a class="btn btn-primary" href="{{ route('trasnparencia') }}" role="button">Más información</a>
                  @else
                  <a class="btn btn-secondary" href="{{ route('trasnparencia') }}" role="button">Más información</a>
                  @endif
              </div>

              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;

          @endforeach --}}




      </div>
   </div>


@stop
