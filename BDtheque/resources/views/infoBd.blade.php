<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>info Titeuf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <a href="/" type="button" class="btn btn-dark">Consulter</a>
        <a href="/decouvrir" type="button" class="btn btn-dark">Découvrir</a>

        @foreach($bd2 as $bd2)
            <div><img src="{{$bd2->src_img_picture}}"></div>
        @endforeach
        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mes bd
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/mesBd">Toutes mes bd</a>
                <a class="dropdown-item" href="/collection">toutes mes collections</a>
            </div>
        </div>

        <button type="button" class="btn btn-dark">Liste d'envies</button>
        <button type="button" class="btn btn-dark">Mes avis</button>
    </nav>

    @foreach($title as $title)
        <div><img class="img2" src="{{$title->picture_bd}}"></div>
    @endforeach


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
