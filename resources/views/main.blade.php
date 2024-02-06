
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime list</title>
</head>
<body>

    <div style="display: flex; width: 100%; height: 100vh; align-items: center;">

        <ul>

        @foreach($data as $anime)

            <li><a href="{{ route('genre', ['id' => $anime["mal_id"]]) }}" >{{$anime["name"]}}</a></li>

            
        @endforeach

        </ul>

    </div>

   


</body>
</html>