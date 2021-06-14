<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Sno</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->description}}</td>
                <td><a href="/post/{{$value->id}}/edit"> Edit </a>
                <form action="/post/{{$value->id}}"  method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>