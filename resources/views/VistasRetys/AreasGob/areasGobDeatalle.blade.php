@extends('VistasRetys.layoutCards')



@section('tarjetas')


  <div class="container text-center justify-content-center">

      <div class="container-1">
          <form   class="form-inline"  method="POST" action="{{ secure_url('tarjetas') }}" style="  justify-content: center;" >
            @csrf
            <div class="container-4">
                <input type="search" id="search" name="buscar" placeholder="¿Qué estás buscando?" />
                <button class="icon"><i class="fa fa-search"></i></button>
              </div>
            </form>
      </div>
      <strong>{{ $data[0]->sujetoobligado }}</strong>
      <br>
      {{--<div class="col-12 text-center text-elegant-color-dark text-dark" >
        <p style=" font-size: 42px;">{{$data[0]->Sujetoobligado}} </p>
      </div>
      <br>--}}
       <div class="row mb-5">
          <div class="card" style="width: 13rem;">
             <div class="card-body">
                 <img src="{{secure_asset('img/icon/principioafin.png')}}" style="width:20%;" class=" img-circle mx-auto "title="Principio a Fín">
                <h6 class="card-title">Principio a Fín en Línea </h6>
             </div>
          </div>
         &nbsp;
           <div class="card" style="width: 13rem;">
            <div class="card-body">
                <img src="{{secure_asset('img/icon/preenlinea.png')}}" style="width:20%;" class=" img-circle mx-auto" title="Pregestión en Línea">
               <h6 class="card-title">Pregestión en Línea </h6>
            </div>
         </div>
          &nbsp;
           <div class="card" style="width: 13rem;">
            <div class="card-body">
                <img src="{{secure_asset('img/icon/chat.png')}}" style="width:20%;" class=" img-circle mx-auto" title="Chat en Línea">
               <h6 class="card-title">Chat en Línea </h6>
            </div>
         </div>
        &nbsp;
           <div class="card" style="width: 13rem;">
            <div class="card-body">
               <img src="{{secure_asset('img/icon/presencial.png')}}" style="width:20%;" class=" img-circle mx-auto" title="Presencial">
               <h6 class="card-title">Presencial </h6>
            </div>
         </div>
         &nbsp;
           <div class="card" style="width: 13rem;">
            <div class="card-body">
                <img src="{{secure_asset('img/icon/carpeta.png')}}" style="width:20%;" class=" img-circle mx-auto " title="Carpeta Ciudadana" >
               <h6 class="card-title">Carpeta Ciudadana </h6>
            </div>
         </div>
        </div>

      <br>
  <span class="badge badge-info"> Trámites en esta pagina de {{$count}} encontrados</span>
      <hr>



      <div class="row mb-4">
        <div class="col-12 text-center text-elegant-color-dark h3">
            <strong>{{ $data[0]->sujetoobligado }}</strong>
        </div>


          @foreach ($data as $item)

              @if ($item->ambito == 3)
                  <div class="card border-success mb-3 text-center justify-content-center" style="max-width: 20rem;  min-width:20rem;">
                  @elseif ($item->ambito == 4)
                  <div class="card border-primary mb-3 text-center justify-content-center" style="max-width: 20rem;  min-width:20rem;">
                  @elseif($item->ambito == 5)
                  <div class="card border-secondary mb-3 text-center justify-content-center" style="max-width: 20rem;">
                  @else
                  <div class="card border-warning mb-3 text-center justify-content-center" style="max-width: 20rem;">
              @endif

              <div class="card-header "><h6 class="card-title font-weight-bold" style="text-align: center">{{$item->denominacion}}</h6>  </div>

                  <div class="card-body  justify-content-center text-primary " >
                      @if ($item->ambito == 3)
                      <span class="badge badge-success">Estatal</span>
                      @elseif ($item->ambito == 4)
                      <span class="badge badge-primary">Municipal</span>
                      @elseif ($item->ambito == 5)
                      <span class="badge badge-secondary">Federal</span>
                      @else
                      <span class="badge badge-warning">Ambito desconocido</span>
                      @endif

                      <img src="{{ secure_asset('img/icon/certificado.png') }}" style="width:30%;" class="img-size-50 mr-3 img-circle mx-auto d-block" alt="User Image">

                      @if ($item->costo_cantidad > 0)
                          <h5 class="card-title font-weight-bold" style="text-align: center">Costo:$ {{$item->costo_cantidad}}</h5>
                      @else
                          <h5 class="card-title text-success font-weight-bold" style="text-align: center">Costo:$ 0.0</h5>
                      @endif

                      &nbsp; &nbsp;

                      @if($item->prinfin == 1)
                        <img src="{{secure_asset('img/icon/principioafin.png')}}" style="width:20%;" class=" img-circle mx-auto "title="Principio a Fín">
                         @endif
                        @if ($item->preges == 1)
                            <img src="{{secure_asset('img/icon/preenlinea.png')}}" style="width:20%;" class=" img-circle mx-auto" title="Pregestión en Línea">
                        @endif
                          @if ($item->chat == 1)
                            <img src="{{secure_asset('img/icon/chat.png')}}" style="width:20%;" class=" img-circle mx-auto" title="Chat en Línea">
                        @endif

                          @if ($item->presencial == 1)
                            <img src="{{secure_asset('img/icon/presencial.png')}}" style="width:20%;" class=" img-circle mx-auto" title="Presencial
                            ">
                        @endif

                         @if ($item->prinfin_seits == 1)
                        <img src="{{secure_asset('img/icon/carpeta.png')}}" style="width:20%;" class=" img-circle mx-auto " title="Carpeta Ciudadana" >
                        @endif
                        @if ($item->preges_seits ==1 )
                        <img src="{{secure_asset('img/icon/carpeta.png')}}" style="width:20%;" class=" img-circle mx-auto " title="Carpeta Ciudadana" >
                         @endif

                        <br>
                        <br>


                        @if ($item->prinfin == 1)
                        @if ($item->prinfin_seits == 1)
                        <a href="http://sistemas2.edomex.gob.mx/ventanilla/ejecutarTramite.action?valorTramite={{$item-> idtramite}}&tipoTramite={{$item-> tipotram}}" class="btn btn-outline-primary"style="width: 120px">Tremite En Linea</a>
                        @else
                        <a href="{{$item-> prinfin_url}}" class="btn btn-outline-primary"style="width: 120px">Trámite En Línea</a>
                        @endif
                        @endif


                        @if ($item->preges == 1)
                        @if ($item->preges_seits== 1)
                         <a href="http://sistemas2.edomex.gob.mx/ventanilla/ejecutarTramite.action?valorTramite={{$item-> idtramite}}&tipoTramite={{$item-> tipotram}}" class="btn btn-outline-primary"style="width: 120px">Pregestión en línea</a>
                        @else
                        <a href="{{$item-> preges_url}}" class="btn btn-outline-primary" style="width: 120px"> Pregestión en línea</a>
                        @endif
                        @endif

                         @if ($item->chat == 1)
                        <a href="{{$item-> chat_url}}" class="btn btn-outline-primary" style="width: 120px"> Chat en línea</a>

                        @endif
                  </div>
                  @if ($item->ambito == 3)
                  <form action="{{ secure_url('cedulainfo',$item->idtramite) }}"  method="GET">
                      
                      <button type="submit" class="btn btn-success" role="button"> Más información </button>
                  </form>

                  @elseif ($item->ambito == 4)
                  <form action="{{ secure_url('cedulainfo',$item->idtramite) }}"  method="post">
                      
                      <button type="submit" class="btn btn-primary" role="button"> Más información </button>
                  </form>

                  @elseif ($item->ambito == 5)
                  <form action="{{ secure_url('cedulainfo',$item->idtramite) }}"  method="post">
                     
                      <button type="submit" class="btn btn-secondary" role="button"> Más información </button>
                  </form>
                  @endif

                  </div>

              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;


          @endforeach

      </div>


     {{-- {{$data->appends($_GET)}}  --}}



  </div>


@stop



