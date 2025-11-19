@extends('layouts.app')
@section('title', 'Customer Service — FortiVine Tech')

@section('content')
<section class="home-hero">
    <h1 class="page-title">Customer Service</h1>
    <p class="lead">
        Live Chat/Phone support: <strong>M–F, 9am–5pm PST</strong>. Email/Ticket responses within <strong>24
            hours</strong>.
        For urgent enterprise issues call <strong>+1 (555) 987-6543</strong> or email
        <a href="mailto:support@fortivinetech.com" class="link">support@fortivinetech.com</a>.
    </p>

</section>
<section class="section" id="support">
    <div class="container">

        <div class="grid grid-2 gap">
            {{-- FAQs --}}
            <article class="card">
                <h2 class="section-title">FAQs</h2>

                {{-- Static FAQs you provided --}}
                <div class="faq-list">
                    <details class="faq" open>
                        <summary>What kind of technology do you use for waste reduction?</summary>
                        <div class="faq-body">
                            We use predictive modeling and proprietary algorithms to optimize resource use and reduce
                            waste across operations, with dashboards for transparent monitoring.
                        </div>
                    </details>

                    {{-- FAQ 2 --}}
                    <details class="faq">
                        <summary>Can your software integrate with existing legacy systems?</summary>
                        <div class="faq-body">
                            Yes. Our solutions are designed for high adaptability and interoperability.
                            We provide API connectors and custom adapters to integrate with various legacy platforms and
                            enterprise tools.
                        </div>
                    </details>

                    {{-- FAQ 3 --}}
                    <details class="faq">
                        <summary>Do you provide cloud-based deployment options?</summary>
                        <div class="faq-body">
                            Absolutely. Our services can be deployed on the cloud, on-premises, or in hybrid
                            configurations depending on your infrastructure and data governance requirements.
                        </div>
                    </details>

                    {{-- FAQ 4 --}}
                    <details class="faq">
                        <summary>How do you ensure data privacy and security?</summary>
                        <div class="faq-body">
                            We follow ISO/IEC 27001 standards and regional data protection laws.
                            All data transmissions are encrypted, and we implement multi-layered access control and
                            regular security audits.
                        </div>
                    </details>

                    {{-- FAQ 5 --}}
                    <details class="faq">
                        <summary>What kind of support and training do you provide?</summary>
                        <div class="faq-body">
                            We offer onboarding sessions, documentation, and 24/7 support through email and chat.
                            Custom training workshops are also available for teams transitioning to sustainable digital
                            systems.
                        </div>
                    </details>

                    {{-- FAQ 6 --}}
                    <details class="faq">
                        <summary>How much does it cost to start with FortiVine Tech solutions?</summary>
                        <div class="faq-body">
                            Pricing varies depending on project scale, customization level, and deployment type.
                            We begin with a free consultation to assess your needs and provide a detailed quotation.
                        </div>
                    </details>
                </div>

                {{-- Optional: additional FAQs from database --}}
                @php($faqs = \App\Models\Faq::all())
                @if($faqs->count())
                    <div class="faq-list" style="margin-top:1rem;">
                        @foreach($faqs as $f)
                            <details class="faq">
                                <summary>{{ $f->question }}</summary>
                                <div class="faq-body">{{ $f->answer }}</div>
                            </details>
                        @endforeach
                    </div>
                @endif
            </article>

            {{-- Support Ticket Form --}}
            <article class="card">
                <h2 class="section-title">Open a Support Ticket</h2>
                <p class="muted">For non-urgent technical issues. Enterprise customers with 24/7 contracts should use
                    their priority line.</p>

                <form method="post" action="{{ route('support.store') }}" class="form">
                    @csrf
                    <div class="form-row">
                        <label for="name">Name</label>
                        <input id="name" name="name" class="input" placeholder="Your full name" required>
                    </div>

                    <div class="form-row">
                        <label for="company">Company <span class="muted">(optional)</span></label>
                        <input id="company" name="company" class="input" placeholder="Company or organization">
                    </div>

                    <div class="form-row">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" class="input" placeholder="you@example.com"
                            required>
                    </div>

                    <div class="form-row">
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" class="input" placeholder="Brief subject" required>
                    </div>

                    <div class="form-row">
                        <label for="message">Issue Description</label>
                        <textarea id="message" name="message" rows="5" class="textarea"
                            placeholder="Describe the issue…" required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit Ticket</button>
                        <span class="help-inline">We’ll reply via email within 24 hours.</span>
                    </div>
                </form>

                @if ($errors->any())
                    <div class="alert alert-error">
                        <strong>There were problems with your submission:</strong>
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </article>
        </div>

        {{-- Contact Options / Availability --}}
        <section class="section" style="padding-top:2rem;">
            <h2 class="section-title">Contact Options</h2>
            <ul class="contact-list">
                <li>Email: <a class="link" href="mailto:support@fortivinetech.com">support@fortivinetech.com</a></li>
                <li>Phone: <a class="link" href="tel:+15559876543">+1 (555) 987-6543</a></li>
                <li>Service Availability: Live Chat/Phone (M–F, 9am–5pm PST); Email/Tickets within 24h</li>
            </ul>
        </section>

    </div>
</section>
@endsection