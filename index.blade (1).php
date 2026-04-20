@extends('layouts.app')

@section('content')

<section class="page-header text-center py-5">
    <h1>Blogs</h1>
</section>

<div class="container py-5">
    <div class="row">

        @foreach($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100">

                    @if($blog->image)
                        <img src="{{ asset('storage/'.$blog->image) }}"
                             class="card-img-top"
                             alt="{{ $blog->title }}">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $blog->title }}
                        </h5>

                        

                        <p class="card-text">
                            {{ $blog->short_description }}
                        </p>

                        <a href="{{ route('blogs.show', $blog->slug) }}">
			    Read More »
			</a>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection

