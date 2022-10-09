@extends('layout')

@section('title', 'Tags')

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
        <a href="/tag/create" class="btn btn-primary">Add Tag</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Uploaded At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td>{{ $tag->title }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->uploaded_at }} </td>
                        <td>
                            <a href="/tag/{{ $tag->id }}/edit">Upload</a>
                            <a href="/tag/{{ $tag->id }}/delete">Delete</a>
                            <a href="/tag/{{ $tag->id }}/show">Show</a>
                        </td>
                    </tr>
                @empty
                    <p>No users</p>
                @endforelse
            </tbody>
        </table>
        
    </div>
@endsection