@extends('layout')

@section('title', 'Categories')

@section('content')
    <div class="ttl-main">
        <h1>{{ $title }}</h1>
    </div>
    <div class="content-main">
        <a href="/category/create" class="btn btn-primary">Add Category</a>
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
                @forelse ($categories as $cat)
                    <tr>
                        <th>{{ $cat->id }}</th>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>{{ $cat->created_at }}</td>
                        <td>{{ $cat->uploaded_at }} </td>
                        <td>
                            <a href="/category/{{ $cat->id }}/edit">Upload</a>
                            <a href="/category/{{ $cat->id }}/delete">Delete</a>
                            <a href="/category/{{ $cat->id }}/show">Show</a>
                        </td>
                    </tr>
                @empty
                    <p>No users</p>
                @endforelse
            </tbody>
        </table>
        
    </div>
@endsection