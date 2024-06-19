@php
    use App\Models\Game; // Import the Game model class
@endphp

<html>

<body>
    {{ dd(Game::find(request('id'))) }};
</body>

</html>
