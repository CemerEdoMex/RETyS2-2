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
<img src="{{ asset('img/h1.png') }}" width="272" height="72" alt="logo" srcset="">
</header>

<main>
    @foreach ($data ?? '' as $item)

    @endforeach
    <h2>{{ $item}}</h2>

    <p>
        La expedición del Certificado o informe permite acreditar si una persona ha sido o no condenada por sentencia firme dictada por los órganos jurisdiccionales competentes.
    </p>

    <h3><img src="../RETyS1/iconos/info_viol.png" alt="info" width="25" height="25">Información General</h3>
    <br>
    {{-- Informacion General & Modalidad --}}
    <table class="table">
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
    </table>

    {{-- Domicilio --}}

</main>

<footer>
    <h3>http://retys.edomex.gob.mx/</h3>
</footer>
</body>
</html>
