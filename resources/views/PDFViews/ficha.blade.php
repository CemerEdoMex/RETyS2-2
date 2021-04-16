<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #341050;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #341050;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        .table, .t_data {
            table-layout: fixed;
            width: 100%;
            text-align: center;
            border: 1px solid black
            border-collapse: collapse;
            border-spacing: none;
        }

    </style>
</head>
<body>
<header>
    <div>
        <img src="{{ asset('img/gobiernologo.png') }}"  height="72" alt="logo" srcset="">
        Registro Estatal de Tramites y Servicios
        <img src="{{ asset('img/edomexlogo.png') }}"  height="72" alt="logo2" srcset="">
    </div>
</header>

<main>

    <h2>{{ $queryUno[0]->denominacion}}</h2>

    <h3><img src="../RETyS1/iconos/info_viol.png" alt="info" width="25" height="25">Descripción</h3>

    <p> {{$queryUno[0]->descripcion}} </p>

    <h3><img src="../RETyS1/iconos/pasos_viol.png" alt="info" width="25" height="25">Requisitos</h3>

    <ul>
        @foreach ($queryReq as $item)
        <li>{{$item->descripcion}}</li>
        @endforeach

    </ul>


    <h3><img src="../RETyS1/iconos/costos_viol.png" alt="info" width="25" height="25">Costo (En desarrollo)</h3>

    @foreach($queryCostos as $cos)
        @if($cos->renglon==1 && $cos->columna==0)
            Definicion {{$cos->definicion}} <br>
        @endif
    @endforeach
    @foreach($queryCostos as $cos)
    @if($cos->renglon==1 && $cos->columna==1)
        Clave {{$cos->costo}} <br>
    @endif
    @endforeach
    @foreach($queryCostos as $cos)
        @if($cos->renglon==1 && $cos->columna==2)
          Costo  {{$cos->costo}} <br>
        @endif
    @endforeach




    @foreach($queryCostos as $cos)
        @if($cos->renglon==2 && $cos->columna==0)
        Definicion {{$cos->definicion}} <br>
        @endif
    @endforeach
    @foreach($queryCostos as $cos)
    @if($cos->renglon==2 && $cos->columna==1)
        Clave {{$cos->costo}} <br>
    @endif
    @endforeach
    @foreach($queryCostos as $cos)
        @if($cos->renglon==2 && $cos->columna==2)
        Costo  {{$cos->costo}} <br>
        @endif
    @endforeach



    @foreach($queryCostos as $cos)
        @if($cos->renglon==3 && $cos->columna==0)
        Definicion {{$cos->definicion}} <br>
        @endif
    @endforeach
    @foreach($queryCostos as $cos)
    @if($cos->renglon==3 && $cos->columna==1)
        Clave {{$cos->costo}} <br>
    @endif
    @endforeach
    @foreach($queryCostos as $cos)
        @if($cos->renglon==3 && $cos->columna==2)
        Costo  {{$cos->costo}} <br>
        @endif
    @endforeach



    @foreach($queryCostos as $cos)
        @if($cos->renglon==4 && $cos->columna==0)
        Definicion {{$cos->definicion}} <br>
        @endif
    @endforeach
    @foreach($queryCostos as $cos)
    @if($cos->renglon==4 && $cos->columna==1)
        Clave {{$cos->costo}} <br>
    @endif
    @endforeach
    @foreach($queryCostos as $cos)
        @if($cos->renglon==4 && $cos->columna==2)
        Costo  {{$cos->costo}} <br>
        @endif
    @endforeach

    <br>


























    <h3><img src="../RETyS1/iconos/tiempo_viol.png" alt="info" width="25" height="25"> Duración del trámite  </h3>

    <p> {{$queryUno[0]->tresp_min}} min.</p>

    <h3><img src="../RETyS1/iconos/domicilio_viol.png" alt="info" width="25" height="25"> Donde y cuando puedo realizarlo </h3>

    <p>Calle {{$queryUno[0]->calle}} # {{$queryUno[0]->noextint}},Colnia {{$queryUno[0]->colonia}} , {{$queryUno[0]->cp}}.</p>

    <h4>Telefonos</h4>
    <ul>
        <li>
             {{$queryUno[0]->lada1}} {{$queryUno[0]->telefono1}}
        </li>
        <li>
             {{$queryUno[0]->lada2}} {{$queryUno[0]->telefono2}}
        </li>
        <li>
            {{$queryUno[0]->lada3}} {{$queryUno[0]->telefono3}}
       </li>
    </ul>

    <span> Ext {{$queryUno[0]->ext}} & Fax {{$queryUno[0]->fax}}</span>

    <br>

   {{-- <h3>Unidad Administrativa Responsable</h3> --}}

    {{-- Informacion General & Modalidad --}}

    {{--<table class="table">
        <thead>
            <tr>
                <th class="t_head"> Dependencia u Organismo </th>
                <th class="t_head"> Dirección General	</th>
                <th class="t_head"> Unidad Administrativa Responsable   </th>
                <th class="t_head"> Titular de la Unidad Administrativa </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="t_data"> Fiscalía General de Justicia del Estado de México </td>
                <td class="t_data"> Coordinación General de Servicios Periciales</td>
                <td class="t_data"> Departamento de Identificación</td>
                <td class="t_data"> Lic. Cuauhtémoc José Zariñana Oronoz</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th class="t_head"> Modalidad del Trámite </th>
                <th class="t_head"> Ámbito	</th>
                <th class="t_head"> Canal de Atención   </th>
                <th class="t_head"> Correo Electrónico </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="t_data"> En Línea </td>
                <td class="t_data"> Estatal</td>
                <td class="t_data"> Presencial</td>
                <td class="t_data"> mlmartinez@nsp.gob.mx</td>
            </tr>
        </tbody>
    </table> --}}

    {{-- Domicilio --}}

</main>

<footer>
    <h3>http://retys.edomex.gob.mx/</h3>
</footer>
</body>
</html>
