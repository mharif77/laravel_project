<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <h1>ID: {{$post->id}}</h1>
    <h3>post title: {{$post->name}}</h3>
    <h5>comments</h5>
    <ul>
        @foreach ($comments as $comment)
        <li>{{$comment->comment}}</li>
        @endforeach
    </ul>
</body>
</html>