@extends('dashboard.layouts.main')

@section('container')


<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <h1 class="mb-3"> {{ $post->title }} </h1>

            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span> Delete</button>
              </form>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top my-3" alt="...">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top my-3" alt="...">
            @endif
            
            <p>  {!! $post->body !!} </p>

            <article>
                <a href="/blog" class="d-block mt-3 text-decoration-none"> Back To Blog</a>
            </article>

        </div>
    </div>
</div>
  
{{-- <div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3"> {{ $post->title }} </h1>

            <a href="" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Post</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top my-3" alt="...">
            
            <p>  {!! $post->body !!} </p>

            <article>
                <a href="/blog" class="d-block mt-3"> Back To Blog</a>
            </article>

        </div>
    </div>
</div> --}}

@endsection