<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/post/{{$data->id}}"  method="POST">
        @method('patch')
        @csrf
        Tittle : <input type="text" name="title" id="" value="{{$data->title}}">
        Description : <input type="text" name="description" id="" value="{{$data->description}}">

        <input type="submit" name="" id="" value="submit">
    </form>
</body>
</html>