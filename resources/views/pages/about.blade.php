@extends('layouts.app')
@section('title', 'About — FortiVine Tech')

@section('content')

{{-- ===================== STYLES ===================== --}}
<style>
    /* General Section Styling */
    .section {
        padding: 3rem 1.5rem; /* Reduced vertical spacing */
    }
    .container {
        max-width: 1240px;
        margin: 0 auto;
    }
    h2.section-title {
        font-size: 2.4rem;
        font-weight: 700;
        color: #1b5e20;
        text-align: center;
        margin-bottom: 1rem; /* Reduced margin */
    }
    p.section-sub, p.about-sub, p.lead {
        text-align: center;
        color: #4f4f4f;
        max-width: 860px;
        margin: 0 auto 1.5rem auto; /* Reduced margin */
        line-height: 1.6;
    }

    /* Hero Section */
    .home-hero {
        background: url('/images/about.png') center/cover no-repeat; /* Removed gray overlay */
        padding: 5rem 1rem; /* Slightly smaller padding */
        border-radius: 1.3rem;
        color: #ffffff;
        text-align: center;
        margin-bottom: 2rem; /* Reduced bottom margin */
        box-shadow: 0 12px 30px rgba(0,0,0,0.25);
        transition: all 0.3s ease-in-out;
    }
    .home-hero:hover {
        box-shadow: 0 16px 36px rgba(0,0,0,0.35);
    }
    .home-title {
        font-size: 2.8rem; /* Slightly smaller */
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .home-hero__text {
        max-width: 760px;
        margin: 0 auto;
    }

    /* Panels */
    .about-panels .panel {
        background: #e8f5e9;
        padding: 1.8rem; /* Slightly smaller padding */
        border-radius: 1rem;
        box-shadow: 0 6px 16px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .about-panels .panel:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 22px rgba(0,0,0,0.15);
    }

    /* Values */
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    .value-card {
        background: #ffffff;
        border-radius: 1rem;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 6px 16px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 28px rgba(0,0,0,0.15);
    }
    .value-icon svg {
        width: 42px;
        height: 42px;
        fill: #2e7d32;
        margin-bottom: 0.8rem;
    }

    /* Founders */
    .founders .founder-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    .founder-card {
        background: #ffffff;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 6px 16px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .founder-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 28px rgba(0,0,0,0.18);
    }
    .founder-photo {
        width: 100%;
        border-radius: 0.8rem;
        margin-bottom: 1rem;
    }
    .founder-name {
        font-size: 1.3rem;
        font-weight: 700;
        color: #1b5e20;
    }
    .founder-role {
        font-weight: 600;
        color: #388e3c;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }

    /* Timeline */
    .timeline-list {
        list-style: none;
        padding-left: 0;
        margin-top: 2rem;
    }
    .timeline-item {
        position: relative;
        padding-left: 3rem;
        margin-bottom: 2rem;
        transition: all 0.3s ease;
    }
    .timeline-item .dot {
        width: 16px;
        height: 16px;
        background: #1b5e20;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 6px;
        box-shadow: 0 0 10px rgba(27,94,32,0.4);
    }
    .timeline-item .time {
        font-weight: 700;
        color: #2e7d32;
        margin-bottom: 0.3rem;
    }

    /* Partners */
    .partner-card {
        background: #ffffff;
        border-radius: 1rem;
        padding: 1.6rem;
        box-shadow: 0 6px 16px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .partner-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 28px rgba(0,0,0,0.18);
    }
    .partner-logo {
        width: 100%;
        border-radius: 0.6rem;
        margin-bottom: 0.8rem;
    }
    .partner-link {
        display: inline-block;
        margin-top: 0.5rem;
        color: #2e7d32;
        font-weight: 600;
        transition: color 0.2s ease;
    }
    .partner-link:hover {
        color: #1b5e20;
        text-decoration: underline;
    }

    /* Grid Helpers */
    .grid {
        display: grid;
        gap: 1.5rem;
    }
    .grid-2 {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }
    .grid-3 {
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    }
</style>

{{-- ===================== HERO SECTION ===================== --}}
<section class="section home-hero" itemscope itemtype="https://schema.org/Organization" style="background-image: url('/images/about.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container">
    <div class="home-hero__wrap" style="display: flex; align-items: center; justify-content: space-between; background: rgba(255, 251, 251, 0.69); padding: 20px; border-radius: 8px;">
      <div class="home-hero__text">
        <h1 class="home-title" itemprop="name">Where Technology and Sustainability Intertwined</h1>
        <p class="about-sub"> FortiVine Tech is a purpose-driven technology company dedicated to designing a resilient future. We were founded to tackle global sustainability concerns head-on by creating integrated, adaptable, and data-driven digital solutions. </p>
        <meta itemprop="url" content="{{ url('/') }}">
      </div>
    </div>
  </div>
</section>


{{-- ===================== FOUNDERS SECTION ===================== --}}

<section class="section founders">
    <div class="container">
        <h2 class="section-title">Meet FortiVine Tech Team</h2>

        @php
            $founders = [
                [
                    'name' => 'Kim Aldrich Andrada',
                    'role' => 'Chief Executive Officer',
                    'img' => asset('images/founders/kim-andrada.jpg'),
                    'alt' => 'Portrait of Kim Aldrich Andrada',
                    'blurb' => 'Leads FortiVine Tech’s strategic direction, operations, and partnerships. Oversees company growth and ensures alignment with the company’s mission and values.',
                ],
                [
                    'name' => 'Vince Allen Baniago',
                    'role' => 'Chief Technology Officer',
                    'img' => asset('images/founders/vince-baniago.jpg'),
                    'alt' => 'Portrait of Vince Allen Baniago',
                    'blurb' => 'Heads the design and implementation of sustainable digital solutions. Focuses on innovation, system architecture, and green technology development.',
                ],
                [
                    'name' => 'Krisha Mae Daban',
                    'role' => 'Chief Sustainability Officer',
                    'img' => asset('images/founders/krisha-daban.jpg'),
                    'alt' => 'Portrait of Krisha Mae Daban',
                    'blurb' => 'Ensures environmental integrity across all projects. Directs sustainability strategies, research initiatives, and eco-focused partnerships.',
                ],
            ];
        @endphp

        <div class="founder-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 2rem;">
            @foreach($founders as $f)
                <article class="card founder-card" itemscope itemtype="https://schema.org/Person"
                    style="background: #ffffff; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 6px 16px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <figure class="founder-media">
                        <img src="{{ $f['img'] }}" alt="{{ $f['alt'] }}" class="founder-photo" loading="lazy" itemprop="image"
                            style="width: 100%; border-radius: 0.8rem; margin-bottom: 1rem;">
                    </figure>

                    <div class="founder-meta">
                        <div class="founder-name" itemprop="name" style="font-size: 1.3rem; font-weight: 700; color: #1b5e20;">{{ $f['name'] }}</div>
                        <div class="founder-role" itemprop="jobTitle" style="font-weight: 600; color: #388e3c; font-size: 0.95rem; margin-bottom: 0.5rem;">{{ $f['role'] }}</div>
                        <p class="founder-blurb" itemprop="description" style="color: #4f4f4f; line-height: 1.5;">{{ $f['blurb'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<script>
    // Add hover transition effect for all founder cards
    document.querySelectorAll('.founder-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-8px)';
            card.style.boxShadow = '0 14px 28px rgba(0,0,0,0.18)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '0 6px 16px rgba(0,0,0,0.1)';
        });
    });
</script>


<section class="section">
    <div class="container grid grid-2 about-panels">
        <article class="panel">
            <h2 class="panel-title">Mission</h2>
            <p>To design sustainable technologies that integrate strength, adaptability, and responsibility for a better future.</p>
        </article>
        <article class="panel">
            <h2 class="panel-title">Vision</h2>
            <p>To become the leading innovator in environmentally conscious innovation across the globe, defining the future where sustainable development and digital advancement coexist seamlessly.</p>
        </article>
    </div>
</section>

<section class="section values">
    <div class="container">
        <h2 class="section-title">Core Values</h2>
        <p class="section-sub">What guides every decision we make.</p>
        <div class="values-grid">
            <article class="value-card">
                <div class="value-icon"><svg viewBox="0 0 24 24"><path d="M20.3 5.7a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-1.4 0l-5-5a1 1 0 1 1 1.4-1.4l4.3 4.29L18.9 5.7a1 1 0 0 1 1.4 0z"/></svg></div>
                <h3 class="value-title">Accountability</h3>
                <p class="value-text">We measure outcomes and own the results—environmental, social, and operational.</p>
            </article>
            <article class="value-card">
                <div class="value-icon"><svg viewBox="0 0 24 24"><path d="M19.14 12.94a7.964 7.964 0 0 0 .06-.94c0-.32-.02-.63-.06-.94l2.03-1.58a.5.5 0 0 0 .12-.64l-1.92-3.32a.5.5 0 0 0-.6-.22l-2.39.96a7.29 7.29 0 0 0-1.62-.94l-.36-2.54a.5.5 0 0 0-.5-.42h-3.84a.5.5 0 0 0-.5.42l-.36 2.54c-.58.22-1.12.53-1.62.94l-2.39-.96a.5.5 0 0 0-.6.22L2.65 7.84a.5.5 0 0 0 .12.64l2.03 1.58c-.04.31-.06.62-.06.94 0 .32.02.63.06.94L2.77 14.52a.5.5 0 0 0-.12.64l1.92 3.32c.13.22.39.31.6.22l2.39-.96c.5.41 1.04.72 1.62.94l.36 2.54c.05.24.26.42.5.42h3.84c.24 0 .45-.18.5-.42l.36-2.54c.58-.22 1.12-.53 1.62-.94l2.39.96c.21.09.47 0 .6-.22l1.92-3.32a.5.5 0 0 0-.12-.64l-2.03-1.58ZM12 15.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/></svg></div>
                <h3 class="value-title">Innovation</h3>
                <p class="value-text">We iterate rapidly to deliver practical, sustainable technology at scale.</p>
            </article>
            <article class="value-card">
                <div class="value-icon"><svg viewBox="0 0 24 24"><path d="M12 22a1 1 0 0 1-1-1v-6.38C6.83 14.25 4 11.22 4 7.5V6h1.5C9.1 6 12 8.9 12 12.5V21a1 1 0 0 1-1 1Zm2-10.5c0-3.6 2.9-6.5 6.5-6.5H22v1.5c0 3.72-2.83 6.75-6.5 6.75H14Z"/></svg></div>
                <h3 class="value-title">Environmental Responsibility</h3>
                <p class="value-text">We build for long-term impact—reducing waste and resource footprints.</p>
            </article>
        </div>
    </div>
</section>

<section class="section timeline">
    <div class="container">
        <h2 class="section-title">Our Story</h2>
        <ol class="timeline-list">
            <li class="timeline-item">
                <div class="dot"></div>
                <div class="time">2022</div>
                <div class="desc">Genesis and initial establishment. Early prototypes focused on resource tracking and ROSI pilot.</div>
            </li>
            <li class="timeline-item">
                <div class="dot"></div>
                <div class="time">2023</div>
                <div class="desc">Product 1.0 launches; entry into the energy sector and expansion into urban planning.</div>
            </li>
            <li class="timeline-item">
                <div class="dot"></div>
                <div class="time">2024</div>
                <div class="desc">WaterSense Project achieves <strong>15% water reduction</strong> across pilot sites. <em>“We ship sustainable value, not just code.”</em></div>
            </li>
        </ol>
    </div>
</section>

{{-- Partners Section --}}

<section class="section">
    <div class="container">
        <h2 class="section-title">How Partnerships Align</h2>
        <p>All our partners share our core value of environmental accountability and commitment to driving innovation for a healthier planet. These collaborations allow us to expand the reach and effectiveness of our green technology.</p>
        <h2 class="section-title" style="margin-top:1.75rem;">Key Partners</h2>
        <div class="grid grid-3">
            <article class="card partner-card">
                <img class="partner-logo" src="/images/sustainable.jpg" alt="Sustainable Harvest NGO logo">
                <h3 class="partner-name">Sustainable Harvest NGO</h3>
                <p class="partner-summary">A non-profit focused on empowering smallholder farmers with modern tools and training. Together we deploy resource planning and waste-reduction software across rural communities.</p>
                <a class="partner-link" href="#" target="_blank" rel="noopener">Visit</a>
            </article>
            <article class="card partner-card">
                <img class="partner-logo" src="/images/energy.jpg" alt="Global Renewable Energy Consortium logo">
                <h3 class="partner-name">Global Renewable Energy Consortium</h3>
                <p class="partner-summary">An international coalition accelerating renewable adoption. Our software supports energy monitoring, forecasting, and carbon reporting.</p>
                <a class="partner-link" href="#" target="_blank" rel="noopener">Visit</a>
            </article>
            <article class="card partner-card">
                <img class="partner-logo" src="/images/ur.jpg" alt="The Future City Institute logo">
                <h3 class="partner-name">The Future City Institute</h3>
                <p class="partner-summary">A research hub for sustainable urban planning. We collaborate on platforms that guide water use, waste diversion, and mobility improvements.</p>
                <a class="partner-link" href="#" target="_blank" rel="noopener">Visit</a>
            </article>
        </div>

        @php($partners = collect(\App\Support\SiteContent::partners()))
        @if($partners->count())
            <h2 class="section-title" style="margin-top:2rem;">All Partners</h2>
            <div class="grid grid-3">
                @foreach($partners as $p)
                    <article class="card partner-card">
                        <img class="partner-logo" src="{{ $p['logo'] ?: 'https://placehold.co/300x120?text=Partner+Logo' }}" alt="{{ $p['name'] }} logo">
                        <h3 class="partner-name">{{ $p['name'] }}</h3>
                        <p class="partner-summary">{{ $p['summary'] }}</p>
                        @if(!empty($p['link']))
                            <a class="partner-link" href="{{ $p['link'] }}" target="_blank" rel="noopener">Visit</a>
                        @endif
                    </article>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
