@extends('layouts.app')
@section('title', 'Careers & Events – FortiVine Tech')

@section('content')
    <section class="home-hero">
        <h1 class="page-title">Events</h1>
        <p class="lead">
            FortiVine Tech continuously fosters innovation through educational programs, sustainability seminars,
            and collaboration events. Join our movement toward a greener, tech-driven future.
        </p>
    </section>
    <section class="section">
        <div class="container">

            <h2 class="section-title">Upcoming Events</h2>
            <div class="grid grid-3 events">
                @foreach($events as $event)
                    <article class="card event-card">
                        <img src="{{ $event['banner'] }}" alt="{{ $event['title'] }}"
                            class="event-banner">
                        <h3 class="event-title">{{ $event['title'] }}</h3>
                        <p class="event-date">{{ $event['date'] }}</p>
                        <p class="event-summary">
                            {{ $event['summary'] }}
                        </p>
                        <a href="{{ url('/events/' . $event['slug']) }}" class="event-link">View Details</a>
                    </article>
                @endforeach
            </div>

            {{-- Careers Section --}}
            <section class="section careers">
                <h2 class="section-title">Careers at FortiVine</h2>
                <p>
                    We are always looking for passionate innovators to join our growing team. If you're driven by
                    sustainability,
                    technology, and social impact, FortiVine is your home to grow and make a difference.
                </p>
                <ul class="career-list">
                    <li><strong>Software Engineer (Laravel / PHP)</strong> - Work on backend systems that power our
                        sustainability tools.</li>
                    <li><strong>Data Analyst</strong> - Build dashboards and metrics that measure environmental impact.</li>
                    <li><strong>UI/UX Designer</strong> - Design user experiences for environmental transparency and
                        usability.</li>
                    <li><strong>Partnership Manager</strong> - Connect with global organizations and drive meaningful
                        collaborations.</li>
                </ul>
                <p class="career-cta">
                    Send your resume and cover letter to
                    <a href="mailto:careers@fortivinetech.com" class="event-link">careers@fortivinetech.com</a>
                </p>
            </section>
        </div>
    </section>
@endsection
