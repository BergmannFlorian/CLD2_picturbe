<form action="{{route('pictures.store')}}" method="POST">
    @csrf
    <label>Title : </label>
    <input type="text"/>
    <label>File : </label>
    <input type="file"/>
    <input type="submit" value="Envoyer"/>
</form>