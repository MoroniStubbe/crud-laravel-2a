<ul>
    {{--    Maak een nieuwe game aan --}}
    <a href="{{ url('/games/create') }}">Maak een nieuwe game</a>
    @foreach ($games as $game)
        <li><a href="{{ URL::to('/games', ['id' => $game->id]) }}">{{ $game->name }}</a></li>
    @endforeach
</ul>
