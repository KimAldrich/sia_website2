@extends('layouts.app')
@section('title', 'Testimonials – FortiVine Tech')

@section('content')
    <section class="home-hero">
        <h1 class="page-title">What Clients Say</h1>
        <p class="lead">
            Insights and experiences shared by organizations that have partnered with FortiVine Tech
            to integrate sustainability into technology-driven solutions.
        </p>
    </section>
    <section class="section">
        <div class="container">
            <div class="grid grid-2 testimonials">
                @foreach($testimonials as $t)
                    <article class="card testimonial">
                        <blockquote>"{{ $t['quote'] }}"</blockquote>
                        <p class="author">- {{ $t['author'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
