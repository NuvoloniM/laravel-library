<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <h2>Ciao hai creato correttamente un nuovo elemento : {{$book->title}}</h2>
    <p>Autore: {{ $book->Author->name }}</p>
    <img src="{{ asset("storage/$book->image") }}" alt="{{$book->title}}">

{{-- //Tags --}}
    <ul>
       @forelse ( $book->genre  as $genre )
        <li>{{ $genre->label }}</li>
        @empty

        @endforelse
    </ul>

</body>
</html>

