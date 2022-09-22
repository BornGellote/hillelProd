@extends('layout')

@section('title', 'Categories')

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
            @foreach($categories as $cat)
                <li>Title: {{ $cat->title }} => Slug: {{ $cat->slug }}</li>
            @endforeach
        </ul>
    </div>
@endsection