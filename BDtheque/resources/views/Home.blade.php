<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BD Thèque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <button type="button" class="btn btn-dark">Consulter</button>
        <button type="button" class="btn btn-dark">Découvrir</button>
        <button type="button" class="btn btn-dark">Découvrir</button>

        @foreach($bd2 as $bd2)
            <div><img src="{{$bd2->src_img_picture}}" alt=""></div>
        @endforeach
        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mes bd
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Toutes mes bd</a>
                <a class="dropdown-item" href="#">toutes mes collections</a>
            </div>
        </div>

        <button type="button" class="btn btn-dark">Liste d'envies</button>
        <button type="button" class="btn btn-dark">Mes avis</button>
    </nav>

    @foreach($bd as $bd)
        <table>
            <tr>
                <th>bd</th>
                <th>image</th>
            </tr>
            <tr>
                <td>{{$bd->id_bd}}
                {{$bd->title_bd}}
                {{$bd->subtitle_bd}}</td>
                <td><img src="{{$bd->picture_bd}}" alt=""></td>
            </tr>
        </table>
        
    @endforeach
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
