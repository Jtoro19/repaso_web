<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('books.store')}}" method="post">
        @csrf
        <label for="1">
            Ingrese el título del libro:
        </label>
        <input type="text" name="title_book" id="1">

        <label for="2">
            Ingrese el nombre del autor:
        </label>
        <input type="text" name="author_book" id="2">

        <label for="3">
            Ingrese la categoría:
        </label>
        <input type="text" name="category_book" id="3">

        <button type="submit">Guardar</button>
    </form>
</body>

</html>
