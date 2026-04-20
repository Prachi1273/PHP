@extends('layouts.app')

@section('title', $member->meta_title ?: $member->name . ' | Trainer at SarvaShikshan®')

@section('meta_description',
    $member->meta_description ?: $member->name . ' is a ' . $member->designation . ' at SarvaShikshan® e-Learning with extensive experience in PMP® and Agile training.'
)

@section('og_title', $member->og_title ?: $member->name . ' | SarvaShikshan® Trainer')

@section('og_description',
    $member->og_description ?: $member->name . ' - ' . $member->designation . ' at SarvaShikshan® e-Learning. Explore trainer profile and expertise.'
)

@section('og_image', $member->profile_image_url)

@section('content')

<!-- HERO SECTION -->
<section class="trainer-hero py-5 text-center">
    <div class="container">
        <h1 class="fw-bold mb-2">{{ $member->hero_title }}</h1>
        <h4 class="text-muted">{{ $member->name }}</h4>
    </div>
</section>

<!-- PROFILE SECTION -->
<section class="trainer-profile py-5">
    <div class="container">
        <div class="row g-5 align-items-start">

            <!-- LEFT: PROFILE CARD -->
            <div class="col-lg-4 col-md-5">
                <div class="card trainer-card border-0 p-4 text-center">

                    <div class="trainer-image-wrapper mb-4">
                        <img
                            src="{{ $member->profile_image_url }}"
                            alt="{{ $member->name }}"
                            class="trainer-image">
                        
                        <!--<img-->
                        <!--    src="images/team/ganesh-watve.jpeg"-->
                        <!--    alt="{{ $member->name }}"-->
                        <!--    class="trainer-image">-->
                    </div>

                    <h5 class="fw-bold mb-1">{{ $member->name }}</h5>
                    <p class="text-muted mb-3">{{ $member->designation }}</p>

                    <!-- CONTACT -->
                    <div class="text-start mt-3 small">
                        @if($member->email)
                            <p class="mb-2">
                                <i class="bi bi-envelope-fill me-2"></i>
                                <a href="mailto:{{ $member->email }}" class="text-decoration-none">
                                    {{ $member->email }}
                                </a>
                            </p>
                        @endif

                        @if($member->phone)
                            <p class="mb-0">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <a href="tel:{{ $member->phone }}" class="text-decoration-none">
                                    {{ $member->phone }}
                                </a>
                            </p>
                        @endif
                    </div>

                    <!-- SOCIAL LINKS -->
                    <div class="trainer-social mt-4 pt-3 border-top d-flex justify-content-center gap-4">
                        @php $links = $member->social_links ?? []; @endphp

                        @if(!empty($links['linkedin']))
                            <a href="https://www.linkedin.com/in/ganesh-watve-pmp%C2%AE-scrum-73827b1/" target="_blank" class="fs-4 text-primary">
                                <i class="bib bi-linkedin"></i>
                            </a>
                        @endif
                        
			            @if(!empty($links['facebook']))
                            <a href="https://www.facebook.com/Sarvashikshan/" target="_blank" class="fs-4 text-primary">
                                <i class="bi bi-facebook"></i>
                            </a>
                        @endif
                        
                        @if(!empty($links['twitter']))
                            <a href="https://x.com/sarvashikshan" target="_blank" class="fs-4 text-primary">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                        @endif

                        @if(!empty($links['youtube']))
                            <a href="https://www.youtube.com/channel/UCFthknDcyCF4KOZMecXK78A" target="_blank" class="fs-4 text-primary">
                                <i class="bib bi-youtube"></i>
                            </a>
                        @endif
                    </div>

                </div>
            </div>

            <!-- RIGHT: CONTENT -->
            <div class="col-lg-8 col-md-7">
                @if($member->bio)
                    <div class="mb-4 text-muted">
                        {!! nl2br(e($member->bio)) !!}
                    </div>
                @endif

                <h3 class="fw-bold mb-3">{{ $member->highlights_title }}</h3>

                @if(!empty($member->highlights))
                    <ul class="ps-3">
                        @foreach($member->highlights as $point)
                            <li class="mb-2">
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">{{ $member->highlights_empty_text }}</p>
                @endif

            </div>

        </div>
    </div>
</section>

@endsection
