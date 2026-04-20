@extends('layouts.app')

@section('content')
<div class="container py-5">

    {{-- Page Heading --}}
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="page-title">News</h2>
        </div>
    </div>

    {{-- News Cards --}}
    <div class="row">
        @forelse($newsList as $news)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 news-card shadow-sm border-0">

                    {{-- Image --}}
                    <div class="position-relative">
                        @if($news->image)
                            <img 
                                src="{{ asset('storage/'.$news->image) }}" 
                                class="card-img-top"
                                alt="{{ $news->title }}"
                            >
                        @endif

                        {{-- NEWS Badge --}}
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">
                            NEWS
                        </span>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $news->title }}
                        </h5>
                    </div>

                    {{-- Read More --}}
                    <div class="px-3 pb-2">
                        <a href="{{ route('news.show', $news->slug) }}" class="text-warning fw-semibold">
                            READ MORE »
                        </a>
                    </div>

                    {{-- Date --}}
                    <div class="card-footer bg-white border-0 pt-0">
                        <small class="text-muted">
                            {{ \Carbon\Carbon::parse($news->news_date)->format('F d, Y') }}
                        </small>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <p>No news available.</p>
            </div>
        @endforelse
    </div>

</div>
@endsection

