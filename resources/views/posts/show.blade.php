@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title display-4 mb-4">{{ $post->title }}</h1>
            <p class="card-text fs-5">{{ $post->content }}</p>
            <div class="text-center mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-primary btn-lg">Back to Posts</a>
            </div>
        </div>
    </div>
</div>

@endsection