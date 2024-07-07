@extends('layout')

@section('content')
    <h1>Posts</h1>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <a href="{{ route('post.create') }}">Create New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection