@extends('layouts.main')
@section('content')
    <main>
        <section class="section fade-up" style="padding-top:120px;padding-bottom:48px;text-align:center">
            <div class="container" style="max-width:720px">
                <span class="badge-sm">About Evointels</span>
                <h1 style="font-size:clamp(32px,4vw,48px);font-weight:800;margin:20px 0 16px">Your Trusted Partner in Market
                    Intelligence</h1>
                <p style="color:var(--muted);font-size:17px;line-height:1.7">Empowering businesses with actionable insights,
                    industry trends, and data-driven strategies.</p>
            </div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="about-overview">
                    <div>
                        <div class="label"
                            style="font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:var(--primary);margin-bottom:12px">
                            Who We Are</div>
                        <h2 style="font-size:clamp(24px,3vw,36px);font-weight:800;margin-bottom:24px">Driving Decisions
                            Through Data</h2>
                        <p style="color:var(--muted);line-height:1.7;margin-bottom:16px">Founded with a mission to
                            democratize market intelligence, Evointels has grown into one of the most trusted names in
                            business research. We combine cutting-edge AI technology with deep human expertise.</p>
                        <p style="color:var(--muted);line-height:1.7;margin-bottom:24px">Our team of 850+ analysts spans 30
                            countries, providing locally-informed, globally-consistent intelligence to Fortune 500
                            companies, startups, investors, and government agencies alike.</p>
                        <div class="tags">
                            <span class="tag-pill">Market Research</span>
                            <span class="tag-pill">Data Analytics</span>
                            <span class="tag-pill">AI-Powered Insights</span>
                            <span class="tag-pill">Global Coverage</span>
                        </div>
                    </div>
                    <div class="analytics-card">
                        <div class="analytics-header">
                            <div>
                                <p style="color:var(--muted);font-size:12px;text-transform:uppercase;letter-spacing:1px">
                                    Research Output</p>
                                <p class="stat-value" style="margin-top:4px">150K+</p>
                            </div>
                            <span class="trend"><i class="fas fa-chart-line"></i> +32% YoY</span>
                        </div>
                        <div class="analytics-bars">
                            <div class="analytics-bar" style="height:35%"></div>
                            <div class="analytics-bar" style="height:50%"></div>
                            <div class="analytics-bar" style="height:40%"></div>
                            <div class="analytics-bar" style="height:65%"></div>
                            <div class="analytics-bar" style="height:55%"></div>
                            <div class="analytics-bar" style="height:80%"></div>
                            <div class="analytics-bar" style="height:60%"></div>
                            <div class="analytics-bar" style="height:90%"></div>
                            <div class="analytics-bar" style="height:70%"></div>
                            <div class="analytics-bar" style="height:95%"></div>
                            <div class="analytics-bar" style="height:85%"></div>
                            <div class="analytics-bar" style="height:100%"></div>
                        </div>
                        <div class="analytics-footer">
                            <div>
                                <p class="val">50+</p>
                                <p class="lbl">Industries</p>
                            </div>
                            <div>
                                <p class="val">100+</p>
                                <p class="lbl">Countries</p>
                            </div>
                            <div>
                                <p class="val">99.2%</p>
                                <p class="lbl">Accuracy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="stats-grid fade-up" style="margin-top:0">
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

        <section class="section section-alt fade-up">
            <div class="container">
                <div class="section-header">
                    <div class="label">What Drives Us</div>
                    <h2>Our Core Values</h2>
                </div>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="icon"><i class="fas fa-trophy"></i></div>
                        <h3>Excellence</h3>
                        <p>We maintain the highest standards of research quality, methodology, and analytical rigor.</p>
                    </div>
                    <div class="value-card">
                        <div class="icon"><i class="fas fa-bullseye"></i></div>
                        <h3>Client-Centric</h3>
                        <p>Your success is our priority. We tailor every project to your specific business context.</p>
                    </div>
                    <div class="value-card">
                        <div class="icon"><i class="fas fa-lightbulb"></i></div>
                        <h3>Innovation</h3>
                        <p>We continuously invest in AI, machine learning, and advanced analytics.</p>
                    </div>
                    <div class="value-card">
                        <div class="icon"><i class="fas fa-globe"></i></div>
                        <h3>Global Reach</h3>
                        <p>With analysts in 30+ countries, we provide locally-informed intelligence.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="section-header">
                    <div class="label">Leadership</div>
                    <h2>Our Expert Team</h2>
                </div>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="avatar">
                            <div class="circle">👤</div>
                        </div>
                        <div class="info">
                            <h3>Dr. Sarah Mitchell</h3>
                            <p class="role">Chief Research Officer</p>
                            <p class="bio">20+ years in market analytics and strategic consulting for Fortune 500
                                companies.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="avatar">
                            <div class="circle">👤</div>
                        </div>
                        <div class="info">
                            <h3>James Chen</h3>
                            <p class="role">Head of AI & Analytics</p>
                            <p class="bio">Former Google ML engineer, leading our AI-powered research platform.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="avatar">
                            <div class="circle">👤</div>
                        </div>
                        <div class="info">
                            <h3>Priya Sharma</h3>
                            <p class="role">Senior Industry Analyst</p>
                            <p class="bio">Deep domain expertise across healthcare, technology, and financial services.
                            </p>
                        </div>
                    </div>
                    <div class="team-card">
                        <div class="avatar">
                            <div class="circle">👤</div>
                        </div>
                        <div class="info">
                            <h3>Michael Torres</h3>
                            <p class="role">Director of Global Ops</p>
                            <p class="bio">Oversees research operations across 30+ countries with quality focus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-alt fade-up">
            <div class="container">
                <div class="section-header">
                    <div class="label">Worldwide Reach</div>
                    <h2>Global Coverage</h2>
                    <p>Serving clients across multiple countries and industries.</p>
                </div>
                <div class="regions-grid">
                    <div class="region-card">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3>North America</h3>
                        <p>USA, Canada, Mexico</p>
                    </div>
                    <div class="region-card">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3>Europe</h3>
                        <p>UK, Germany, France, +15</p>
                    </div>
                    <div class="region-card">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3>Asia Pacific</h3>
                        <p>India, China, Japan, Australia</p>
                    </div>
                    <div class="region-card">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3>Middle East & Africa</h3>
                        <p>UAE, Saudi Arabia, S. Africa</p>
                    </div>
                    <div class="region-card">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3>Latin America</h3>
                        <p>Brazil, Argentina, Colombia</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-up">
            <div class="container">
                <div class="cta-banner">
                    <h2>Ready to Make Smarter Decisions?</h2>
                    <p>Partner with Evointels for data-driven market intelligence that transforms how you understand your
                        industry.</p>
                    <a href="contact.html" class="btn-primary-lg">Get in Touch →</a>
                </div>
            </div>
        </section>
    </main>
@endsection
