@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <ul>
        <li>
            Description: {{ $post->body }}
            created: {{ $post->created_at }}
            update: {{ $post->update_at }}
        </li>
    </ul>
@endsection()