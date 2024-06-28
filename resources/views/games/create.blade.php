<h1>Maak een game aan</h1>
<a href="{{ url('/games') }}">Ga terug</a>
<form action="{{ url('/games') }}" method="post">
    @csrf
    <label for="name">Naam van het spel: </label>
    @error('name')
        {{ $message }}
    @enderror
    <input type="text" name="name" id="name" value="{{ old('name') }}"><br>
    <label for="name">Prijs: </label>
    <input type="text" name="price" id="price" value="{{ old('price') }}"><br>
    <label for="name">Jaar uitgebracht: </label>
    <input type="text" name="release_year" id="release_year" value="{{ old('release_year') }}"><br>
    <input type="submit" value="Maak een nieuwe game aan">
</form>
