<form action="{{route('pictures.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Title : </label>
    <input name="title" type="text"/>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label>File : </label>
    <input name="picture" type="file"/>
    <input type="submit" value="Envoyer"/>
    @error('picture')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>