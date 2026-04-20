@extends('layouts.app')

@section('title', $news->title)

@section('content')
<div class="container py-5">

    {{-- Title --}}
    <h1 class="mb-2">{{ $news->title }}</h1>

    {{-- Date --}}
    <p class="text-muted mb-4">
        {{ \Carbon\Carbon::parse($news->news_date)->format('d M Y') }}
    </p>

    {{-- MAIN FEATURE IMAGE --}}
    @if($news->image)
        <div class="mb-4">
            <img 
                src="{{ asset('storage/'.$news->image) }}" 
                class="img-fluid rounded"
                alt="{{ $news->title }}"
            >
        </div>
    @endif

    {{-- FULL DESCRIPTION (HTML + MULTIPLE IMAGES) --}}
    <div class="news-description">
        {!! $news->description !!}
    </div>

    {{-- Back link --}}
    <a href="{{ route('news.index') }}" class="btn btn-outline-primary mt-4">
        ← Back to News
    </a>

</div>
@endsection

