@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="course-hero">
    <div class="container text-center">
        <h1>What is PMP<sup>®</sup> Certification?</h1>
        <p>
            Project Management Professional (PMP<sup>®</sup>) by PMI <br>
            Offered by SarvaShikshan<sup>®</sup> e-Learning
        </p>
    </div>
</section>

<section class="course-tabs">
<div class="container">

<!-- ✅ DYNAMIC TAB NAV -->
<ul class="nav nav-pills justify-content-center course-tab-nav flex-wrap">
@foreach($course->tabs as $index => $tab)
    <li class="nav-item">
        <button 
            class="nav-link {{ $index == 0 ? 'active' : '' }}"
            data-bs-toggle="tab"
            data-bs-target="#{{ $tab->slug }}">
            {{ $tab->title }}
        </button>
    </li>
@endforeach
</ul>

<!-- ✅ DYNAMIC TAB CONTENT -->

@foreach($course->tabs as $index => $tab)
<div class="tab-content mt-4">
<div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="{{ $tab->slug }}">
    <div class="tab-card text-center">
        {!! $tab->content !!}
    </div>
</div>

@endforeach

</div>

</div>
</section>

@endsection
