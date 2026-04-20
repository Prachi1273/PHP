<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $course->title }} Course in {{ $city->name }} | {{ config('app.name') }}</title>

    <meta name="description"
          content="Enroll in {{ $course->title }} course in {{ $city->name }}. Duration {{ $course->duration_hours }} hours. Affordable pricing and expert trainers.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="{{ url($course->slug . '-in-' . $city->slug) }}">
</head>
<body>

    <header>
        <h1>{{ $course->title }} Course in {{ $city->name }}</h1>
    </header>

    <section>
        <p>{{ $course->description }}</p>

        <ul>
            <li><strong>City:</strong> {{ $city->name }}</li>
            <li><strong>Duration:</strong> {{ $course->duration_hours }} Hours</li>
            <li><strong>Category:</strong> {{ $course->category }}</li>
            <li><strong>Price:</strong> ₹{{ number_format($course->price) }}</li>
        </ul>
    </section>

    <section>
        <h2>Why Choose This Course in {{ $city->name }}?</h2>
        <p>
            Get certified in {{ $course->title }} with expert-led training sessions in {{ $city->name }}.
            Flexible schedules, practical learning, and exam-focused preparation.
        </p>
    </section>

    <section>
        <h2>Enroll Today</h2>
        <p>
            Contact us now to join the {{ $course->title }} course in {{ $city->name }} and advance your career.
        </p>
    </section>

</body>
</html>

