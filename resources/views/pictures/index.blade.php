@foreach ($pictures as $picture)
    <p>
        <a href="{{ route('pictures.show', $picture->id) }}">
            <label>{{ $picture->title }}</label></br>
            <img src="{{ route('pictures.show', $picture->id) }}">
        </a>
    </p>
@endforeach