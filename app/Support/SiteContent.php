<?php

namespace App\Support;

class SiteContent
{
    public static function services(): array
    {
        return [
            [
                'slug' => 'agri-waste-reduction',
                'title' => 'Agricultural Software Solutions for Waste Reduction',
                'excerpt' => 'Data-driven farm management to cut waste and improve yields.',
                'body' => 'Tools for irrigation planning, fertilizer optimization, and crop monitoring so farms can run leaner operations.',
                'features' => [
                    'Predictive irrigation scheduling',
                    'Soil and weather data integrations',
                    'Waste reduction analytics',
                ],
            ],
            [
                'slug' => 'energy-efficiency',
                'title' => 'Energy-Efficient Software Solutions',
                'excerpt' => 'Energy monitoring, forecasting, and carbon reporting.',
                'body' => 'Dashboards and alerts that highlight high-consumption areas and promote renewable adoption.',
                'features' => [
                    'Facility energy baselining',
                    'Carbon and ESG reporting support',
                    'Anomaly and peak-demand alerts',
                ],
            ],
            [
                'slug' => 'integration',
                'title' => 'Software Development and System Integration',
                'excerpt' => 'Custom platforms and legacy interoperability built for scale.',
                'body' => 'Bespoke software, API layers, and adapters that keep complex environments talking to each other.',
                'features' => [
                    'API-first architecture',
                    'Legacy system adapters',
                    'Security and observability baked in',
                ],
            ],
            [
                'slug' => 'data-analytics',
                'title' => 'Data Analytics and Environmental Reporting',
                'excerpt' => 'Reporting systems for tracking energy use and waste reduction.',
                'body' => 'Outcome-focused analytics that surface the sustainability metrics leaders need for decisions.',
                'features' => [
                    'Executive-ready dashboards',
                    'Automated environmental summaries',
                    'Cross-system data connectors',
                ],
            ],
            [
                'slug' => 'consulting',
                'title' => 'IT Consulting and Digital Transformation Support',
                'excerpt' => 'Guidance to modernize operations while reducing impact.',
                'body' => 'Workshops, roadmaps, and delivery support that align tech investments with sustainability targets.',
                'features' => [
                    'Change management support',
                    'Sustainable IT assessments',
                    'Delivery playbooks and training',
                ],
            ],
        ];
    }

    public static function projects(): array
    {
        return [
            [
                'slug' => 'recycling-rewards-app',
                'title' => 'Recycling and Rewards Mobile Application',
                'summary' => 'Gamified recycling with eco-point tracking and reward redemption.',
                'cover' => '/images/portfolio/1.png',
                'year' => '2024',
                'role' => 'Lead Developer',
                'stack' => ['Laravel', 'Vue', 'IoT'],
                'challenge' => 'Increase participation in city recycling programs.',
                'outcome' => '18% lift in program engagement after launch.',
            ],
            [
                'slug' => 'study-sphere',
                'title' => 'Study Sphere',
                'summary' => 'Machine learning powered personalized study platform.',
                'cover' => '/images/portfolio/2.png',
                'year' => '2023',
                'role' => 'Data Engineer',
                'stack' => ['Python', 'ML', 'Cloud'],
                'challenge' => 'Help students learn faster with adaptive content.',
                'outcome' => 'Higher session completion and better quiz outcomes.',
            ],
            [
                'slug' => 'greencart',
                'title' => 'GreenCart',
                'summary' => 'Mobile shopping for sustainable and eco-friendly products.',
                'cover' => '/images/portfolio/3.jpg',
                'year' => '2024',
                'role' => 'Product Designer',
                'stack' => ['Figma', 'UX Strategy'],
                'challenge' => 'Make conscious consumer choices simple and engaging.',
                'outcome' => 'Improved product discovery and repeat purchases.',
            ],
            [
                'slug' => 'ecoward',
                'title' => 'Ecoward',
                'summary' => 'Gamified recycling incentives with partner integrations.',
                'cover' => '/images/portfolio/4.jpg',
                'year' => '2022',
                'role' => 'Full-stack Developer',
                'stack' => ['Node.js', 'React', 'API'],
                'challenge' => 'Scale rewards and redemption across user tiers.',
                'outcome' => 'Handled multi-tier rewards with reliable tracking.',
            ],
        ];
    }

