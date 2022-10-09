@extends('layout')
@section('content')
{{ $isCreate }}
<form action="@if($isCreate) /category/store @else /category/update @endif" method="post">
  @if(!$isCreate)
    <input type="hidden" name="id" value="{{ $category->id }}">
  @endif
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $_SESSION['data']['title'] ?? '' }}">
    @isset($_SESSION['errors']['title'])
        @foreach($_SESSION['errors']['title'] as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endisset
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug"  name="slug" placeholder="Enter  slug" value="{{ $_SESSION['data']['slug'] ?? '' }}">
    @isset($_SESSION['errors']['slug'])
        @foreach($_SESSION['errors']['slug'] as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endisset
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    @php
      unset($_SESSION['errors']);
      unset($_SESSION['data']);
    @endphp
  </div>
</form>
@endsection