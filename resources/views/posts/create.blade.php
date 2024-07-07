@extends('layout')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        @error('title')
            <div>{{ $message }}</div>
        @enderror

        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>
        @error('content')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Create</button>
    </form>
@endsection