    public static function events(): array
    {
        return [
            [
                'slug' => 'green-tech-summit-2025',
                'title' => 'Green Tech Summit 2025',
                'banner' => 'https://placehold.co/600x300?text=Green+Tech+Summit+2025',
                'date' => 'January 15-17, 2025 | Urdaneta City Convention Center',
                'summary' => 'Three-day conference on sustainable technology trends with live demos.',
            ],
            [
                'slug' => 'sustainability-hackathon',
                'title' => 'Sustainability Hackathon',
                'banner' => 'https://placehold.co/600x300?text=Sustainability+Hackathon',
                'date' => 'March 2-4, 2025 | FortiVine HQ Lab',
                'summary' => '48-hour build focused on agriculture, energy, and smart city solutions.',
            ],
            [
                'slug' => 'career-open-house',
                'title' => 'Career Open House',
                'banner' => 'https://placehold.co/600x300?text=Career+Open+House',
                'date' => 'April 10, 2025 | Naldo Building, Pangasinan',
                'summary' => 'Meet the team, explore roles in sustainable technology.',
            ],
            [
                'slug' => 'women-in-tech-forum',
                'title' => 'Women in Tech Forum',
                'banner' => 'https://placehold.co/600x300?text=Women+in+Tech+Forum',
                'date' => 'May 23, 2025 | Online',
                'summary' => 'Virtual panel featuring women innovators in sustainable tech.',
            ],
            [
                'slug' => 'environmental-innovation-expo',
                'title' => 'Environmental Innovation Expo',
                'banner' => 'https://placehold.co/600x300?text=Environmental+Innovation+Expo',
                'date' => 'July 5-7, 2025 | Baguio Convention Hall',
                'summary' => 'Showcase of products and innovations for greener industries.',
            ],
        ];
    }

    public static function partners(): array
    {
        return [
            [
                'name' => 'Sustainable Harvest NGO',
                'summary' => 'Deploying resource planning and waste-reduction software across rural communities.',
                'logo' => 'https://placehold.co/300x120?text=Sustainable+Harvest+NGO',
                'link' => '#',
            ],
            [
                'name' => 'Global Renewable Energy Consortium',
                'summary' => 'Energy monitoring, forecasting, and carbon reporting for member facilities.',
                'logo' => 'https://placehold.co/300x120?text=Global+Renewable+Energy+Consortium',
                'link' => '#',
            ],
            [
                'name' => 'The Future City Institute',
                'summary' => 'Data platforms that guide water use, waste diversion, and mobility improvements.',
                'logo' => 'https://placehold.co/300x120?text=The+Future+City+Institute',
                'link' => '#',
            ],
        ];
    }

    public static function testimonials(): array
    {
        return [
            ['quote' => 'FortiVine\'s energy software helped us cut our facility footprint by 18% in the first year.', 'author' => 'CEO, PowerGrid Solutions'],
            ['quote' => 'Their agricultural technology helped our family farm manage resources more efficiently.', 'author' => 'K. Dela Cruz, Independent Farmer'],
            ['quote' => 'The team transformed our system into a fully integrated smart platform.', 'author' => 'Operations Director, GreenFuture Manufacturing'],
            ['quote' => 'Their data analytics solution gave us visibility into our environmental performance.', 'author' => 'Sustainability Officer, UrbanEco Corp.'],
            ['quote' => 'IT consulting aligned our roadmap with sustainability goals.', 'author' => 'Head of Technology, RenewEdge Global'],
            ['quote' => 'They deliver long-term environmental value. Energy reduction exceeded expectations.', 'author' => 'Project Manager, EnviroLink Systems'],
            ['quote' => 'Professionalism and passion for sustainability show in every project.', 'author' => 'Managing Partner, Sustainable Growth Alliance'],
        ];
    }

    public static function faqs(): array
    {
        return [
            [
                'question' => 'What kind of technology do you use for waste reduction?',
                'answer' => 'Predictive modeling and proprietary algorithms to optimize resource use with transparent dashboards.',
            ],
            [
                'question' => 'Can your software integrate with existing legacy systems?',
                'answer' => 'Yes. API connectors and custom adapters keep legacy platforms and enterprise tools in sync.',
            ],
            [
                'question' => 'Do you provide cloud-based deployment options?',
                'answer' => 'Cloud, on-premises, or hybrid deployments depending on data governance requirements.',
            ],
            [
                'question' => 'How do you ensure data privacy and security?',
                'answer' => 'Encryption, multi-layered access control, and regular security reviews following ISO/IEC 27001.',
            ],
            [
                'question' => 'What kind of support and training do you provide?',
                'answer' => 'Onboarding sessions, documentation, 24/7 email/chat, and custom workshops.',
            ],
            [
                'question' => 'How much does it cost to start with FortiVine Tech solutions?',
                'answer' => 'Pricing depends on scale and deployment. We begin with a free consultation and detailed quote.',
            ],
        ];
    }
}
