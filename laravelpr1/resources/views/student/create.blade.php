<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Entry Form</h3>
    <form action="{{route('student.store')}}" method="post">
        @csrf
        <input type="text" name="name"> <br>
        <input type="text" name="email"> <br>
        <input type="text" name="phone"> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>