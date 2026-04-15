@extends('layouts.main')
@section('content')
    <main>
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
                                        @foreach (json_decode($report_desc->market_drivers) as $key=>$value)
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
       
    </main>
@endsection
