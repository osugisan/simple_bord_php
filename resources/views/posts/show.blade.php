<!-- resources/views/layouts/layouts.blade.phpを使用する -->
@extends('layouts.layouts')

<!-- @yield('title')に埋め込むというコード -->
@section('title', 'Simple Board')

<!-- @yield('content')に埋め込まれます -->
@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }}

    <a href="/post/{{ $post->id }}/edit">Edit</a>

@endsection
