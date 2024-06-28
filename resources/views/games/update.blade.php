@php
    use App\Models\Game;
@endphp

<html>

<body>
    <form method="POST" action="{{ URL::to('games/update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ Game::find(request('id'))->name }}"><br><br>
        <button type="submit">Update Name</button>
    </form>
</body>

</html>
