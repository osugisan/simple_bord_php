@if (session('message'))
    {{ session('message') }}
@endif

{{ $post->title }}
{{ $post->content }}

<a href="/post/{{ $post->id }}/edit">Edit</a>
