<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/post" method="POST">
        @csrf
        Title : <input type="text" name="title" id="">
        Description : <input type="text" name="description" id="">

        <input type="submit" name="" id="" value="submit">
    </form>
</body>
</html>