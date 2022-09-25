@extends('layout')

@section('title', 'Tags')

@section('content')
    <div class="ttl-main">
        <h1>{{ $title }}</h1>
    </div>
    <div class="content-main">
        <a href="/public/tag/create.php" class="btn btn-primary">Add Tag</a>
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
                            <a href="/public/tag/update.php?id={{ $tag->id }}">Upload</a>
                            <a href="/public/tag/delete.php?id={{ $tag->id }}">Delete</a>
                        </td>
                    </tr>
                @empty
                    <p>No users</p>
                @endforelse
            </tbody>
        </table>
        
    </div>
@endsection