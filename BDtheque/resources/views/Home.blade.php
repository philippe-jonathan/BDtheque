<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BD Thèque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    @foreach($bd as $value)
    
        <div><p>id= </p>{{$value->id_bd}}</div>
        <div><p>title= </p>{{$value->title_bd}}</div>
        <div><p>subtitle= </p>{{$value->subtitle_bd}}</div> 

    @endforeach
    
</body>
</html>
