@extends('layouts.app')
@section('title', 'Portfolio — FortiVine Tech')

@section('content')

    {{-- HERO --}}
    <section class="home-hero">
        <div class="container">
            <h1 class="page-title">Our Work</h1>
            <p class="lead">
                A curated selection of impactful projects delivered across energy, agriculture,
                analytics, and civic innovation.
            </p>
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

    {{-- CTA --}}
    <section class="home-hero">
        <div class="container cta-wrap">
            <div>
                <h3 class="cta-title">Have a project in mind?</h3>
                <p class="cta-sub">Let's build something impactful together.</p>
            </div>
            <a class="btn btn-primary btn-lg" href="/contact">Start a project</a>
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

@endsection
@section('footer')
@endsection