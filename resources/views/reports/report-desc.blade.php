@extends('layouts.main')
@section('content')
    {{-- <main>
        <section class="section fade-up" style="padding-top:32px;padding-bottom:16px">
            <div class="breadcrumb" style="margin-bottom: 2rem;">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>›</li>
                        <li><a href="{{ url('/reports/' . $report_details->slug) }}">Reports</a></li>
                        <li>›</li>
                        <li><a href="{{ url('/reports/' . $report_details->slug) }}">{{ $report_details->industry_name }}</a>
                        </li>
                        <li>›</li>
                        <li class="current">{{ $report_details->report_name }} Market Analysis
                            {{ $report_details->base_year }}-{{ $report_details->forecast_year }}</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div style="display:flex;align-items:center;gap:8px;margin-bottom:12px;flex-wrap:wrap">
                    <span class="badge-sm">{{ $report_details->industry_name }}</span>
                    <span style="font-size:12px;color:var(--muted)"><i class="fas fa-calendar-alt"></i>
                        {{ date('M d Y', strtotime($report_details->created_at)) }}</span>
                    <span style="font-size:12px;color:var(--muted)">Report ID:
                        EVO-{{ $report_details->industry_initial }}-{{ date('Y', strtotime($report_details->created_at)) }}-{{ $report_details->id }}</span>
                </div>
                <h1 style="font-size:clamp(24px,3vw,36px);font-weight:800;margin-bottom:16px">
                    {{ $report_details->report_name }} Market Analysis
                    {{ $report_details->base_year }}-{{ $report_details->forecast_year }}</h1>
                <p style="color:var(--muted);line-height:1.7">{{ $report_details->summary }}</p>
            </div>
        </section>
        <section class="section fade-up" style="padding-top:16px">
            <div class="container">
                <div class="tabs" id="reportTabs">
                    <button class="tab active" onclick="switchTab(this,'desc')">Report Description</button>
                    <button class="tab" onclick="switchTab(this,'toc')">Table of Content</button>
                    <button class="tab" onclick="switchTab(this,'seg')">Segments</button>
                    <button class="tab" onclick="switchTab(this,'meth')">Methodology</button>
                </div>
            </div>
        </section>
        <section style="padding:0 0 64px">
            <div class="container">
                <div class="detail-layout">
                    <article class="detail-content">
                        <div class="tab-content">
                            <div class="tab-panel active" id="panel-desc">
                                <h2 style="font-size:20px;font-weight:700;margin-bottom:16px">Market Overview</h2>
                                <p style="color:var(--muted);line-height:1.7;margin-bottom:20px;font-size:14px">
                                    {{ $report_desc->market_analysis }}</p>

                                @if (!empty($report_desc->market_drivers))
                                    <h3 style="font-size:18px;font-weight:700;margin:24px 0 12px">Key Market Drivers</h3>
                                    <ul class="check-list">
                                        @foreach (json_decode($report_desc->market_drivers) as $key => $value)
                                            <li>{{ $value->text }}</li>

                                        @endforeach
                                    </ul>
                                @endif


                                <h3 style="font-size:18px;font-weight:700;margin:24px 0 12px">Regional Analysis</h3>
                                <p style="color:var(--muted);line-height:1.7;margin-bottom:20px">North America currently
                                    holds the
                                    largest market share. Asia-Pacific is projected to exhibit the fastest growth rate
                                    during the forecast
                                    period.</p>
                                <h3 style="font-size:18px;font-weight:700;margin:24px 0 12px">Competitive Landscape</h3>
                                <p style="color:var(--muted);line-height:1.7">The market features a mix of established
                                    corporations and
                                    agile startups competing on technology differentiation, pricing strategies, and
                                    geographic expansion.
                                </p>
                            </div>
                            <div class="tab-panel" id="panel-toc">
                                <h2 style="font-size:20px;font-weight:700;margin-bottom:16px">Table of Contents</h2>
                                <ol style="list-style:decimal;padding-left:20px;font-size:14px;color:var(--muted)">
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Executive Summary</li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Market Introduction &
                                        Definition
                                    </li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Research Methodology
                                    </li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Market Dynamics</li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Market Segmentation by
                                        Type</li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Market Segmentation by
                                        Application
                                    </li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Regional Analysis —
                                        North America
                                    </li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Regional Analysis —
                                        Europe</li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Regional Analysis —
                                        Asia-Pacific
                                    </li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Competitive Landscape
                                        & Company
                                        Profiles</li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Strategic
                                        Recommendations</li>
                                    <li style="padding:8px 0;border-bottom:1px solid rgba(0,0,0,.05)">Appendix & Data
                                        Sources</li>
                                </ol>
                            </div>
                            <div class="tab-panel" id="panel-seg">
                                <h2 style="font-size:20px;font-weight:700;margin-bottom:16px">Market Segments</h2>
                                <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px">
                                    <div style="background:var(--accent-bg);border-radius:8px;padding:16px">
                                        <h3 style="font-size:14px;font-weight:700;margin-bottom:8px">By Type</h3>
                                        <ul style="list-style:none;font-size:14px;color:var(--muted)">
                                            <li>• Hardware Components</li>
                                            <li>• Software Solutions</li>
                                            <li>• Integrated Systems</li>
                                            <li>• Services & Support</li>
                                        </ul>
                                    </div>
                                    <div style="background:var(--accent-bg);border-radius:8px;padding:16px">
                                        <h3 style="font-size:14px;font-weight:700;margin-bottom:8px">By Application</h3>
                                        <ul style="list-style:none;font-size:14px;color:var(--muted)">
                                            <li>• Commercial</li>
                                            <li>• Industrial</li>
                                            <li>• Government & Defense</li>
                                            <li>• Consumer</li>
                                        </ul>
                                    </div>
                                    <div style="background:var(--accent-bg);border-radius:8px;padding:16px">
                                        <h3 style="font-size:14px;font-weight:700;margin-bottom:8px">By End-User</h3>
                                        <ul style="list-style:none;font-size:14px;color:var(--muted)">
                                            <li>• Large Enterprises</li>
                                            <li>• SMBs</li>
                                            <li>• Research Institutions</li>
                                            <li>• Individual Consumers</li>
                                        </ul>
                                    </div>
                                    <div style="background:var(--accent-bg);border-radius:8px;padding:16px">
                                        <h3 style="font-size:14px;font-weight:700;margin-bottom:8px">By Region</h3>
                                        <ul style="list-style:none;font-size:14px;color:var(--muted)">
                                            <li>• North America</li>
                                            <li>• Europe</li>
                                            <li>• Asia-Pacific</li>
                                            <li>• Rest of World</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-panel" id="panel-meth">
                                <h2 style="font-size:20px;font-weight:700;margin-bottom:16px">Research Methodology</h2>
                                <p style="color:var(--muted);line-height:1.7;margin-bottom:16px">Evointels employs a
                                    rigorous
                                    multi-phase research methodology combining primary and secondary data collection,
                                    advanced statistical
                                    modeling, and expert validation.</p>
                                <h3 style="font-size:16px;font-weight:700;margin:20px 0 8px">Primary Research</h3>
                                <p style="color:var(--muted);line-height:1.7;margin-bottom:16px">Direct interviews with
                                    industry
                                    executives conducted via structured questionnaires covering 150–200 respondents across
                                    key
                                    geographies.</p>
                                <h3 style="font-size:16px;font-weight:700;margin:20px 0 8px">Secondary Research</h3>
                                <p style="color:var(--muted);line-height:1.7;margin-bottom:16px">Comprehensive review of
                                    company annual
                                    reports, regulatory filings, patent databases, and proprietary databases.</p>
                                <h3 style="font-size:16px;font-weight:700;margin:20px 0 8px">Data Triangulation</h3>
                                <p style="color:var(--muted);line-height:1.7">All data points are cross-verified through
                                    multiple
                                    independent sources using bottom-up and top-down estimation approaches.</p>
                            </div>
                        </div>
                    </article>
                    <aside class="detail-sidebar">
                        <div class="detail-info">
                            <h3
                                style="font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:16px">
                                Report Details</h3>
                            <dl>
                                <div>
                                    <dt>Publish Date</dt>
                                    <dd>Mar 15, 2026</dd>
                                </div>
                                <div>
                                    <dt>Report ID</dt>
                                    <dd>EVO-HC-2026-001</dd>
                                </div>
                                <div>
                                    <dt>Pages</dt>
                                    <dd>285 Pages</dd>
                                </div>
                                <div>
                                    <dt>Format</dt>
                                    <dd>PDF + Excel</dd>
                                </div>
                                <div>
                                    <dt>Rating</dt>
                                    <dd><span class="stars">★★★★</span>☆ (47)</dd>
                                </div>
                            </dl>
                        </div>
                        <div>
                            <h3
                                style="font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:16px">
                                Select License</h3>
                            <button class="license-option selected" onclick="selectLicense(this)">
                                <div>
                                    <h4>Single User</h4>
                                    <p class="desc">For individual use only</p>
                                </div><span class="price">$3,499</span>
                            </button>
                            <button class="license-option" onclick="selectLicense(this)">
                                <div>
                                    <h4>Multi User</h4>
                                    <p class="desc">Up to 5 users in your team</p>
                                </div><span class="price">$5,299</span>
                            </button>
                            <button class="license-option" onclick="selectLicense(this)">
                                <div>
                                    <h4>Corporate License</h4>
                                    <p class="desc">Unlimited users, enterprise-wide</p>
                                </div><span class="price">$7,499</span>
                            </button>
                            <button class="btn-primary"
                                style="width:100%;padding:12px;margin-top:16px;display:flex;align-items:center;justify-content:center;gap:8px"><i
                                    class="fas fa-shopping-cart"></i> Buy Report</button>
                            <button class="btn-outline"
                                style="width:100%;padding:12px;margin-top:8px;display:flex;align-items:center;justify-content:center;gap:8px">📥
                                Request Sample</button>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

    </main> --}}



 <!-- Sticky Top Bar (appears on scroll) -->
  <div class="rd-stickybar" id="rdStickyBar" aria-hidden="true">
    <div class="container">
      <div class="title">Global Biotechnology Market Outlook</div>
      <div class="mini-stats">
        <span>Market Size <b>$3.5B</b></span>
        <span>CAGR <b style="color:var(--primary-dark)">+14.2%</b></span>
        <span>Forecast <b>$5.8B</b></span>
      </div>
      <div class="actions">
        <button class="btn-outline"><i class="fas fa-download"></i> Sample</button>
        <a href="contact.html" class="btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</a>
      </div>
    </div>
  </div>

  <main>
    <!-- HERO -->
    <section class="rd-hero" aria-labelledby="rd-title">
      <div class="container">
        <nav class="rd-breadcrumb" aria-label="Breadcrumb">
          <a href="index.html">Home</a><i class="fas fa-chevron-right"></i>
          <a href="reports.html">Reports</a><i class="fas fa-chevron-right"></i>
          <a href="reports.html?industry=healthcare">Healthcare</a><i class="fas fa-chevron-right"></i>
          <span>Global Biotechnology Market Outlook</span>
        </nav>
        <div class="rd-hero-grid">
          <div>
            <span class="rd-pill"><i class="fas fa-microscope"></i> Biotechnology · Healthcare</span>
            <h1 id="rd-title" class="rd-h1">Global Biotechnology Market Outlook | Market Size, Share &amp; Growth Analysis</h1>
            <p class="rd-desc">This report provides detailed insights into the global biotechnology market outlook including market size, key players, and future trends shaping the industry from 2024 through 2030.</p>
            <div class="rd-badges">
              <span class="rd-badge"><i class="far fa-calendar"></i> Base Year: 2024</span>
              <span class="rd-badge"><i class="fas fa-globe"></i> 5 Regions</span>
              <span class="rd-badge"><i class="fas fa-chart-line"></i> Forecast: 2024–2030</span>
              <span class="rd-badge"><i class="far fa-file-lines"></i> 280 Pages</span>
            </div>
            <div class="rd-stats">
              <div class="rd-stat"><div class="lbl">Market Size</div><div class="val">$3.5B</div></div>
              <div class="rd-stat"><div class="lbl">CAGR</div><div class="val up">+14.2%</div></div>
              <div class="rd-stat"><div class="lbl">Forecast Value</div><div class="val">$5.8B</div></div>
            </div>
            <div class="rd-cta">
              <a href="contact.html" class="rd-btn-white"><i class="fas fa-shopping-cart"></i> Buy Full Report</a>
              <a href="contact.html" class="rd-btn-ghost"><i class="fas fa-download"></i> Download Sample</a>
              <a href="contact.html" class="rd-btn-ghost"><i class="far fa-comment-dots"></i> Talk to Analyst</a>
            </div>
          </div>
          <aside class="rd-preview" aria-label="Report preview">
            <div class="cover">
              <div>
                <div class="tag">Evointels Research</div>
                <h3>Global Biotechnology Market Outlook</h3>
              </div>
              <div>
                <div class="yr">2024</div>
                <div class="tag">280 Pages · 5 Regions</div>
              </div>
            </div>
            <div class="rd-price">
              <div><span class="now">$4,250</span><span class="was">$5,500</span></div>
              <span class="save">Save 22%</span>
            </div>
            <div class="rd-preview-cta">
              <a href="contact.html" class="btn-primary" style="text-align:center"><i class="fas fa-shopping-cart"></i> Buy Now</a>
              <a href="contact.html" class="btn-outline" style="text-align:center"><i class="fas fa-file-pdf"></i> Free Sample</a>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- MAIN -->
    <section class="rd-main">
      <div class="container">

        <!-- Mobile sidebar toggle -->
        <div class="rd-sidebar-mobile" id="rdMobileNav">
          <button type="button" id="rdMobileNavToggle">
            <span><i class="fas fa-list"></i> Report Sections</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <nav class="rd-sidebar" aria-label="Report sections (mobile)">
            <div class="heading">On this page</div>
            <a href="#sec-size" class="rd-nav-link"><i class="fas fa-chart-pie"></i> Market Size & Share</a>
            <a href="#sec-analysis" class="rd-nav-link"><i class="fas fa-chart-bar"></i> Market Analysis</a>
            <a href="#sec-trends" class="rd-nav-link"><i class="fas fa-bolt"></i> Trends & Insights</a>
            <a href="#sec-segments" class="rd-nav-link"><i class="fas fa-layer-group"></i> Segment Analysis</a>
            <a href="#sec-geo" class="rd-nav-link"><i class="fas fa-globe"></i> Geography Analysis</a>
            <a href="#sec-comp" class="rd-nav-link"><i class="fas fa-users-gear"></i> Competitive Landscape</a>
            <a href="#sec-players" class="rd-nav-link"><i class="fas fa-building"></i> Major Players</a>
            <a href="#sec-dev" class="rd-nav-link"><i class="fas fa-newspaper"></i> Industry Developments</a>
            <a href="#sec-toc" class="rd-nav-link"><i class="fas fa-list-ol"></i> Table of Contents</a>
            <a href="#sec-scope" class="rd-nav-link"><i class="fas fa-clipboard-list"></i> Scope of Report</a>
            <a href="#sec-faq" class="rd-nav-link"><i class="far fa-circle-question"></i> FAQs</a>
          </nav>
        </div>

        <div class="rd-layout">
          <!-- Sidebar -->
          <aside class="rd-sidebar" id="rdSidebar" aria-label="Report sections">
            <div class="heading">On this page</div>
            <a href="#sec-size" class="rd-nav-link"><i class="fas fa-chart-pie"></i> Market Size &amp; Share</a>
            <a href="#sec-analysis" class="rd-nav-link"><i class="fas fa-chart-bar"></i> Market Analysis</a>
            <a href="#sec-trends" class="rd-nav-link"><i class="fas fa-bolt"></i> Trends &amp; Insights</a>
            <a href="#sec-segments" class="rd-nav-link"><i class="fas fa-layer-group"></i> Segment Analysis</a>
            <a href="#sec-geo" class="rd-nav-link"><i class="fas fa-globe"></i> Geography Analysis</a>
            <a href="#sec-comp" class="rd-nav-link"><i class="fas fa-users-gear"></i> Competitive Landscape</a>
            <a href="#sec-players" class="rd-nav-link"><i class="fas fa-building"></i> Major Players</a>
            <a href="#sec-dev" class="rd-nav-link"><i class="fas fa-newspaper"></i> Industry Developments</a>
            <a href="#sec-toc" class="rd-nav-link"><i class="fas fa-list-ol"></i> Table of Contents</a>
            <a href="#sec-scope" class="rd-nav-link"><i class="fas fa-clipboard-list"></i> Scope of Report</a>
            <a href="#sec-faq" class="rd-nav-link"><i class="far fa-circle-question"></i> FAQs</a>
          </aside>

          <!-- Content -->
          <div class="rd-content">

            <article class="rd-section" id="sec-size">
              <h2><span class="ico"><i class="fas fa-chart-pie"></i></span> Market Size &amp; Share</h2>
              <p class="lead">The global biotechnology market reached <b>$3.5 billion</b> in 2024 and is projected to expand at a <b>14.2% CAGR</b> to reach <b>$5.8 billion</b> by 2030, driven by rapid innovation across therapeutics, diagnostics, and bio-manufacturing.</p>
              <div class="rd-tiles">
                <div class="rd-tile"><div class="lbl">Market Size (2024)</div><div class="val">$3.5B</div></div>
                <div class="rd-tile"><div class="lbl">CAGR (2024–2030)</div><div class="val">+14.2%</div></div>
                <div class="rd-tile"><div class="lbl">Forecast Value (2030)</div><div class="val">$5.8B</div></div>
              </div>
            </article>

            <article class="rd-section" id="sec-analysis">
              <h2><span class="ico"><i class="fas fa-chart-bar"></i></span> Market Analysis</h2>
              <p>Biotechnology continues to evolve as a cornerstone of modern healthcare and industrial innovation. Demand is being propelled by an aging global population, the rise of precision medicine, and accelerated adoption of bioprocessing technologies across pharmaceuticals, agriculture, and industrial applications.</p>
              <h3>Key Findings</h3>
              <ul class="rd-list">
                <li><i class="fas fa-circle-check"></i> Strong growth expected during the forecast period across all major sub-segments</li>
                <li><i class="fas fa-circle-check"></i> Technology innovation creating new opportunities in cell &amp; gene therapy</li>
                <li><i class="fas fa-circle-check"></i> Regional expansion into Asia Pacific driving meaningful incremental growth</li>
                <li><i class="fas fa-circle-check"></i> Strategic partnerships and licensing deals between biotech and pharma increasing</li>
              </ul>
            </article>

            <article class="rd-section" id="sec-trends">
              <h2><span class="ico"><i class="fas fa-bolt"></i></span> Trends &amp; Insights</h2>
              <p class="lead">The competitive environment is being reshaped by three structural forces — drivers, challenges, and emerging opportunities.</p>
              <div class="rd-cards-3">
                <div class="rd-mini green">
                  <div class="icn"><i class="fas fa-arrow-trend-up"></i></div>
                  <h4>Market Drivers</h4>
                  <ul>
                    <li>Growing demand across industries</li>
                    <li>Technological advancements</li>
                    <li>Increasing R&amp;D investments</li>
                  </ul>
                </div>
                <div class="rd-mini amber">
                  <div class="icn"><i class="fas fa-triangle-exclamation"></i></div>
                  <h4>Market Challenges</h4>
                  <ul>
                    <li>High competition</li>
                    <li>Regulatory complexity</li>
                    <li>Supply chain issues</li>
                  </ul>
                </div>
                <div class="rd-mini blue">
                  <div class="icn"><i class="fas fa-lightbulb"></i></div>
                  <h4>Opportunities</h4>
                  <ul>
                    <li>Emerging markets</li>
                    <li>Product innovation</li>
                    <li>Strategic partnerships</li>
                  </ul>
                </div>
              </div>
            </article>

            <article class="rd-section" id="sec-segments">
              <h2><span class="ico"><i class="fas fa-layer-group"></i></span> Segment Analysis</h2>
              <p class="lead">The market is segmented across technology, application, and end-user. Click each segment to explore detail.</p>
              <div class="rd-acc">
                <div class="rd-acc-item open">
                  <button type="button" class="rd-acc-trigger">By Technology — DNA Sequencing, Cell Culture, Fermentation <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">DNA sequencing leads with the largest revenue contribution, followed by cell culture and fermentation. Next-generation sequencing platforms are reducing per-genome costs and unlocking population-scale genomics programs.</div>
                </div>
                <div class="rd-acc-item">
                  <button type="button" class="rd-acc-trigger">By Application — Health, Food &amp; Agriculture, Industrial <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">Health applications dominate revenue share with drug discovery, gene therapy, and diagnostics. Agricultural biotech is the fastest-growing segment driven by climate-resilient crops.</div>
                </div>
                <div class="rd-acc-item">
                  <button type="button" class="rd-acc-trigger">By End User — Biopharma, CROs, Academic Institutes <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">Biopharma companies remain the largest end users; CRO outsourcing is rising as companies prioritize capital efficiency and faster trial timelines.</div>
                </div>
              </div>
            </article>

            <article class="rd-section" id="sec-geo">
              <h2><span class="ico"><i class="fas fa-globe"></i></span> Geography Analysis</h2>
              <p class="lead">Regional contribution to the global biotechnology market in 2024.</p>
              <div class="rd-geo">
                <div class="rd-geo-row"><div class="top"><span>North America</span><span>35%</span></div><div class="rd-bar"><span style="width:35%"></span></div></div>
                <div class="rd-geo-row"><div class="top"><span>Europe</span><span>28%</span></div><div class="rd-bar"><span style="width:28%"></span></div></div>
                <div class="rd-geo-row"><div class="top"><span>Asia Pacific</span><span>22%</span></div><div class="rd-bar"><span style="width:22%"></span></div></div>
                <div class="rd-geo-row"><div class="top"><span>Latin America</span><span>10%</span></div><div class="rd-bar"><span style="width:10%"></span></div></div>
                <div class="rd-geo-row"><div class="top"><span>Middle East &amp; Africa</span><span>5%</span></div><div class="rd-bar"><span style="width:5%"></span></div></div>
              </div>
            </article>

            <article class="rd-section" id="sec-comp">
              <h2><span class="ico"><i class="fas fa-users-gear"></i></span> Competitive Landscape</h2>
              <p>The competitive landscape is moderately consolidated with the top four players accounting for nearly 45% of global revenue. Companies are competing on therapeutic pipeline depth, manufacturing scale, geographic footprint, and licensing partnerships. Recent activity emphasizes M&amp;A, in-licensing of late-stage assets, and capacity expansion in Asia Pacific.</p>
              <div class="rd-grid-2">
                <ul class="rd-list">
                  <li><i class="fas fa-circle-check"></i> Top 4 players hold ~45% market share</li>
                  <li><i class="fas fa-circle-check"></i> Pipeline depth as primary differentiator</li>
                </ul>
                <ul class="rd-list">
                  <li><i class="fas fa-circle-check"></i> Increasing M&amp;A and in-licensing activity</li>
                  <li><i class="fas fa-circle-check"></i> APAC capacity expansion accelerating</li>
                </ul>
              </div>
            </article>

            <article class="rd-section" id="sec-players">
              <h2><span class="ico"><i class="fas fa-building"></i></span> Major Players</h2>
              <p class="lead">Leading companies profiled in this report:</p>
              <div class="rd-players">
                <div class="rd-player"><div class="av">P</div><div class="nm">Pfizer</div><div class="role">Biopharmaceuticals</div></div>
                <div class="rd-player"><div class="av">R</div><div class="nm">Roche</div><div class="role">Diagnostics &amp; Therapeutics</div></div>
                <div class="rd-player"><div class="av">N</div><div class="nm">Novartis</div><div class="role">Innovative Medicines</div></div>
                <div class="rd-player"><div class="av">J</div><div class="nm">Johnson &amp; Johnson</div><div class="role">Pharma &amp; MedTech</div></div>
              </div>
            </article>

            <article class="rd-section" id="sec-dev">
              <h2><span class="ico"><i class="fas fa-newspaper"></i></span> Industry Developments</h2>
              <p class="lead">Recent strategic and regulatory milestones across 2024.</p>
              <div class="rd-timeline">
                <div class="rd-tl-item"><div class="q">Q1 2024</div><div class="t">Regulatory approval for next-generation gene therapy platform</div></div>
                <div class="rd-tl-item"><div class="q">Q2 2024</div><div class="t">Strategic partnership announced between leading biotech and global pharma</div></div>
                <div class="rd-tl-item"><div class="q">Q3 2024</div><div class="t">New product launch — first-in-class oncology biologic</div></div>
                <div class="rd-tl-item"><div class="q">Q4 2024</div><div class="t">Major acquisition reshaping the cell &amp; gene therapy landscape</div></div>
              </div>
            </article>

            <article class="rd-section" id="sec-toc">
              <h2><span class="ico"><i class="fas fa-list-ol"></i></span> Table of Contents</h2>
              <div class="rd-toc">
                <a href="#sec-size">1. Executive Summary <span>12 pages</span></a>
                <a href="#sec-analysis">2. Market Introduction &amp; Methodology <span>18 pages</span></a>
                <a href="#sec-trends">3. Market Dynamics — Drivers, Restraints, Opportunities <span>32 pages</span></a>
                <a href="#sec-segments">4. Segment Analysis — Technology, Application, End User <span>56 pages</span></a>
                <a href="#sec-geo">5. Regional Analysis — 5 Regions <span>72 pages</span></a>
                <a href="#sec-comp">6. Competitive Landscape <span>40 pages</span></a>
                <a href="#sec-players">7. Company Profiles <span>38 pages</span></a>
                <a href="#sec-dev">8. Industry Developments &amp; Outlook <span>12 pages</span></a>
              </div>
            </article>

            <article class="rd-section" id="sec-scope">
              <h2><span class="ico"><i class="fas fa-clipboard-list"></i></span> Scope of Report</h2>
              <div class="rd-scope">
                <div class="rd-scope-card">
                  <div class="sc-head"><i class="far fa-calendar"></i> Study Period</div>
                  <div class="sc-val">2024 – 2030 (Base Year: 2024)</div>
                </div>
                <div class="rd-scope-card">
                  <div class="sc-head"><i class="fas fa-globe"></i> Geography</div>
                  <div class="sc-val">North America, Europe, Asia Pacific, Latin America, MEA</div>
                </div>
                <div class="rd-scope-card">
                  <div class="sc-head"><i class="fas fa-building"></i> Companies Covered</div>
                  <div class="sc-val">Pfizer, Roche, Novartis, Johnson &amp; Johnson + 20 more</div>
                </div>
                <div class="rd-scope-card">
                  <div class="sc-head"><i class="fas fa-dollar-sign"></i> Market Size (2024)</div>
                  <div class="sc-val">$3.5 Billion</div>
                </div>
                <div class="rd-scope-card">
                  <div class="sc-head"><i class="fas fa-chart-line"></i> Forecast (2030)</div>
                  <div class="sc-val">$5.8 Billion · CAGR 14.2%</div>
                </div>
                <div class="rd-scope-card">
                  <div class="sc-head"><i class="fas fa-database"></i> Data Sources</div>
                  <div class="sc-val">Primary interviews, regulatory filings, proprietary models · 280 Pages · PDF + Excel</div>
                </div>
              </div>
            </article>

            <article class="rd-section" id="sec-faq">
              <h2><span class="ico"><i class="far fa-circle-question"></i></span> Frequently Asked Questions</h2>
              <div class="rd-acc">
                <div class="rd-acc-item open">
                  <button type="button" class="rd-acc-trigger">What is the market growth rate? <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">The global biotechnology market is projected to grow at a CAGR of <b>14.2%</b> from 2024 through 2030.</div>
                </div>
                <div class="rd-acc-item">
                  <button type="button" class="rd-acc-trigger">How many pages does the report contain? <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">The full report contains <b>280 pages</b> covering market sizing, segmentation, regional analysis, and company profiles.</div>
                </div>
                <div class="rd-acc-item">
                  <button type="button" class="rd-acc-trigger">Which regions are covered? <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">The report covers 5 regions: North America, Europe, Asia Pacific, Latin America, and Middle East &amp; Africa.</div>
                </div>
                <div class="rd-acc-item">
                  <button type="button" class="rd-acc-trigger">What is included with the purchase? <i class="fas fa-chevron-down"></i></button>
                  <div class="rd-acc-body">A PDF report, an Excel data pack, and a complimentary 30-minute analyst briefing.</div>
                </div>
              </div>
            </article>

            <section class="rd-cta-final" aria-label="Get the report">
              <h2><span class="ico" style="background:rgba(255,255,255,.18);color:#fff"><i class="fas fa-rocket"></i></span> Ready to Unlock Full Insights?</h2>
              <p>Get the complete 280-page report with detailed segmentation, regional deep-dives, and company profiles — plus a complimentary analyst briefing.</p>
              <div class="group">
                <a href="contact.html" class="rd-btn-white"><i class="fas fa-shopping-cart"></i> Buy Full Report</a>
                <a href="contact.html" class="rd-btn-ghost"><i class="fas fa-download"></i> Download Sample</a>
                <a href="contact.html" class="rd-btn-ghost"><i class="far fa-comment-dots"></i> Talk to Analyst</a>
              </div>
            </section>

          </div>
        </div>
      </div>
    </section>
  </main>









@endsection
@section('scripts')
    <script src="{{ asset('assets/js/report_desc.js') }}"></script>
@endsection
