@php
    use App\Models\Game;
@endphp

<html>

<body>
    Name: {{ Game::find($id)->name }}
    <a href="{{ URL::to('games/update', $id) }}">Update</a>
</body>

</html>
