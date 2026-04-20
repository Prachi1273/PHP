@extends('layouts.app')

@section('content')

<!-- HERO SECTION OF COURSES PAGE -->
<section class="course-hero">
    <div class="container text-center">
        <h1>Our Training Programs</h1>
        <p>
            Explore our professional certification programs designed
            for working professionals and experienced learners.
        </p>
    </div>
</section>

<section class="program-section">
    <div class="container">
        <h2 class="text-center mb-4">Available Courses</h2>

        <div class="row">
            <!-- PMP Course -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="program-card">
                    <h3>PMP<sup>®</sup> Certification</h3>
                    <p>
                        Comprehensive PMP<sup>®</sup> training aligned with PMI<sup>®</sup> standards,
                        designed for experienced project professionals.
                    </p>
                    <a href="/courses/pmp" class="btn btn-outline-primary btn-sm">
                        View Program
                    </a>
                </div>
            </div>

            <!-- Scrum Course -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="program-card">
                    <h3>Scrum Master<sup>®</sup> Certification</h3>
                    <p>
                        Practical Scrum training focused on Agile principles,
                        real-world application, and team collaboration.
                    </p>
                    <a href="/courses/scrum_product" class="btn btn-outline-primary btn-sm">
                        View Program
                    </a>
                </div>
            </div>

            <!-- Agile Training -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="program-card">
                    <h3>Scrum<sup>®</sup> Product Owner Certification</h3>
                    <p>
                        Practical Scrum training focused on Agile principles,
                        real-world application, and team collaboration.
                    </p>
                    <a href="/courses/scrum" class="btn btn-outline-primary btn-sm">
                        View Program
                    </a>
                </div>
            </div>

            <!-- Corporate Training -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="program-card">
                    <h3>Corporate Training Programs</h3>
                    <p>
                        Customized training solutions designed to meet organizational
                        learning and transformation goals.
                    </p>
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        Contact Us
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection