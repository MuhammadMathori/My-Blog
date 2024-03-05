@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <h2 class="mb-4">{{ $post->title }}</h2>
                <h6>By: <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none ">{{ $post->category->name }}</a>
                </h6>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid ">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-4">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="mt-3 btn btn-outline-danger">Back</a>
            </div>
        </div>
    </div>
@endsection
