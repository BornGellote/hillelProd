@extends('layout')

@section('content')
    <h1>{{ $tag->title }}</h1>
    <ul>
        <li>
            Slug: {{ $tag->slug }}
            created: {{ $tag->created_at }}
            update: {{ $tag->update_at }}
        </li>
    </ul>
@endsection()