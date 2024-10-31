<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (session('msg'))
    <div class="alert">{{session('msg')}}</div>
    
    @endif
    <h1>Student List</h1>

   <ul>@foreach ($students as $item )
   <li> Name: {{$item->name}} <br>
    Email: {{$item->email}} <br>
     Phone: {{$item->phone}}
    </li> 
    @endforeach
    </ul> 
</body>
</html>