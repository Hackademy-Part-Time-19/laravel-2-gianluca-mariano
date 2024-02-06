
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>
<body>
    


    @foreach($data as $info)

        <div>

            <h1>{{$info["title"]}}</h1>

            <p>{{$info["synopsis"]}}</p>
        
        </div>
        

    @endforeach


</body>
</html>