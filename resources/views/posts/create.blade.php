<!-- resources/views/layouts/layouts.blade.phpを使用する -->
@extends('layouts.layouts')

<!-- @yield('title')に埋め込むというコード -->
@section('title', 'Simple Board')

<!-- @yield('content')に埋め込まれます -->
@section('content')

    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="text">
    </form>

@endsection
