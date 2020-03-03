<label>{{ $picture->title }}</label></br>
<img src="{{ route('pictures.show', $picture->id) }}">
<form method="POST" action="{{ route('pictures.destroy', $picture->id) }}">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>