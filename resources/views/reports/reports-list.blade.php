@forelse ($reports as $report)
    <article class="rp-report-card">

        <div class="rp-report-body">
            <!-- Tags -->
            <div class="rp-report-tags">
                <span class="rp-tag-industry">
                    {{ $report->industry_name }}
                </span>
                {{-- <span class="rp-tag-industry">
                    {{ $report->sub_i_name }}
                </span> --}}
                <span class="rp-tag-cagr">
                    <i class="fas fa-arrow-trend-up"></i>
                    {{ $report->growth_rate }} CAGR
                </span>
            </div>
            <!-- Title -->
            <h3>
                <a href="{{ url($report->slug) }}">
                    {{ $report->name }} Market Analysis
                </a>
            </h3>
            <!-- Description -->
            {{-- <p class="rp-report-desc">
                {{ $report->summary }}
            </p> --}}
            <!-- Meta -->
            <div class="rp-report-meta">

                <span class="rp-tag-md">
                    <i class="fas fa-dollar-sign"></i> Market Size : <span
                        class="fw-semibold">{{ $report->base_year_value }}</span>
                </span>
                <span class="rp-tag-md">
                    <i class="fas fa-chart-line"></i> Forecast Size : <span
                        class="fw-semibold">{{ $report->forecast_year_value }}</span>
                </span>
                <span class="rp-tag-md">
                    <i class="fa fa-calendar"></i> Forecast : <span class="fw-semibold">{{ $report->base_year }} -
                        {{ $report->forecast_year }}</span>
                </span>

            </div>
            <!-- Details -->
            <div class="rp-report-details">
                <div class="rp-detail-row">
                    <i class="fas fa-globe" aria-hidden="true"></i>
                    Regions Covered : <span>-</span>
                </div>
                <div class="rp-detail-row">
                    <i class="fas fa-building" aria-hidden="true"></i>
                    Major Players : <span>-</span>
                </div>
                <div class="rp-detail-row">
                    <i class="fas fa-clock" aria-hidden="true"></i>
                    Published : <span>{{ \Carbon\Carbon::parse($report->created_at)->format('M, Y') }}</span>
                </div>
            </div>


            <!-- Footer -->
            <div class="rp-report-footer">
                <span class="rp-report-price">
                    $3499
                </span>
                <div class="rp-report-actions">
                    <a href="{{ url($report->slug) }}" class="btn-primary rp-btn">
                        <i class="fas fa-shopping-cart"></i> Buy Now
                    </a>
                    <a href="{{ url($report->slug) }}" class="rp-read-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </article>
@empty
    <p>No reports found for this industry.</p>
@endforelse
@if ($reports->lastPage() > 1)
    <div id="pagination" class="custom-pagination">
        @php
            $current = $reports->currentPage();
            $last = $reports->lastPage();
            $start = max(2, $current - 1);
            $end = min($last - 1, $current + 1);
        @endphp
        {{-- Previous --}}
        <button class="page-link" data-page="{{ $current - 1 }}" {{ $reports->onFirstPage() ? 'disabled' : '' }}>
            ← Previous
        </button>
        {{-- First Page --}}
        <button class="page-link {{ $current == 1 ? 'active' : '' }}" data-page="1">
            1
        </button>
        {{-- Left Dots --}}
        @if ($start > 2)
            <span class="dots">...</span>
        @endif
        {{-- Middle Pages --}}
        @for ($p = $start; $p <= $end; $p++)
            <button class="page-link {{ $p == $current ? 'active' : '' }}" data-page="{{ $p }}">
                {{ $p }}
            </button>
        @endfor
        {{-- Right Dots --}}
        @if ($end < $last - 1)
            <span class="dots">...</span>
        @endif
        {{-- Last Page --}}
        @if ($last > 1)
            <button class="page-link {{ $current == $last ? 'active' : '' }}" data-page="{{ $last }}">
                {{ $last }}
            </button>
        @endif
        {{-- Next --}}
        <button class="page-link" data-page="{{ $current + 1 }}" {{ !$reports->hasMorePages() ? 'disabled' : '' }}>
            Next →
        </button>
    </div>
@endif
