@extends('layout')

@section('content')
<form action="/post/update" method="post">
  <input type="hidden" value="{{ $post->id }}" name="id">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $post->title }}">
    @isset($_SESSION['errors']['title'])
        @foreach($_SESSION['errors']['title'] as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endisset
  </div>
  <div class="form-group">
    <label for="slug">Description</label>
    <textarea class="form-control" id="description"  name="description" placeholder="Enter description" value="{{ $post->body }}"></textarea>
    @isset($_SESSION['errors']['description'])
        @foreach($_SESSION['errors']['description'] as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endisset
  </div>

  <div class="form-group">
    <label for="user_id">User</label>
    <select name="user_id" id="user_id">
        @foreach($users as $user)
          <option @if($user->id == $post->user_id) selected @endif value="{{ $user->id }}">{{ $user->username }} ({{ $user->email }})</option>
        @endforeach
    </select>
    @isset($_SESSION['errors']['user_id'])
        @foreach($_SESSION['errors']['user_id'] as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endisset
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select name="category[]" id="category">
        @foreach($categories as $cat)
          <option @if(in_array($post->id, $post->category->pluck('id')->toArray())) selected @endif value="{{ $post->id }}">{{ $post->name }}</option>
        @endforeach
    </select>
    @isset($_SESSION['errors']['category'])
        @foreach($_SESSION['errors']['category'] as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endisset
  </div>

  <div class="form-group">
    <label for="tag">Tag</label>
    <select name="tag[]" id="tag">
        @foreach($tags as $tag)
          <option @if(in_array($post->id, $post->tag->pluck('id')->toArray())) selected @endif value="{{ $post->id }}">{{ $post->name }}</option>
        @endforeach
    </select>
    @isset($_SESSION['errors']['tag'])
        @foreach($_SESSION['errors']['tag'] as $error)
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