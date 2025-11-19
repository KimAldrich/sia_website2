<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'FortiVine Tech')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Navigation styling */
        .nav-list li a {
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #276221;
            font-size: 14px;
        }
        .nav-list li a:hover {
            color: #276221;
        }
        .nav-burger { color: #276221; }
        .logo-img { width: 80px; height: 80px; object-fit: contain; }
        .logo-text { font-family: Arial, sans-serif; font-size: 18px; }
        .site-nav { background: white; position: relative; z-index: 10; border-bottom: 8px solid #276221; }
        .container { padding-top: 80px; }

        /* Footer styling */
        .fv-footer { background: #3b8132; color: #ffffff; padding: 50px 20px 20px; border-top: 6px solid #52a447; font-family: Arial, sans-serif; }
        .fv-footer-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: 20px; }
        .fv-footer-brand { flex: 1; max-width: 25%; }
        .fv-footer-brand h2 { margin-bottom: 10px; font-size: 24px; color: #ffffff; }
        .fv-footer-btn { margin-top: 15px; background: transparent; border: 2px solid #52a447; color: #ffffff; padding: 8px 14px; border-radius: 6px; cursor: pointer; font-size: 14px; }
        .fv-footer-btn:hover { background: #e2b43d; color: #ffffff; }
        .fv-footer-columns { display: flex; flex: 3; justify-content: space-between; gap: 20px; max-width: 75%; }
        .fv-footer-col h4 { margin-bottom: 10px; color: #ffffff; }
        .fv-footer-col ul { list-style: none; padding: 0; }
        .fv-footer-col li { margin-bottom: 6px; }
        .fv-footer-bottom { text-align: center; padding-top: 20px; margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.2); font-size: 14px; }
        .nav-search { display: flex; align-items: center; margin-top: 20px; }
        .nav-search__input { padding: 8px; border: 1px solid #52a447; border-radius: 4px 0 0 4px; flex: 1; }
        .nav-search__btn { padding: 8px 12px; background: #52a447; border: 1px solid #52a447; border-radius: 0 4px 4px 0; color: white; cursor: pointer; }
        .nav-search__btn:hover { background: #e2b43d; }

        /* Image grid styling */
        .image-grid { display: grid; gap: 15px; margin: 20px 0; }
        .image-grid-4 { grid-template-columns: repeat(4, 1fr); }
        .image-grid-2 { grid-template-columns: repeat(2, 1fr); }
        .image-grid img { width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: 8px; }

        /* Responsive video */
        .promo-wrapper { width: 100%; max-width: 900px; margin: 0 auto; }
        .promo-video { width: 100%; aspect-ratio: 16/9; border-radius: 10px; object-fit: cover; }

        /* Footer specific styling */
        footer { padding: 30px; background: linear-gradient(135deg, #e8f5e9, #ffffff); border-top: 4px solid #0f7a42; font-family: Arial, sans-serif; color: #0f3d1f; line-height: 1.6; }
        footer h4 { margin-top: 15px; color: #0f7a42; font-weight: bold; }
        footer ul { padding-left: 20px; }
        footer p, footer li { margin: 5px 0; }
    </style>
</head>
<body>
    <header class="site-header">
        <nav class="site-nav">
            <div class="nav-content">
                <a href="/" class="logo-wrap">
                    <img src="{{ asset('images/fortivine-logo.png') }}" alt="FortiVine Tech Logo" class="logo-img">
                    <span class="logo-text">FortiVine Tech</span>
                </a>
                <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-hidden="true">
                <label for="nav-toggle" class="nav-burger" aria-label="Toggle navigation" aria-controls="primary-nav"></label>
                <ul id="primary-nav" class="nav-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/projects">Portfolio</a></li>
                    <li><a href="/testimonials">Testimonials</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/customer-service">Customer Service</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="fv-footer">
        <div class="fv-footer-container">
            <div class="fv-footer-brand">
                <h2>FortiVine Tech</h2>
                <p>Empowering organizations with innovative, sustainable, and secure technology solutions.</p>
                <button class="fv-footer-btn" onclick="window.location='{{ url('/legal/terms') }}'">Terms of Use & Privacy Statement</button>
                <form class="nav-search" action="/search" method="get" role="search">
                    <input type="search" class="nav-search__input" name="q" value="{{ request('q') }}" placeholder="Search projects, services…" aria-label="Search FortiVine" required>
                    <button class="nav-search__btn" aria-label="Search">🔎</button>
                </form>
            </div>
            <div class="fv-footer-columns">
                <div class="fv-footer-col">
                    <h4>Company Email</h4>
                    <ul>
                        <li>Sales & Partnerships: inquiries@fortivinetech.com</li>
                        <li>Technical Support: support@fortivinetech.com</li>
                    </ul>
                </div>
                <div class="fv-footer-col">
                    <h4>Phone Numbers</h4>
                    <ul>
                        <li>Main Switchboard: +1 (555) 123-4567</li>
                        <li>Enterprise Hotline (24/7): +1 (555) 987-6543</li>
                    </ul>
                </div>
                <div class="fv-footer-col">
                    <h4>Customer Service</h4>
                    <ul>
                        <li>General Inquiries: customerservice@fortivinetech.com</li>
                        <li>FAQs & Help Center: <a href="/faqs" style="color: #ffffff;">Visit FAQs</a></li>
                        <li>Support Hours: Mon–Fri, 8 AM – 6 PM PST</li>
                        <li>Live Chat: Available on our website</li>
                    </ul>
                </div>
                <div class="fv-footer-col">
                    <h4>Information</h4>
                    <ul>
                        <li>Global HQ: Naldo Building, MacArthur Hwy, Urdaneta City, Pangasinan</li>
                        <li>Facebook: @FortiVineTech</li>
                        <li>Business Hours: Mon–Fri, 9 AM – 5 PM PST</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fv-footer-bottom">© {{ date('Y') }} FortiVine Tech — Where Technology and Sustainability Intertwined</div>
    </footer>
</body>
</html>
