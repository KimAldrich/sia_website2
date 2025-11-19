@extends('layouts.app')
@section('title', 'Services — FortiVine Tech')

@section('content')
    <section class="home-hero">
        <h1 class="page-title">Our Services</h1>
        <p class="lead">
            At FortiVine Tech, our services reflect our belief that innovation should always align with
            environmental
            accountability.
            We develop digital solutions that help industries operate more efficiently, reduce waste, and integrate
            sustainable
            practices into everyday operations.
        </p>
    </section>
    <section class="section">
        <div class="container">



            {{-- Catalog: 5 core services (static content) --}}
            <div class="catalog grid grid-3">
                <article class="card svc">
                    <div class="svc-number">1</div>
                    <h3 class="svc-title">Agricultural Software Solutions for Waste Reduction</h3>
                    <p class="svc-desc">
                        This service supports farmers and agribusinesses in managing resources more efficiently. Using data
                        analytics and
                        farm management tools, it helps optimize irrigation, fertilizer use, and crop monitoring — reducing
                        waste and
                        promoting sustainable growth.
                    </p>
                </article>

                <article class="card svc">
                    <div class="svc-number">2</div>
                    <h3 class="svc-title">Energy-Efficient Software Solutions</h3>
                    <p class="svc-desc">
                        Provides energy monitoring and management tools for facilities and organizations. It helps identify
                        areas of high
                        energy consumption, supports the use of renewable energy, and improves overall energy efficiency.
                    </p>
                </article>

                <article class="card svc">
                    <div class="svc-number">3</div>
                    <h3 class="svc-title">Software Development and System Integration</h3>
                    <p class="svc-desc">
                        We build customized software and digital platforms tailored to client needs. Every solution is
                        scalable, secure,
                        and efficient — helping businesses transition toward sustainable, technology-driven operations.
                    </p>
                </article>

                <article class="card svc">
                    <div class="svc-number">4</div>
                    <h3 class="svc-title">Data Analytics and Environmental Reporting</h3>
                    <p class="svc-desc">
                        FortiVine Tech provides analytics that help organizations make data-informed sustainability
                        decisions. We develop
                        reporting systems for tracking energy use, waste reduction, and environmental performance metrics
                        aligned with
                        sustainability goals.
                    </p>
                </article>

                <article class="card svc">
                    <div class="svc-number">5</div>
                    <h3 class="svc-title">IT Consulting and Digital Transformation Support</h3>
                    <p class="svc-desc">
                        We assist organizations in adopting greener, smarter digital systems. From workflow digitization to
                        sustainable IT
                        strategies, we help clients modernize operations while reducing environmental impact.
                    </p>
                </article>
            </div>

            {{-- Benefits & Key Features --}}
            <section class="section benefits">
                <h2 class="section-title">Benefits &amp; Key Features</h2>
                <ul class="benefit-list">
                    <li><span class="badge">Efficiency</span> Improve resource management and reduce operational costs.</li>
                    <li><span class="badge">Transparency</span> Monitor sustainability metrics through user-friendly
                        dashboards.</li>
                    <li><span class="badge">Adaptability</span> Scalable solutions that evolve with client and industry
                        needs.</li>
                    <li><span class="badge">Accountability</span> Automated sustainability summaries and environmental
                        tracking tools.</li>
                </ul>
            </section>

            {{-- Dynamic (database) services list --}}
            @if($services->count())
                <h2 class="section-title">All Services</h2>
                <div class="grid grid-3">
                    @foreach($services as $s)
                        <article class="card service-card">
                            <a href="{{ route('services.show', $s) }}" class="service-title">{{ $s->title }}</a>
                            <p class="service-excerpt">{{ $s->excerpt }}</p>
                        </article>
                    @endforeach
                </div>

                <div class="pagination">
                    {{ $services->links() }}
                </div>
            @endif

        </div>
    </section>
@endsection