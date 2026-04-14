@extends('layouts.main')
@section('content')
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-inner">
                        <div class="badge"><span style="width:6px;height:6px;border-radius:50%;background:#fff;"></span>
                            AI-Powered
                            Market Intelligence</div>
                        <h1>Competitive Insights at the<span class="sub">Speed of Thought</span></h1>
                        <p>Transform your business decisions with data-driven market research, actionable analytics, and
                            AI-powered
                            intelligence across 50+ industries worldwide.</p>
                        <div class="hero-buttons">
                            <a href="{{ url('/reports') }}" class="btn-primary-lg">Explore Reports →</a>
                            <a href="{{ url('/contact') }}" class="btn-ghost-lg">Request Consultation</a>
                        </div>
                    </div>
                    <div class="hero-visual">
                        <div class="glass-card">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px">
                                <div>
                                    <p style="opacity:.5;font-size:12px;text-transform:uppercase;letter-spacing:1px">Market
                                        Growth</p>
                                    <p
                                        style="font-size:30px;font-weight:800;font-family:var(--font-heading);margin-top:4px">
                                        $4.2T</p>
                                </div>
                                <span class="growth"
                                    style="background:rgba(52,211,153,.1);padding:6px 12px;border-radius:999px;color:#34d399;font-size:14px;font-weight:700"><i
                                        class="fas fa-chart-line"></i> +24.8%</span>
                            </div>
                            <div class="chart-bars">
                                <div class="chart-bar" style="height:40%"></div>
                                <div class="chart-bar" style="height:55%"></div>
                                <div class="chart-bar" style="height:35%"></div>
                                <div class="chart-bar" style="height:70%"></div>
                                <div class="chart-bar" style="height:50%"></div>
                                <div class="chart-bar" style="height:80%"></div>
                                <div class="chart-bar" style="height:65%"></div>
                                <div class="chart-bar" style="height:90%"></div>
                                <div class="chart-bar" style="height:75%"></div>
                                <div class="chart-bar" style="height:95%"></div>
                                <div class="chart-bar" style="height:85%"></div>
                                <div class="chart-bar" style="height:100%"></div>
                            </div>
                            <div
                                style="display:flex;align-items:center;gap:12px;padding-top:16px;border-top:1px solid rgba(255,255,255,.1)">
                                <span style="opacity:.4;font-size:14px"><i class="fas fa-chart-bar"></i></span>
                                <div
                                    style="flex:1;height:4px;border-radius:4px;background:rgba(255,255,255,.1);overflow:hidden">
                                    <div style="width:72%;height:100%;border-radius:4px;background:rgba(52,211,153,.6)">
                                    </div>
                                </div>
                                <span style="opacity:.5;font-size:12px">72% YoY</span>
                            </div>
                        </div>
                        <div class="hero-float left">
                            <div class="icon-wrap"><i class="fas fa-chart-bar"></i></div>
                            <div>
                                <div class="label">Industries</div>
                                <div class="value">50+</div>
                            </div>
                        </div>
                        <div class="hero-float right">
                            <div class="icon-wrap"><i class="fas fa-chart-line"></i></div>
                            <div>
                                <div class="label">Reports</div>
                                <div class="value">150K+</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-fade"></div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="stats-grid fade-up">
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-file-alt"></i></div>
                        <div class="value">150,000+</div>
                        <div class="label">Reports</div>
                    </div>
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-microscope"></i></div>
                        <div class="value">70,000+</div>
                        <div class="label">Research Topics</div>
                    </div>
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <div class="value">850+</div>
                        <div class="label">Expert Analysts</div>
                    </div>
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-globe"></i></div>
                        <div class="value">5,000+</div>
                        <div class="label">Global Clients</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="section-header">
                    <div class="label">Industries We Cover</div>
                    <h2>Deep Expertise Across Sectors</h2>
                </div>
                <div class="industry-grid">
                    <a href="{{ url('/reports/healthcare') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-hospital"></i></span>
                        <div>
                            <h4>Healthcare</h4>
                            <p class="count">18,000+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/technology') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-satellite-dish"></i></span>
                        <div>
                            <h4>ICT & Telecom</h4>
                            <p class="count">22,000+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/energy') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-bolt"></i></span>
                        <div>
                            <h4>Energy & Power</h4>
                            <p class="count">14,000+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/semiconductor') }}" class="industry-card"><span
                            class="emoji"><i class="fas fa-microchip"></i></span>
                        <div>
                            <h4>Semiconductor</h4>
                            <p class="count">9,500+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/automotive') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-car"></i></span>
                        <div>
                            <h4>Automotive</h4>
                            <p class="count">11,000+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/chemicals') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-flask"></i></span>
                        <div>
                            <h4>Chemicals</h4>
                            <p class="count">8,200+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/consumer-goods') }}" class="industry-card"><span
                            class="emoji"><i class="fas fa-shopping-cart"></i></span>
                        <div>
                            <h4>FMCG</h4>
                            <p class="count">12,500+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/bfsi') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-landmark"></i></span>
                        <div>
                            <h4>BFSI</h4>
                            <p class="count">15,000+ Reports</p>
                        </div>
                    </a><a href="{{ url('/reports/aerospace') }}" class="industry-card"><span class="emoji"><i
                                class="fas fa-plane"></i></span>
                        <div>
                            <h4>Aerospace</h4>
                            <p class="count">6,800+ Reports</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section fade-up" id="reports">
            <div class="container">
                <div class="section-header">
                    <div class="label">Research Hub</div>
                    <h2>Industry Insights</h2>
                </div>
                <div class="reports-tabs">
                    <button class="tab-btn active" onclick="showTab(this,'latest')">Latest Reports</button>
                    <button class="tab-btn" onclick="showTab(this,'trending')">Trending Reports</button>
                </div>
                <div class="reports-grid" id="latest">

                    @foreach ($latestReports as $report)
                        <div class="report-card">
                            <div class="top">
                                <span class="badge-sm">{{ $report->industry_name }}</span>
                                <span class="growth">
                                    <i class="fas fa-chart-line"></i> +{{ $report->growth_rate }}</span>
                            </div>
                            <h3>{{ $report->name }}</h3>
                            <div class="date">
                                <i class="fas fa-calendar-alt"></i> {{ date('M d, Y', strtotime($report->created_at)) }}
                            </div>
                            <div class="actions">
                                <a href="{{ url('/') }}/{{ $report->slug }}" class="text-link">Read More
                                    →</a>
                                <a href="{{ url('/') }}/{{ $report->slug }}" class="btn-primary"
                                    style="font-size:13px;padding:6px 16px">
                                    <i class="fas fa-shopping-cart"></i> Buy Now
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="reports-grid" id="trending" style="display:none">
                   @foreach ($trendingReports as $report)
                        <div class="report-card">
                            <div class="top">
                                <span class="badge-sm">{{ $report->industry_name }}</span>
                                <span class="growth">
                                    <i class="fas fa-chart-line"></i> +{{ $report->growth_rate }}</span>
                            </div>
                            <h3>{{ $report->name }}</h3>
                            <div class="date">
                                <i class="fas fa-calendar-alt"></i> {{ date('M d, Y', strtotime($report->created_at)) }}
                            </div>
                            <div class="actions">
                                <a href="{{ url('/') }}/{{ $report->slug }}" class="text-link">Read More
                                    →</a>
                                <a href="{{ url('/') }}/{{ $report->slug }}" class="btn-primary"
                                    style="font-size:13px;padding:6px 16px">
                                    <i class="fas fa-shopping-cart"></i> Buy Now
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="section-header">
                    <div class="label">What We Offer</div>
                    <h2>Our Services</h2>
                </div>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-chart-bar"></i></div>
                        <h3>Market Research</h3>
                        <p>Comprehensive market sizing, segmentation, and growth forecasting to identify untapped
                            opportunities.</p>
                        <a href="{{ url('/services') }}" class="text-link">Learn More →</a>
                    </div>
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-bullseye"></i></div>
                        <h3>Competitive Intelligence</h3>
                        <p>Deep-dive analysis of competitive landscapes, benchmarking, and strategic positioning insights.
                        </p><a href="{{ url('/services') }}" class="text-link">Learn More →</a>
                    </div>
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-chart-line"></i></div>
                        <h3>Industry Analysis</h3>
                        <p>Sector-specific research covering trends, regulations, and market dynamics across 50+ industries.
                        </p><a href="{{ url('/services') }}" class="text-link">Learn More →</a>
                    </div>
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-file-alt"></i></div>
                        <h3>Custom Reports</h3>
                        <p>Tailored research solutions designed to address your specific business questions and strategic
                            goals.</p>
                        <a href="{{ url('/services') }}" class="text-link">Learn More →</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-alt fade-up">
            <div class="container">
                <div class="section-header">
                    <div class="label">Why Choose Us</div>
                    <h2>Why Evointels</h2>
                </div>
                <div class="services-grid">
                    <div class="service-card" style="text-align:center">
                        <div class="icon" style="margin:0 auto 20px"><i class="fas fa-brain"></i></div>
                        <h3>AI Insights</h3>
                        <p>Machine learning algorithms extract patterns from millions of data points for unmatched accuracy.
                        </p>
                    </div>
                    <div class="service-card" style="text-align:center">
                        <div class="icon" style="margin:0 auto 20px"><i class="fas fa-users"></i></div>
                        <h3>Expert Analysts</h3>
                        <p>850+ seasoned researchers with deep industry knowledge across every major sector.</p>
                    </div>
                    <div class="service-card" style="text-align:center">
                        <div class="icon" style="margin:0 auto 20px"><i class="fas fa-globe"></i></div>
                        <h3>Global Reach</h3>
                        <p>Comprehensive coverage spanning 100+ countries and 50+ industries worldwide.</p>
                    </div>
                    <div class="service-card" style="text-align:center">
                        <div class="icon" style="margin:0 auto 20px"><i class="fas fa-bolt"></i></div>
                        <h3>Fast Delivery</h3>
                        <p>Rapid turnaround on custom reports with real-time data feeds and automated pipelines.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-up" id="blog">
            <div class="container">
                <div class="section-header">
                    <div class="label">Knowledge Hub</div>
                    <h2>From Our Blog</h2>
                </div>
                <div class="blog-grid">
                    <a href="blog-details.html" class="card blog-card">
                        <div class="thumb"><i class="fas fa-chart-bar"></i></div>
                        <div class="card-body">
                            <span class="badge-sm">AI & Technology</span>
                            <h3 style="margin-top:12px;font-size:20px;font-weight:700">How AI is Reshaping Market Research
                                in 2026
                            </h3>
                            <p style="font-size:14px;color:var(--muted);margin:8px 0 16px;line-height:1.6">Discover how
                                artificial
                                intelligence and machine learning are transforming the way businesses approach market
                                analysis.</p>
                            <div class="meta"><span><i class="fas fa-clock"></i> Mar 18, 2026</span><span
                                    class="text-link">Read More
                                    →</span></div>
                        </div>
                    </a>
                    <div style="display:flex;flex-direction:column;gap:24px">
                        <a href="blog-details.html" class="card blog-card blog-card-sm" style="flex:1">
                            <div class="card-body">
                                <span class="badge-sm">Market Trends</span>
                                <h3 style="margin-top:12px;font-size:18px;font-weight:700">Top 5 Emerging Markets to Watch
                                    This Year
                                </h3>
                                <p style="font-size:14px;color:var(--muted);margin:8px 0">A concise look at the
                                    fastest-growing markets
                                    and what makes them attractive for investors.</p>
                                <div class="meta"><span><i class="fas fa-clock"></i> Mar 15, 2026</span><span
                                        class="text-link">Read
                                        More →</span></div>
                            </div>
                        </a>
                        <a href="blog-details.html" class="card blog-card blog-card-sm" style="flex:1">
                            <div class="card-body">
                                <span class="badge-sm">Strategy</span>
                                <h3 style="margin-top:12px;font-size:18px;font-weight:700">Data-Driven Decision Making: A
                                    Complete Guide
                                </h3>
                                <p style="font-size:14px;color:var(--muted);margin:8px 0">Learn how to leverage data
                                    analytics for
                                    better business outcomes and strategic planning.</p>
                                <div class="meta"><span><i class="fas fa-clock"></i> Mar 12, 2026</span><span
                                        class="text-link">Read
                                        More →</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section section-alt">
            <div class="container">
                <div class="cta-grid">
                    <div>
                        <div class="label"
                            style="font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:var(--primary);margin-bottom:12px">
                            Get Started</div>
                        <h2 style="font-size:clamp(24px,3vw,36px);font-weight:800;margin-bottom:20px">Ready to Make
                            Data-Driven
                            Decisions?</h2>
                        <p style="color:var(--muted);line-height:1.7;margin-bottom:32px;max-width:420px">Let our team of
                            expert
                            analysts help you navigate your industry landscape with comprehensive market intelligence.</p>
                        <a href="contact.html" class="text-link">View Contact Details →</a>
                    </div>
                    <form class="cta-form" onsubmit="return false">
                        <div class="row">
                            <div class="field"><input type="text" placeholder="Full Name"></div>
                            <div class="field"><input type="email" placeholder="Email Address"></div>
                        </div>
                        <div class="field"><input type="text" placeholder="Company Name"></div>
                        <div class="field">
                            <textarea rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn-primary"
                            style="width:100%;padding:14px;display:flex;align-items:center;justify-content:center;gap:8px"><i
                                class="fas fa-envelope"></i> Request Consultation</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
