@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title mb-4 text-center">Edit Post</h1>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection