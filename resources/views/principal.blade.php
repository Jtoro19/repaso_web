<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="{{route('books.create')}}">
        <button type="button">Crear</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title}}</td>
                    <td>{{ $book->author}}</td>
                    <td>{{ $book->category}}</td>
                    <td>
                        <form action="{{route('books.destroy', $book ->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash-fill">Eliminar</i>
                            </button>
                        </form>
                    </td>          
                    </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>