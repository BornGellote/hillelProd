@extends('layout')

@section('title', 'Home page')   

@section('content')
    <div class="ttl-main">
        <h1>{{ $title }}</h1>
    </div>
    <div class="content-main">
        <div class="row">
            @foreach($posts as $post)
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
                                    @foreach($post->tags as $tag)
                                        <span>{{ $tag->title }} </span>
                                    @endforeach
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
            


<footer></footer>
