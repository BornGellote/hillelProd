@extends('layout')

@section('title', 'Post')
 
@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{ $_SESSION['success'] }}
        </div>
    @endisset
    @php
        unset($_SESSION['success']);
    @endphp
    <div class="content-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-xs-12">
                    <a href="/post/create" class="btn btn-primary" >Add Post</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3>
                                        {{ $post->title }}
                                    </h3>
                                </div>
                                <div class="card-text">{{ $post->body }}</div>
                                <div class="card-footer">
                                    <div class="card-footer_cat">{{ $post->category_id }}</div>
                                    <div class="card-footer_tag">
                                        @forelse($post->tags as $tag)
                                            <span>{{ $tag->title }} </span>
                                            @empty
                                            <p>No tag</p>
                                        @endforelse
                                    </div>
                                </div>
                                <a href="/post/{{ $post->id }}/show" class="btn btn-primary">Show</a>
                                <a href="/post/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                                <a href="/post/{{ $post->id }}/delete" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No users</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection