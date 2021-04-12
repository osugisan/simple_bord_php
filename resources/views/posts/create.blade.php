<!-- resources/views/layouts/layouts.blade.phpを使用する -->
@extends('layouts.layouts')

<!-- @yield('title')に埋め込むというコード -->
@section('title', 'Simple Board')

<!-- @yield('content')に埋め込まれます -->
@section('content')

<h1>New Post</h1>

<form action="/posts" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/posts">Back</a>

@endsection
