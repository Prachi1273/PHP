@extends('layouts.app')

@section('title', $blog->title)

@section('content')

<section class="page-header text-center py-5">
    <h2>{{ $blog->title }}</h2>
</section>

<div class="container py-5">

   

    @if($blog->image)
        <img src="{{ asset('storage/'.$blog->image) }}"
             class="img-fluid mb-4"
             alt="{{ $blog->title }}">
    @endif

    <div class="blog-content">
        {!! $blog->description !!}
    </div>

    <a href="{{ route('blogs.index') }}" class="btn btn-outline-primary mt-4">
        ← Back to Blogs
    </a>

</div>

@endsection

