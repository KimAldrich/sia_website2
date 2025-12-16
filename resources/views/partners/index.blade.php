@extends('layouts.app')
@section('title', 'Partners – FortiVine Tech')

@section('content')
<section class="home-hero">
    <h1 class="page-title">Partner Companies</h1>

    <p class="lead">
        Our partnership with <strong>Sustainable Harvest NGO</strong> aims to distribute our resource management
        software to underserved farming communities, maximizing our environmental impact globally.
    </p>
</section>
<section class="section">

    <div class="container">

        <h2 class="section-title">How Partnerships Align</h2>
        <p>
            All our partners share our core value of environmental accountability and commitment to driving
            innovation for a healthier planet. These collaborations allow us to expand the reach and effectiveness of our green
            technology.
        </p>

        <h2 class="section-title" style="margin-top:1.75rem;">Key Partners</h2>
        <div class="grid grid-3">
            @foreach($partners as $p)
                <article class="card partner-card">
                    <img class="partner-logo" src="{{ $p['logo'] }}"
                        alt="{{ $p['name'] }} logo">
                    <h3 class="partner-name">{{ $p['name'] }}</h3>
                    <p class="partner-summary">
                        {{ $p['summary'] }}
                    </p>
                    @if(!empty($p['link']))
                        <a class="partner-link" href="{{ $p['link'] }}"
                            aria-label="Visit {{ $p['name'] }} (opens in new tab)"
                            target="_blank" rel="noopener">Visit</a>
                    @endif
                </article>
            @endforeach
        </div>

    </div>
</section>
@endsection
