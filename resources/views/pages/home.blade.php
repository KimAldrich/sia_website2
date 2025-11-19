@extends('layouts.app')

@section('title', 'FortiVine Tech — Where Technology and Sustainability Intertwined')

@section('content')

    {{-- Hero --}}

    <section class="home-hero position-relative">
        <div class="hero-bg-slider">
            <div class="hero-bg hero-bg-1"></div>
            <div class="hero-bg hero-bg-2"></div>
            <div class="hero-bg hero-bg-3"></div>
        </div>

        <div class="hero-overlay"></div>

        <div class="container home-hero__wrap">
            <!-- TEXT BLOCK -->
            <div class="home-hero__text home-hero__text--center">
                <h1 class="home-title">
                    FortiVine Tech, Where Technology and Sustainability Intertwined
                </h1>
                <p class="home-sub">
                    We design sustainable technologies that integrate strength, adaptability,
                    and responsibility for a better future.
                </p>
                <div class="btn-row">
                    <a href="/services" class="btn btn-primary">See Our Solutions & Impact</a>
                    <a href="#contact-section" class="btn btn-ghost">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- FULL-WIDTH VIDEO
                                                                                                                <div class="hero-video-full-wrapper">
                                                                                                                    <video class="hero-video-full" controls poster="{{ asset('images/video-thumb.jpg') }}">
                                                                                                                        <source src="{{ asset('videos/fortivine-promo.mp4') }}" type="video/mp4">
                                                                                                                        Your browser does not support the video tag.
                                                                                                                    </video>
                                                                                                                </div> -->
    </section>

    {{-- Stats strip --}}

    <section class="section stats">
        <div class="container grid grid-3 stats-grid">
            <div class="stat">
                <div class="stat-value">120+</div>
                <div class="stat-label">Clients Served</div>
            </div>
            <div class="stat">
                <div class="stat-value">18%</div>
                <div class="stat-label">Avg. Footprint Reduction</div>
            </div>
            <div class="stat">
                <div class="stat-value">85+</div>
                <div class="stat-label">Projects Delivered</div>
            </div>
        </div>
    </section>

    {{-- Promotional Video Placeholder --}}

    <!-- <section class="section promo-video-section">
                                                                                                                                                <div class="container">
                                                                                                                                                    <div class="promo-video-wrapper">
                                                                                                                                                        <div class="video-placeholder">
                                                                                                                                                            <div class="video-box">
                                                                                                                                                                <svg class="play-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                    <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2" />
                                                                                                                                                                    <path d="M10 8L16 12L10 16V8Z" fill="white" />
                                                                                                                                                                </svg>
                                                                                                                                                                <span class="video-text">Watch Video</span>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="video-description">
                                                                                                                                                            <h2>See FortiVine Tech in Action</h2>
                                                                                                                                                            <p>
                                                                                                                                                                Watch how our innovative solutions integrate technology and sustainability, helping clients achieve
                                                                                                                                                                measurable impact and efficiency.
                                                                                                                                                            </p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </section> -->

    <section class="promo-video-section">
        <div class="container">
            <div class="promo-video-wrapper">
                <div class="video-placeholder">
                    <video class="promo-video" controls poster="{{ asset('images/video-thumb.png') }}">
                        <source src="{{ asset('videos/FortiVine.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="video-description">
                    <h2>See FortiVine Tech in Action</h2>
                    <p>Short 60-second overview of how we help modern farms…</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Services --}}

    <section class="section services-section">
        <div class="container">
            <div class="section-head-center">
                <h2 class="section-title">Featured Services</h2>
                <a href="/services" class="link">View all services →</a>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card svc">
                    <div class="svc-img-wrapper">
                        <img src="{{ asset('images/services/agri.jpg') }}" class="svc-img" alt="Agriculture">
                    </div>
                    <h3 class="svc-title">Agricultural Software</h3>
                    <p class="svc-desc">Waste reduction through data-driven resource planning and farm analytics.</p>
                </article>

                <article class="card svc">
                    <div class="svc-img-wrapper">
                        <img src="{{ asset('images/services/energy.jpg') }}" class="svc-img" alt="Energy Solutions">
                    </div>
                    <h3 class="svc-title">Energy-Efficient Solutions</h3>
                    <p class="svc-desc">Monitoring, forecasting, and carbon reporting for facilities.</p>
                </article>

                <article class="card svc">
                    <div class="svc-img-wrapper">
                        <img src="{{ asset('images/services/software.jpg') }}" class="svc-img" alt="Integration">
                    </div>
                    <h3 class="svc-title">Software & Integration</h3>
                    <p class="svc-desc">Custom platforms and legacy interoperability built for scale.</p>
                </article>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="container">

            @php
                $projects = [
                    [
                        'title' => 'Recycling and Rewards Mobile Application',
                        'desc' => 'A comprehensive mobile application that incentivizes environmental responsibility by rewarding users for recycling activities. Built with Laravel backend and Vue.js frontend, the app features eco-point tracking, reward redemption systems, and gamification elements to encourage sustainable behavior. Successfully increased user engagement in recycling programs by providing tangible benefits for eco-friendly actions.',
                        'image' => '/images/portfolio/1.png',
                        'year' => '2024',
                        'role' => 'Lead Developer',
                        'stack' => ['Laravel', 'Vue', 'IoT'],
                    ],
                    [
                        'title' => 'Study Sphere',
                        'desc' => 'An intelligent educational platform leveraging machine learning to create personalized study experiences. The application analyzes student learning patterns and adapts content delivery accordingly. Developed using Python and ML frameworks with cloud deployment, it helps students optimize their learning efficiency through data-driven insights and collaborative tools.',
                        'image' => '/images/portfolio/2.png',
                        'year' => '2023',
                        'role' => 'Data Engineer',
                        'stack' => ['Python', 'ML', 'Cloud'],
                    ],
                    [
                        'title' => 'GreenCart',
                        'desc' => 'A user-centric mobile shopping platform focused on sustainable and eco-friendly products. Designed using Figma with comprehensive UX research and strategy implementation. The interface emphasizes intuitive navigation, product discovery, and transparent sustainability metrics, making conscious consumerism accessible and engaging for everyday shoppers.',
                        'image' => '/images/portfolio/3.jpg',
                        'year' => '2024',
                        'role' => 'Product Designer',
                        'stack' => ['Figma', 'UX Strategy'],
                    ],
                    [
                        'title' => 'Ecoward',
                        'desc' => 'A full-stack web and mobile solution promoting environmental sustainability through gamified recycling incentives. Built with Node.js, React, and API integrations, the platform manages user rewards, tracks environmental impact metrics, and facilitates partnerships with recycling centers. The system successfully scaled to handle multiple user tiers and redemption options.',
                        'image' => '/images/portfolio/4.jpg',
                        'year' => '2022',
                        'role' => 'Full-stack Developer',
                        'stack' => ['Node.js', 'React', 'API'],
                    ],
                ];
            @endphp
            <div class="section-head-center">
                <h2 class="section-title">Projects</h2>
                <a href="/projects" class="link">View all projects →</a>
            </div>
            {{-- GRID --}}
            <div class="simple-portfolio-grid">
                @foreach ($projects as $p)
                    <article class="portfolio-card">

                        <div class="portfolio-image-wrap">
                            <img src="{{ $p['image'] }}" class="portfolio-image" alt="{{ $p['title'] }}" loading="lazy">
                        </div>

                        <div class="portfolio-body">
                            <h3 class="portfolio-title">{{ $p['title'] }}</h3>
                            <p class="portfolio-description">{{ $p['desc'] }}</p>

                            <div class="portfolio-meta">
                                <span><strong>Year:</strong> {{ $p['year'] }}</span>
                                <span><strong>Role:</strong> {{ $p['role'] }}</span>
                            </div>

                            <div class="portfolio-tags">
                                @foreach ($p['stack'] as $tag)
                                    <span class="tag">{{ $tag }}</span>
                                @endforeach
                            </div>

                            <a href="#" class="btn btn-ghost">View Details</a>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    <style>
        /* Portfolio Grid - 2 columns */
        .simple-portfolio-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        /* Portfolio Card */
        .portfolio-card {
            display: flex;
            flex-direction: column;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
        }

        /* Image Container - Fixed aspect ratio */
        .portfolio-image-wrap {
            width: 100%;
            height: 300px;
            overflow: hidden;
            background: #f5f5f5;
            position: relative;
        }

        .portfolio-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        /* Card Body */
        .portfolio-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .portfolio-body .portfolio-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
            color: #333;
        }

        .portfolio-description {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        .portfolio-meta {
            display: flex;
            gap: 1.5rem;
            font-size: 0.9rem;
            color: #555;
        }

        .portfolio-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            padding: 0.25rem 0.75rem;
            background: #e9ecef;
            border-radius: 4px;
            font-size: 0.85rem;
            color: #495057;
        }

        /* Responsive - Single column on mobile */
        @media (max-width: 768px) {
            .simple-portfolio-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .portfolio-image-wrap {
                height: 250px;
            }
        }
    </style>


    {{-- Contact Section --}}

    <section class="section contact-section" id="contact-section">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">Get in Touch</h2>
                <p class="section-sub">Tell us about your project and we'll respond within one business day.</p>
            </div>

            <div class="grid grid-2 contact-grid">
                <div class="card contact-form">
                    @include('contact._form')
                </div>

                <div class="map-embed">
                    <iframe title="FortiVine Tech Location" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps?q=Naldo%20Building%2C%20MacArthur%20Hwy%2C%20Urdaneta%20City%2C%20Pangasinan&output=embed"></iframe>
                </div>
            </div>
        </div>

    </section>

