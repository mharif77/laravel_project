<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$title }}</h1>
    <p>{{$content}}</p>
    <h2>all fruits</h2>
    <ul>
        @foreach($fruits as $fruit)
        <li>{{$fruit}}</li>
    @endforeach
    </ul>
    
</body>
</html>