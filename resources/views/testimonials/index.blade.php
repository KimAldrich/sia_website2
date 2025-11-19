@extends('layouts.app')
@section('title', 'Testimonials — FortiVine Tech')

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
                {{-- Static testimonials (7 total) --}}
                <article class="card testimonial">
                    <blockquote>“FortiVine's energy software helped us cut our facility's carbon footprint by 18% in the
                        first year. The results are undeniable.”</blockquote>
                    <p class="author">— CEO, PowerGrid Solutions</p>
                </article>

                <article class="card testimonial">
                    <blockquote>“Their agricultural technology is practical, adaptable, and genuinely helped our family farm
                        manage resources more efficiently. Highly recommended.”</blockquote>
                    <p class="author">— K. Dela Cruz, Independent Farmer</p>
                </article>

                <article class="card testimonial">
                    <blockquote>“The FortiVine team transformed our outdated system into a fully integrated smart platform.
                        We now save both energy and time.”</blockquote>
                    <p class="author">— Operations Director, GreenFuture Manufacturing</p>
                </article>

                <article class="card testimonial">
                    <blockquote>“Their data analytics solution gave us complete visibility into our environmental
                        performance. It’s a game changer for reporting.”</blockquote>
                    <p class="author">— Sustainability Officer, UrbanEco Corp.</p>
                </article>

                <article class="card testimonial">
                    <blockquote>“Working with FortiVine was seamless. Their IT consulting team helped us design a digital
                        roadmap aligned with our sustainability goals.”</blockquote>
                    <p class="author">— Head of Technology, RenewEdge Global</p>
                </article>

                <article class="card testimonial">
                    <blockquote>“They don’t just deliver software — they deliver long-term environmental value. Our energy
                        reduction exceeded expectations.”</blockquote>
                    <p class="author">— Project Manager, EnviroLink Systems</p>
                </article>

                <article class="card testimonial">
                    <blockquote>“FortiVine’s approach to sustainability through innovation sets them apart. Their
                        professionalism and passion show in every project.”</blockquote>
                    <p class="author">— Managing Partner, Sustainable Growth Alliance</p>
                </article>

                {{-- Dynamic testimonials from database --}}
                @foreach(\App\Models\Testimonial::with('project')->get() as $t)
                    <article class="card testimonial">
                        <blockquote>“{{ $t->quote }}”</blockquote>
                        <p class="author">— {{ $t->author }}, {{ $t->role }}, {{ $t->company }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection