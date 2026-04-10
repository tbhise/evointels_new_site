@extends('layouts.main')
@section('content')
    <main>
        <section class="page-hero">
            <span class="badge">Research Reports</span>
            <h1 id="reports-heading">Market Research Reports</h1>
            <p>Browse our comprehensive library of industry reports covering 50+ sectors with actionable insights and growth
                forecasts.</p>
            <div class="fade"></div>
        </section>
        <section class="section fade-up">
            <div class="container">
                <div class="reports-layout">
                    <aside class="reports-sidebar">
                        <div class="sidebar-box">
                            <h3>Industries</h3>
                            <nav aria-label="Industry categories" id="industry-nav">
                                <a href="{{ url('/reports') }}?industry=healthcare" data-industry="healthcare"
                                    class="active">Healthcare <span class="count">(12)</span></a>
                                <a href="{{ url('/reports') }}?industry=technology" data-industry="technology">Technology
                                    <span class="count">(15)</span></a>
                                <a href="{{ url('/reports') }}?industry=automotive" data-industry="automotive">Automotive
                                    <span class="count">(9)</span></a>
                                <a href="{{ url('/reports') }}?industry=energy" data-industry="energy">Energy <span
                                        class="count">(11)</span></a>
                                <a href="{{ url('/reports') }}?industry=bfsi" data-industry="bfsi">BFSI <span
                                        class="count">(8)</span></a>
                                <a href="{{ url('/reports') }}?industry=consumer-goods"
                                    data-industry="consumer-goods">Consumer Goods <span class="count">(7)</span></a>
                                <a href="{{ url('/reports') }}?industry=semiconductor"
                                    data-industry="semiconductor">Semiconductor <span class="count">(10)</span></a>
                                <a href="{{ url('/reports') }}?industry=aerospace" data-industry="aerospace">Aerospace <span
                                        class="count">(6)</span></a>
                                <a href="{{ url('/reports') }}?industry=chemicals" data-industry="chemicals">Chemicals <span
                                        class="count">(5)</span></a>
                            </nav>
                        </div>
                    </aside>
                    <div class="reports-main">
                        <p id="reports-count" style="font-size:14px;color:var(--muted);margin-bottom:24px">Showing reports
                        </p>
                        <div id="reports-container"></div>
                        <div id="pagination" class="pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
