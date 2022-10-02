@extends('layout')

@section('content')
<form action="/tag/update" method="post">
    <input type="hidden" name="id" value="{{ $tag->id }}">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug"  name="slug" placeholder="Enter  slug">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection