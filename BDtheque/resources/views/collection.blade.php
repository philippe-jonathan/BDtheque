<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collections</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <a href="/" type="button" class="btn btn-dark">Consulter</a>
   
             <a href="/decouvrir" type="button" class="btn btn-dark">Découvrir</a>

       @foreach($pic as $logo)
            <img src="{{$logo->src_img_picture}}" alt=""> 
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
<div>
    @foreach($one as $tom)
        <form action="infoBd" method="get">
            <button name="namebut" type="submit" value="{{$tom->title_bd}}"><img src="{{$tom->picture_bd}}"></button>
        </form>
    @endforeach
</div> 
    <!-- <div>
        <a href="/infoTiteuf"><img src="img/Couv_1.jpg" class="rounded float-left" alt="Collection Titeuf"></a>
        <a href="/..."><img src="img/Couv_XIII1.jpg" class="rounded float-right" alt="Collection XIII"></a>
    </div> -->

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
