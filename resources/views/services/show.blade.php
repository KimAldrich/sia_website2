@extends('layouts.app')
@section('title', ($service['title'] ?? 'Service') . ' – Services')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="page-title">{{ $service['title'] ?? 'Service' }}</h1>
            <article class="prose max-w-none mt-4">
                {!! nl2br(e($service['body'] ?? 'More details coming soon.')) !!}
            </article>

            @if(!empty($service['features']))
                <h2 class="section-title" style="margin-top:1.5rem;">Key Features</h2>
                <ul class="grid grid-2 gap" style="list-style:disc; padding-left:1.2rem;">
                    @foreach($service['features'] as $f)
                        <li>{{ $f }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
@endsection
