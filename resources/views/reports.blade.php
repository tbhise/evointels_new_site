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
                                @foreach ($industries as $industry)
                                    <a href="{{ url('/reports') }}/{{ $industry->slug }}"
                                        class="{{ request()->is('reports/' . $industry->slug) ? 'active' : '' }}"
                                        data-industry="{{ $industry->id }}"
                                        data-slug="{{ $industry->slug }}">{{ $industry->name }}
                                        <span class="count">(0)</span></a>
                                @endforeach
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

@section('scripts')
    <script src="{{ asset('assets/js/reports.js') }}"></script>
@endsection
