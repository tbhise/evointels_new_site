@foreach ($reports as $report)
    <article class="report-list-card">

        <div class="thumb">
            <i class="fas fa-file-alt" style="font-size:48px"></i>
        </div>

        <div class="content">

            <div class="top">
                <span class="badge-sm">
                    {{ $report->industry_name }}
                </span>

                <span style="font-size:12px;color:var(--muted)">
                    <i class="fas fa-calendar-alt"></i>
                    {{ \Carbon\Carbon::parse($report->created_at)->format('M d, Y') }}
                </span>
            </div>

            <h3>
                <a href="{{ url('report/' . $report->slug) }}">
                    {{ $report->name }}
                </a>
            </h3>

            <p class="desc">
                {{ $report->summary }}
            </p>

            <div class="meta" style="font-size:13px;color:var(--muted); margin-bottom:8px;">
                Base Year: {{ $report->base_year }} |
                Forecast: {{ $report->forecast_year }}
            </div>

            <div class="bottom">

                <span class="price">
                    {{-- Replace with actual price column if exists --}}
                    $3,499
                </span>

                <a href="{{ url('report/' . $report->slug) }}" class="btn-primary"
                    style="font-size:13px;padding:6px 16px">
                    <i class="fas fa-shopping-cart"></i> Buy Now
                </a>

                <a href="{{ url('report/' . $report->slug) }}" class="text-link">
                    Request Sample →
                </a>

            </div>

        </div>
    </article>
@endforeach

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
