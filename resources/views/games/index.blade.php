<ul>
{{--    Maak een nieuwe game aan--}}
    <a href="{{ url('/games/create') }}">Maak een nieuwe game</a>
    @foreach($games as $game)
        <li>{{ $game->name }}</li>
    @endforeach
</ul>
