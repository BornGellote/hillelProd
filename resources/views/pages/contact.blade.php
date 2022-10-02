@extends('layout')

@section('title', 'Contact page')

@section('breadcrumbs')
    @include('partials.breadcrumbs', [
        'links' => [
            [
                'link' => '/',
                'name' => 'Home',
            ], [
                'link' => 'contact.php',
                'name' => 'Contact',
            ]
        ]
    ])
@endsection

@section('content')
    <p>{{ $title }}</p>
@endsection