@endsection

@push('styles')

    <style>
        /* -------------------------
                                                                                                                                                       GLOBAL RESET
                                                                                                                                                    --------------------------*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #145c32;
            margin-bottom: 0.5rem;
        }

        .section-sub {
            color: #3d704f;
            max-width: 650px;
            margin: 0 auto 2rem;
        }

        .section-head,
        .section-head-center {
            text-align: center;
            margin-bottom: 3rem;
        }

        /* -------------------------
                                                                                                                                                       GRID SYSTEM
                                                                                                                                                    --------------------------*/
        .grid {
            display: grid;
            gap: 2rem;
        }

        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        /* -------------------------
                                                                                                                                                       HERO SECTION
                                                                                                                                                    --------------------------*/
        .home-hero {
            height: 90vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-bg-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0;
            animation: slideFade 15s infinite;
        }

        .hero-bg-1 {
            background-image: url('/images/backgrounds/home.jpg');
            animation-delay: 0s;
        }

        .hero-bg-2 {
            background-image: url('/images/backgrounds/home2.jpg');
            animation-delay: 5s;
        }

        .hero-bg-3 {
            background-image: url('/images/backgrounds/home3.jpg');
            animation-delay: 10s;
        }

        @keyframes slideFade {

            0%,
            30% {
                opacity: 1;
            }

            33.33%,
            100% {
                opacity: 0;
            }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .home-hero__wrap {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .home-title {
            font-size: 3rem;
            line-height: 1.2;
            font-weight: 700;
            animation: fadeInUp 1s ease-in-out;
            margin-bottom: 1rem;
        }

        .home-sub {
            font-size: 1.2rem;
            opacity: 0.95;
            margin-bottom: 2rem;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .btn-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.875rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary {
            background: #2d6a39;
            color: white;
        }

        .btn-primary:hover {
            background: #3d7d49;
            transform: translateY(-3px);
        }

        .btn-ghost {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-ghost:hover {
            background: white;
            color: #2d6a39;
            transform: translateY(-3px);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* -------------------------
                                                                                                                                                       STATS
                                                                                                                                                    --------------------------*/
        .stats {
            background: #e8f5e9;
            padding: 3rem 0;
        }

        .stats-grid {
            text-align: center;
        }

        .stat-value {
            font-size: 2.2rem;
            font-weight: 800;
            color: #145c32;
        }

        .stat-label {
            color: #3a6544;
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        /* -------------------------
                                                                                                                                                       PROMO VIDEO - TIGHTER UI
                                                                                                                                                    --------------------------*/
        .promo-video-section {
            padding: 4rem 0;
            background: #ffffff;
        }

        .promo-video-wrapper {
            display: grid;
            grid-template-columns: 220px 1fr;
            /* smaller video column */
            max-width: 720px;
            margin: 0 auto;
            align-items: center;
            gap: 2rem;
        }

        /* container for the fake video thumbnail */
        .video-placeholder {
            width: 220px;
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* gradient card with play icon */
        .video-box {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2d6a39 0%, #145c32 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.18);
        }

        .video-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 26px rgba(0, 0, 0, 0.22);
        }

        .play-icon {
            width: 52px;
            height: 52px;
            transition: transform 0.3s ease;
        }

        .video-box:hover .play-icon {
            transform: scale(1.08);
        }

        .video-text {
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.03em;
        }

        /* text */
        .video-description {
            text-align: left;
        }

        .video-description h2 {
            font-size: 1.6rem;
            margin-bottom: 0.75rem;
            color: #145c32;
            line-height: 1.3;
        }

        .video-description p {
            font-size: 1rem;
            color: #3d704f;
            line-height: 1.6;
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .promo-video-wrapper {
                grid-template-columns: 1fr;
                justify-items: center;
                text-align: center;
            }

            .video-description {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .promo-video-section {
                padding: 3rem 0;
            }

            .video-placeholder {
                width: 180px;
                height: 180px;
            }

            .play-icon {
                width: 44px;
                height: 44px;
            }

            .video-text {
                font-size: 0.9rem;
            }

            .video-description h2 {
                font-size: 1.3rem;
            }

            .video-description p {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 480px) {
            .video-placeholder {
                width: 160px;
                height: 160px;
            }

            .play-icon {
                width: 38px;
                height: 38px;
            }
        }

        /* FORCE SMALLER VIDEO SIZE */
        .video-placeholder {
            width: 260px;
            /* adjust as you like */
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Target the actual video/iframe */
        .promo-video,
        .video-placeholder video,
        .video-placeholder iframe {
            width: 100%;
            height: 100%;
            max-width: 260px;
            max-height: 260px;
            border-radius: 16px;
            object-fit: cover;
            /* keeps it nicely cropped */
            display: block;
        }

        /* Remove any full-width behaviour */
        .promo-video-section video,
        .promo-video-section iframe {
            width: auto;
            height: auto;
            max-width: 100%;
        }

        /* Mobile tweaks */
        @media (max-width: 768px) {
            .video-placeholder {
                width: 200px;
                height: 200px;
            }

            .promo-video,
            .video-placeholder video,
            .video-placeholder iframe {
                max-width: 200px;
                max-height: 200px;
            }
        }

        /* HERO BASE */
        .home-hero {
            min-height: 100vh;
            /* fills the screen */
            padding-top: 6rem;
            /* space under navbar */
            padding-bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            position: relative;
            color: #ffffff;
            overflow: hidden;
        }

        /* text centered */
        .home-hero__wrap {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .home-hero__text--center {
            max-width: 800px;
            margin: 0 auto 2.5rem auto;
            text-align: left;
            /* or center if you prefer */
        }

        @media (max-width: 768px) {
            .home-hero__text--center {
                text-align: left;
                margin-bottom: 2rem;
            }
        }

        /* FULL-WIDTH VIDEO SECTION */
        .hero-video-full-wrapper {
            position: relative;
            z-index: 3;
            width: 100%;
            margin-top: 1.5rem;
            padding: 0 0 3rem 0;
            /* bottom spacing */
        }

        .hero-video-full {
            width: 100%;
            max-height: calc(100vh - 200px);
            /* prevents it from exceeding screen */
            object-fit: cover;
            display: block;
            border-radius: 0;
            /* edge-to-edge; change to 16px if you want rounded */
        }

        /* Optional: for slightly inset video, add side padding */
        @media (min-width: 992px) {
            .hero-video-full-wrapper {
                padding-left: 0;
                padding-right: 0;
            }
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .home-hero {
                min-height: 100vh;
                padding-top: 5rem;
            }

            .hero-video-full {
                max-height: 260px;
                /* smaller on mobile so it doesn’t dominate */
            }
        }


        /* -------------------------
                                                                                                                                                       SERVICES - FIXED IMAGE SIZES
                                                                                                                                                    --------------------------*/
        .services-section {
            background: white;
        }

        .services-grid {
            margin-top: 2rem;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 0;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.07);
            transition: all 0.25s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 28px rgba(0, 0, 0, 0.12);
        }

        .svc-img-wrapper {
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: #f5f5f5;
            position: relative;
        }

        .svc-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .svc-title {
            font-size: 1.5rem;
            color: #145c32;
            margin: 1.5rem 1.5rem 0.75rem;
        }

        .svc-desc {
            color: #3d704f;
            font-size: 1rem;
            line-height: 1.6;
            padding: 0 1.5rem 1.5rem;
        }

        .link {
            color: #2d6a39;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
            display: inline-block;
            margin-top: 0.5rem;
        }

        .link:hover {
            color: #145c32;
        }










        /* .portfolio-card {
                                            max-width: 320px;

                                            margin: 0 auto;
                                        }


                                        .portfolio-image-wrap {
                                            width: 70%;

                                            margin: 0 auto;

                                            aspect-ratio: 16 / 9;
                                            overflow: hidden;
                                        }

                                        .portfolio-image {
                                            width: 50%;
                                            height: 50%;
                                            object-fit: cover;
                                            object-position: center center;
                                            display: block;
                                        }


                                        .simple-portfolio-grid {
                                            max-width: 1200px;
                                            margin: 3rem auto 0 auto;

                                        } */


        /* -------------------------
                                                                                                                                                       CONTACT
                                                                                                                                                    --------------------------*/
        .contact-section {
            background: #f5faf5;
        }

        .contact-grid {
            align-items: start;
        }

        .contact-form {
            background: #1f5128;
            color: #d9f4d6;
            border-radius: 16px;
            padding: 2rem;
        }

        .map-embed iframe {
            width: 100%;
            height: 450px;
            border: 0;
            border-radius: 16px;
        }

        /* -------------------------
                                                                                                                                                       RESPONSIVE
                                                                                                                                                    --------------------------*/
        @media (max-width:1024px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }

            .grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }

            .home-title {
                font-size: 2.2rem;
            }

            /* Video wrapper stacks vertically on tablets */
            .promo-video-wrapper {
                grid-template-columns: 1fr;
                justify-items: center;
                gap: 2rem;
            }

            .video-description {
                text-align: center;
            }

            /* Projects: slightly smaller on tablets */
            .projects-grid-wrapper {
                grid-template-columns: repeat(2, 240px);
                grid-template-rows: repeat(2, 240px);
                gap: 1.5rem;
            }

            .project-item {
                width: 240px;
                height: 240px;
            }

            .svc-img-wrapper {
                height: 220px;
            }
        }

        @media (max-width:768px) {
            .grid-3 {
                grid-template-columns: 1fr;
            }

            .home-title {
                font-size: 1.8rem;
            }

            .home-sub {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .container {
                padding: 0 1rem;
            }

            /* Video: smaller on mobile */
            .video-placeholder,
            .video-box {
                width: 160px;
                height: 160px;
            }

            .play-icon {
                width: 50px;
                height: 50px;
            }

            .video-text {
                font-size: 1rem;
            }

            /* Projects: smaller 2x2 grid on mobile */
            .projects-grid-wrapper {
                grid-template-columns: repeat(2, 160px);
                grid-template-rows: repeat(2, 160px);
                gap: 1rem;
            }

            .project-item {
                width: 160px;
                height: 160px;
                border-radius: 12px;
            }

            .svc-img-wrapper {
                height: 200px;
            }
        }

        @media (max-width:480px) {

            /* Very small screens */
            .projects-grid-wrapper {
                grid-template-columns: repeat(2, 140px);
                grid-template-rows: repeat(2, 140px);
                gap: 0.75rem;
            }

            .project-item {
                width: 140px;
                height: 140px;
            }

            .video-placeholder,
            .video-box {
                width: 140px;
                height: 140px;
            }
        }
    </style>

@endpush