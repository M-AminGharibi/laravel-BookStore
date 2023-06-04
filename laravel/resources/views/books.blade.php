<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/book/create">Add Book</a>
    <h1>books</h1>
    <ul>
    @foreach($books as $book)
    <li>
        {{ $book->title}} {{$book->author}}
    </li>
    @endforeach
    </ul>
</body>
</html>