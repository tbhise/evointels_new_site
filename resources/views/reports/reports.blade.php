@extends('layouts.main')
@section('content')
    <main>
        <!-- HERO SECTION -->
        <section class="rp-hero">
            <div class="rp-hero-bg"></div>
            <div class="container rp-hero-inner">
                <span class="rp-hero-pill" id="heroPill1">{{ $industry_info->name }}</span>
                <h1 id="heroTitle1">{{ $industry_info->name }} Market Research</h1>
                <p id="heroDesc1">Explore our comprehensive collection of {{ strtolower($industry_info->name) }} industry
                    reports featuring market sizing, competitive analysis, and growth projections.</p>
            </div>
            <div class="rp-hero-fade"></div>
        </section>

        <!-- STATS CARDS -->
        <section class="rp-stats">
            <div class="container">
                <div class="rp-stats-grid" id="statsGrid">
                    <div class="rp-stat-card">
                        <div class="rp-stat-icon"><i class="fas fa-chart-line" aria-hidden="true"></i></div>
                        <div class="rp-stat-value" id="statMarketSize1">{{ $industry_info->market_size }}</div>
                        <div class="rp-stat-label">Market Size (2026)</div>
                    </div>
                    <div class="rp-stat-card">
                        <div class="rp-stat-icon"><i class="fas fa-arrow-trend-up" aria-hidden="true"></i></div>
                        <div class="rp-stat-value" id="statCAGR1">{{ $industry_info->growth_rate }}</div>
                        <div class="rp-stat-label">CAGR</div>
                    </div>
                    <div class="rp-stat-card">
                        <div class="rp-stat-icon"><i class="fas fa-building" aria-hidden="true"></i></div>
                        <div class="rp-stat-value" id="statPlayers1">
                            @php
                                $playersArray = explode(',', $industry_info->top_players);
                                $playerCount = count($playersArray);
                            @endphp

                            {{ $playerCount }}+

                        </div>
                        <div class="rp-stat-label">Key Players Tracked</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LEADING PLAYERS -->
        <section class="rp-players">
            <div class="container">
                <h2>Leading Market Players</h2>
                <div class="rp-players-wrap" id="playersWrap1">
                    @foreach ($playersArray as $key => $val)
                        <span class="rp-player-pill">{{ trim($val) }}</span>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- MAIN CONTENT -->
        <section class="rp-main">
            <div class="container">
                <div class="rp-grid">

                    <!-- MOBILE FILTER TOGGLE -->
                    <button class="rp-mobile-filter-btn" id="mobileFilterBtn" aria-label="Open industry filter">
                        <i class="fas fa-filter"></i> Filter by Industry
                    </button>

                    <!-- LEFT SIDEBAR -->
                    <aside class="rp-sidebar" id="rpSidebar">
                        <div class="rp-sidebar-header-mobile">
                            <h3>Industries</h3>
                            <button class="rp-sidebar-close" id="sidebarClose" aria-label="Close filter"><i
                                    class="fas fa-times"></i></button>
                        </div>
                        <div class="rp-sidebar-inner">
                            <div class="rp-sidebar-search">
                                <i class="fas fa-search" aria-hidden="true"></i>
                                <input type="text" id="industrySearch" placeholder="Search industries..."
                                    aria-label="Search industries">
                            </div>
                            <nav aria-label="Industry categories" id="industrySidebarNav">
                                @foreach ($industries as $industry)
                                    <a href="{{ url('/reports') }}/{{ $industry->slug }}"
                                        class="rp-nav-item {{ request()->is('reports/' . $industry->slug) ? 'rp-nav-active' : '' }}"
                                        data-industry="{{ $industry->id }}"
                                        data-slug="{{ $industry->slug }}">{{ $industry->name }}
                                    </a>
                                @endforeach
                            </nav>
                        </div>
                    </aside>
                    <div class="rp-sidebar-overlay" id="sidebarOverlay"></div>

                    <!-- RIGHT CONTENT -->
                    <div class="rp-content">
                        <div class="rp-content-header">
                            <div>
                                <h2 id="contentTitle1">{{ $industry_info->name }} Reports</h2>
                            </div>
                        </div>
                        <div class="rp-search-bar">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input type="text" id="reportSearch" placeholder="Search reports..."
                                aria-label="Search reports">
                        </div>
                        <div id="reports-container"></div>
                        {{-- <nav id="reportsPagination" class="pagination" aria-label="Report pagination"></nav> --}}
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/reports-page.js') }}"></script>
    <script src="{{ asset('assets/js/reports.js') }}"></script>
@endsection
