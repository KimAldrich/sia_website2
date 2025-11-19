@extends('layouts.app')
@section('title', 'Careers & Events — FortiVine Tech')

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
                {{-- Placeholder events --}}
                <article class="card event-card">
                    <img src="https://placehold.co/600x300?text=Green+Tech+Summit+2025" alt="Green Tech Summit 2025"
                        class="event-banner">
                    <h3 class="event-title">Green Tech Summit 2025</h3>
                    <p class="event-date">📅 January 15–17, 2025 | Urdaneta City Convention Center</p>
                    <p class="event-summary">
                        A three-day conference highlighting sustainable technology trends and FortiVine's latest software
                        for
                        resource management. Attendees will experience live demos and meet our R&D team.
                    </p>
                    <a href="#" class="event-link">View Details</a>
                </article>

                <article class="card event-card">
                    <img src="https://placehold.co/600x300?text=Sustainability+Hackathon" alt="Sustainability Hackathon"
                        class="event-banner">
                    <h3 class="event-title">Sustainability Hackathon</h3>
                    <p class="event-date">📅 March 2–4, 2025 | FortiVine HQ Lab</p>
                    <p class="event-summary">
                        A 48-hour challenge bringing together students and developers to build real-world solutions for
                        agriculture, energy, and smart cities using FortiVine APIs and open data.
                    </p>
                    <a href="#" class="event-link">View Details</a>
                </article>

                <article class="card event-card">
                    <img src="https://placehold.co/600x300?text=Career+Open+House" alt="Career Open House"
                        class="event-banner">
                    <h3 class="event-title">Career Open House</h3>
                    <p class="event-date">📅 April 10, 2025 | Naldo Building, Pangasinan</p>
                    <p class="event-summary">
                        Meet the FortiVine team! Explore job opportunities in sustainable technology, software development,
                        and project management. Network with our leaders and HR team.
                    </p>
                    <a href="#" class="event-link">View Details</a>
                </article>

                <article class="card event-card">
                    <img src="https://placehold.co/600x300?text=Women+in+Tech+Forum" alt="Women in Tech Forum"
                        class="event-banner">
                    <h3 class="event-title">Women in Tech Forum</h3>
                    <p class="event-date">📅 May 23, 2025 | Online</p>
                    <p class="event-summary">
                        A virtual panel celebrating women innovators in sustainable technology. Speakers from FortiVine will
                        discuss diversity, innovation, and leadership in green tech industries.
                    </p>
                    <a href="#" class="event-link">View Details</a>
                </article>

                <article class="card event-card">
                    <img src="https://placehold.co/600x300?text=Environmental+Innovation+Expo"
                        alt="Environmental Innovation Expo" class="event-banner">
                    <h3 class="event-title">Environmental Innovation Expo</h3>
                    <p class="event-date">📅 July 5–7, 2025 | Baguio Convention Hall</p>
                    <p class="event-summary">
                        FortiVine joins other sustainability leaders to showcase products, services, and innovations that
                        promote greener industries and smarter cities.
                    </p>
                    <a href="#" class="event-link">View Details</a>
                </article>
            </div>

            {{-- Careers Section --}}
            <section class="section careers">
                <h2 class="section-title">Careers at FortiVine</h2>
                <p>
                    We are always looking for passionate innovators to join our growing team. If you’re driven by
                    sustainability,
                    technology, and social impact, FortiVine is your home to grow and make a difference.
                </p>
                <ul class="career-list">
                    <li><strong>Software Engineer (Laravel / PHP)</strong> — Work on backend systems that power our
                        sustainability tools.</li>
                    <li><strong>Data Analyst</strong> — Build dashboards and metrics that measure environmental impact.</li>
                    <li><strong>UI/UX Designer</strong> — Design user experiences for environmental transparency and
                        usability.</li>
                    <li><strong>Partnership Manager</strong> — Connect with global organizations and drive meaningful
                        collaborations.</li>
                </ul>
                <p class="career-cta">
                    Send your résumé and cover letter to
                    <a href="mailto:careers@fortivinetech.com" class="event-link">careers@fortivinetech.com</a>
                </p>
            </section>
        </div>
    </section>
@endsection