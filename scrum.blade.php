@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="course-hero">
    <div class="container text-center">
        <h1>What Is Scrum Product Owner Certified (SPOC®)</h1>
        <p>
            Certification by SCRUMstudy™ <br>
            Offered by SarvaShikshan® e-Learning
        </p>
    </div>
</section>

<section class="course-tabs">
<div class="container">

<!-- TAB NAV -->
<ul class="nav nav-pills justify-content-center course-tab-nav">
    <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview">Overview</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#who">Who Is It For</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#curriculum">Curriculum</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#skills">Skills</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#exam">Exam</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#materials">Materials</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#career">Career</button>
    </li>
</ul>

<!-- TAB CONTENT -->
<div class="tab-content mt-4">

<!-- OVERVIEW -->
<div class="tab-pane fade show active" id="overview">
<div class="tab-card text-center">
<p>
Scrum Product Owner Certified (SPOC®) is a professional credential from SCRUMstudy™ that validates your knowledge and practical understanding of the Product Owner role within the Scrum framework. It focuses on how to maximize product value, engage stakeholders, and manage product backlog in a Scrum environment.
A certified SPOC understands both business and Scrum team needs, enabling effective communication and delivery of high-value products.
</p>
</div>
</div>

<!-- WHO -->
<div class="tab-pane fade" id="who">
<div class="tab-card">
<ul class="audience-points">
<li>Anyone working with stakeholders or product requirements</li>
<li>Current or aspiring Product Owners</li>
<li>Business analysts, product managers, project managers, and team leads</li>
<li>Professionals involved in Scrum product planning or backlog management</li>
</ul>
<p class="text-center">
There are no formal prerequisites, but having Scrum fundamentals helps with understanding.
</p>
</div>
</div>

<!-- CURRICULUM -->
<div class="tab-pane fade" id="curriculum">
<div class="tab-card">

<h5>1. Introduction & Agile Overview</h5>
<ul class="audience-points">
<li>Agile fundamentals</li>
<li>Agile principles and methodologies</li>
<li>How Scrum fits within Agile frameworks</li>
</ul>

<h5>2. Scrum Overview</h5>
<ul class="audience-points">
<li>Scrum principles, aspects, and processes</li>
<li>Scrum values and empirical process control</li>
<li>Artifacts, roles, and events</li>
</ul>

<h5>3. Scrum Project Phases – Initiate</h5>
<ul class="audience-points">
<li>Create Product Vision and stakeholders</li>
<li>Form Scrum Team roles</li>
<li>Develop Epics and Product Backlog</li>
<li>Conduct Release Planning</li>
</ul>

<h5>4. Plan & Estimate</h5>
<ul class="audience-points">
<li>Create User Stories</li>
<li>Estimate and commit stories</li>
<li>Build Sprint Backlog</li>
</ul>

<h5>5. Implement</h5>
<ul class="audience-points">
<li>Guide sprint execution</li>
<li>Daily standups coordination</li>
<li>Backlog refinement</li>
</ul>

<h5>6. Review & Retrospect</h5>
<ul class="audience-points">
<li>Sprint review participation</li>
<li>Collect feedback</li>
<li>Update backlog</li>
</ul>

<h5>7. Release</h5>
<ul class="audience-points">
<li>Deliverables handover</li>
<li>Validate business value</li>
</ul>

<h5>8. Scrum Implementation & Scaling</h5>
<ul class="audience-points">
<li>Scrum in large projects</li>
<li>Transitioning to Scrum</li>
<li>Stakeholder alignment</li>
</ul>

</div>
</div>

<!-- SKILLS -->
<div class="tab-pane fade" id="skills">
<div class="tab-card">
<ul class="audience-points">
<li>Build product vision aligned with stakeholders</li>
<li>Define and prioritize user stories</li>
<li>Manage Product Backlog</li>
<li>Communicate value delivery</li>
<li>Support Scrum Team delivery</li>
<li>Apply estimation techniques</li>
</ul>
</div>
</div>

<!-- EXAM -->
<div class="tab-pane fade" id="exam">
<div class="tab-card">
<div class="table-responsive">
<table class="table table-bordered text-center">
<tr><th>Aspect</th><th>Details</th></tr>
<tr><td>Exam Name</td><td>SPOC®</td></tr>
<tr><td>Format</td><td>Multiple Choice</td></tr>
<tr><td>Questions</td><td>140</td></tr>
<tr><td>Duration</td><td>180 minutes</td></tr>
<tr><td>Delivery</td><td>Online</td></tr>
<tr><td>Marks</td><td>No negative marking</td></tr>
</table>
</div>
</div>
</div>

<!-- MATERIALS -->
<div class="tab-pane fade" id="materials">
<div class="tab-card">
<ul class="audience-points">
<li>SBOK® Guide</li>
<li>Student Workbook</li>
<li>Case Study Booklet</li>
<li>Glossary & exercises</li>
<li>Practice tests</li>
</ul>
</div>
</div>

<!-- CAREER -->
<div class="tab-pane fade" id="career">
<div class="tab-card">
<ul class="audience-points">
<li>Better communication with teams</li>
<li>Improved backlog prioritization</li>
<li>Stronger stakeholder engagement</li>
<li>Enhanced product strategy</li>
</ul>
</div>
</div>

</div>
</div>
</section>

@endsection