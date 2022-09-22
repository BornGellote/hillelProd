@extends('layout')

@section('title', 'Tags')

@section('breadcrumbs')
    @include('partials.breadcrumbs', [
        'links' => [
            [
                'link' => 'index.php',
                'name' => 'Home',
            ], [
                'link' => 'list-categories.php',
                'name' => 'Categories',
            ], [
                'link' => 'list-tags.php',
                'name' => 'Tags',
            ]
        ]
    ])
@endsection

@section('content')
    <div class="ttl-main">
        <h1>{{ $title }}</h1>
    </div>
    <div class="content-main">
        <ul>
            @foreach($tags as $tag)
                <li>Title: {{ $tag->title }} => Slug: {{ $tag->slug }}</li>
            @endforeach
        </ul>
    </div>
@endsection

@section('content')
    <div class="ttl-main">
        <h3>Action with Tag</h3>
    </div>
    <div class="content-main">
        
    </div>
@endsection