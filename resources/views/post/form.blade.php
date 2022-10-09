@extends('layout')

@section('content')
<form action="/post/store" method="post">
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
    <label for="slug">Description</label>
    <textarea class="form-control" id="description"  name="description" placeholder="Enter description" value="{{ $_SESSION['data']['body'] ?? '' }}"></textarea>
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
            <option value="{{ $user->id }}">{{ $user->username }} ({{ $user->email }})</option>
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
        @foreach($category as $cat)
            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
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
        @foreach($tag as $val)
            <option value="{{ $val->id }}">{{ $val->title }}</option>
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