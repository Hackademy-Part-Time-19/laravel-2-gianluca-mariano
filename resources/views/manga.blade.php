<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga</title>
</head>
<body>
    
    @foreach($data as $manga)

    <h1>{{$manga["title"]}}</h1>
    <p>{{$manga["synopsis"]}}</p>

    @endforeach

</body>
</html>