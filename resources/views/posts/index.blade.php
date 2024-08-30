@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1 class="display-4 text-center mb-4">Posts</h1>
    <div class="text-center mb-4">
        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">Create New Post</a>
    </div>
    <div class="list-group">
        @foreach($posts as $post)
        <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mb-2">
            <div>
                <h5 class="mb-1">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">{{ $post->title }}</a>
                </h5>
            </div>
            <div>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection