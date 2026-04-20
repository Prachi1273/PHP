@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="course-hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1>CAPM<sup>®</sup> Certification by PMI</h1>
                <p>
                    (Certified Associate in Project Management) <br>
                    Offered by SarvaShikshan<sup>®</sup> e-Learning <br>
                    Wisdom Begins With Wonder.
                </p>
            </div>
        </div>
    </div>
</section>




<section class="course-tabs">
    <div class="container">

        <!-- TAB HEADINGS -->
        <ul class="nav nav-pills justify-content-center course-tab-nav">

@foreach($tabs as $key => $tab)
    <li class="nav-item">
        <button 
            class="nav-link {{ $key == 0 ? 'active' : '' }}"
            data-bs-toggle="tab"
            data-bs-target="#{{ $tab->slug }}">
            
            {{ $tab->title }}
        </button>
    </li>
@endforeach

</ul>

        <!-- TAB CONTENT -->
        <div class="tab-content mt-4">

@foreach($tabs as $key => $tab)
    <div 
        class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" 
        id="{{ $tab->slug }}">

        <div class="tab-card">
            {!! $tab->content !!}
        </div>

    </div>
@endforeach

</div>
</div>
@endsection