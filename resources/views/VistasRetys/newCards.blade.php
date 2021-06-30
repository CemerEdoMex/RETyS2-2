<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Cards</title>
</head>
<link rel="stylesheet" href="{{ secure_asset('css/newCard.css') }}">
<body>
    <div class="cards">
        <div class="card">
            <span class="close"></span>
            <span class="arrow"></span>
            <article>
                <h2>Tarjeta #1</h2>
                <div class="tittle">Tramite</div>
                <div class="pic">
                    <img src="{{ secure_asset('img/icon/certificado.png') }}" >
                </div>
                <div class="desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, id eaque? Quam,
                    temporibus et rem voluptatem facere velit asperiores neque debitis ipsa, enim a labore iste rerum, consequatur perspiciatis mollitia.
                </div>
                <div class="cowl-group">
                    <img src="{{secure_asset('img/icon/principioafin.png')}}" width="54" height="54" class=" img-circle mx-auto "title="Principio a Fín">
                    <img src="{{secure_asset('img/icon/preenlinea.png')}}" width="54" height="54" class=" img-circle mx-auto" title="Pregestión en Línea">
                    <img src="{{secure_asset('img/icon/chat.png')}}" width="54" height="54" class=" img-circle mx-auto" title="Chat en Línea">
                    <img src="{{secure_asset('img/icon/presencial.png')}}" width="54" height="54" class=" img-circle mx-auto" title="Presencial
                                                ">
                </div>
            </article>
        </div>
    </div>

<script src="{{ secure_asset('js/newCard.js') }}"></script>
</body>
</html>
