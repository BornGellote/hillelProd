@extends('layout')

@section('content')
<form action="/category/store" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $category->title }}">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug"  name="slug" placeholder="Enter  slug" value="{{ $category->slug }}">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection