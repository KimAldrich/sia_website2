@extends('layouts.app')
@section('title', ($event['title'] ?? 'Event') . ' – Events')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="page-title">{{ $event['title'] ?? 'Event' }}</h1>
            <p class="lead">{{ $event['date'] ?? '' }}</p>
            <article class="card" style="padding:1.5rem; margin-top:1rem;">
                <img src="{{ $event['banner'] ?? 'https://placehold.co/800x400?text=Event' }}" alt="{{ $event['title'] ?? 'Event' }}" style="width:100%; max-height:320px; object-fit:cover;">
                <p style="margin-top:1rem;">{{ $event['summary'] ?? 'Details coming soon.' }}</p>
            </article>
        </div>
    </section>
@endsection
