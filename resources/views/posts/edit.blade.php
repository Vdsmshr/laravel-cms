@extends('layout')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror

        <label for="content">Content</label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        @error('content')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection