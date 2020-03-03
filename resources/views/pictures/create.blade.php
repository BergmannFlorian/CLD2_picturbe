@extends('layouts/app')

@section('content')

<form id='s3upload' data-s3inputs="{{ json_encode($formInputs) }}" data-s3attributes="{{ json_encode($formAttributes) }}" action="{{ route('pictures.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Title : </label>
    <input id="title" name="title" type="text"/>
    <label>File : </label>
    <input id="pictureFile" name="file" type="file"/>
    <input type="hidden" name="storage_path" value="{{ $formInputs['key'] }}">
    <input type="submit" value="Envoyer"/>
</form>

@endsection

@push('scripts')
    <script src="/js/s3upload.js"></script>
@endpush


  