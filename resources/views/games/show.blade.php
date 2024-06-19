@php
    use App\Models\Game;
@endphp

<html>

<body>
    Name: {{ Game::find(request('id'))->name }}
    <a href="{{ URL::to() }}"></a>
</body>

</html>
