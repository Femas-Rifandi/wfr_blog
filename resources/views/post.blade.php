@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3"> {{ $post->title }} </h1>

            
            <p>By : <a href="/blog?author={{  $post->author->username  }}" class="text-decoration-none"> {{ $post->author->name }} </a> in <a href="/blog?category={{$post->category->slug}} " class="text-decoration-none"> {{ $post->category->name }}</a> </p>
            
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
            @endif
            
            <p>  {!! $post->body !!} </p>

            <article>
                <a href="/blog" class="d-block mt-3"> Back To Blog</a>
            </article>

        </div>
    </div>
</div>



@endsection
