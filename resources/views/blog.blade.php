@extends('layouts.main')
@section('content')
     <main>
    <section class="page-hero">
      <span class="badge">Our Blog</span>
      <h1>Insights & Articles</h1>
      <p>Expert perspectives on market trends, industry analysis, and research methodologies.</p>
      <div class="fade"></div>
    </section>
    <section class="section fade-up">
      <div class="container">
        <div style="display:flex;gap:32px;flex-wrap:wrap">
          <div style="flex:7;min-width:300px">
            <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px" id="blog-grid">
              <a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-chart-bar"></i></div>
  <div class="card-body">
    <span class="badge-sm">Technology</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">How AI is Reshaping Market Research in 2026</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Discover how artificial intelligence and machine learning are transforming the way businesses approach market analysis.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 18, 2026</span><span><i class="fas fa-clock"></i> 6 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-bolt"></i></div>
  <div class="card-body">
    <span class="badge-sm">Energy</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">The Rise of Green Hydrogen: Market Outlook</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Green hydrogen is emerging as a critical component of the global energy transition.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 15, 2026</span><span><i class="fas fa-clock"></i> 8 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-microscope"></i></div>
  <div class="card-body">
    <span class="badge-sm">Technology</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Semiconductor Supply Chain: Lessons from 2025</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">The semiconductor shortage exposed critical vulnerabilities in global supply chains.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 12, 2026</span><span><i class="fas fa-clock"></i> 5 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-hospital"></i></div>
  <div class="card-body">
    <span class="badge-sm">Healthcare</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Digital Health Platforms: A $500B Opportunity</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Telehealth, remote monitoring, and AI diagnostics are creating massive opportunities.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 10, 2026</span><span><i class="fas fa-clock"></i> 7 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-shopping-bag"></i></div>
  <div class="card-body">
    <span class="badge-sm">FMCG</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Gen Z Spending Habits: What Brands Need to Know</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Generation Z is redefining consumer behavior with values-driven purchasing.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 8, 2026</span><span><i class="fas fa-clock"></i> 5 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-bullseye"></i></div>
  <div class="card-body">
    <span class="badge-sm">Technology</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Competitive Intelligence Best Practices for 2026</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Effective competitive intelligence goes beyond tracking competitors.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 6, 2026</span><span><i class="fas fa-clock"></i> 6 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px"><i class="fas fa-car"></i></div>
  <div class="card-body">
    <span class="badge-sm">Automotive</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Electric Vehicle Market Analysis: 2026 Outlook</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Global EV adoption accelerates as battery costs fall and infrastructure expands.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 4, 2026</span><span><i class="fas fa-clock"></i> 7 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px">💳</div>
  <div class="card-body">
    <span class="badge-sm">BFSI</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">How Fintech is Disrupting Traditional Banking</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Digital-only banks and embedded finance challenge incumbent institutions.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Mar 2, 2026</span><span><i class="fas fa-clock"></i> 6 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px">☀️</div>
  <div class="card-body">
    <span class="badge-sm">Energy</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Renewable Energy Investment Trends for 2026</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">Global renewable energy investments hit record highs.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Feb 28, 2026</span><span><i class="fas fa-clock"></i> 5 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a><a href="blog-details.html" class="card blog-card" style="overflow:hidden">
  <div class="thumb" style="height:176px">💊</div>
  <div class="card-body">
    <span class="badge-sm">Healthcare</span>
    <h2 style="font-size:17px;font-weight:700;margin-top:12px;margin-bottom:8px">Pharmaceutical Market Trends: GLP-1 and Beyond</h2>
    <p style="font-size:14px;color:var(--muted);line-height:1.5;margin-bottom:16px" class="line-clamp-2">The GLP-1 drug class is reshaping pharmaceuticals.</p>
    <div style="display:flex;align-items:center;justify-content:space-between">
      <div style="display:flex;gap:12px;font-size:12px;color:var(--muted)"><span><i class="fas fa-calendar-alt"></i> Feb 25, 2026</span><span><i class="fas fa-clock"></i> 8 min read</span></div>
      <span class="text-link">Read More →</span>
    </div>
  </div>
</a>
            </div>
            <div class="pagination" id="blog-pagination">
              <button disabled>← Previous</button>
              <button class="page-num active">1</button>
              <button class="page-num">2</button>
              <button>Next →</button>
            </div>
          </div>
          <aside style="flex:3;min-width:250px">
            <div class="sidebar-box">
              <h3>Industries</h3>
              <a href="#">Healthcare <span class="count" style="background:var(--accent-bg);padding:2px 8px;border-radius:999px;font-size:12px;font-weight:600">12</span></a>
              <a href="#">Technology <span class="count" style="background:var(--accent-bg);padding:2px 8px;border-radius:999px;font-size:12px;font-weight:600">18</span></a>
              <a href="#">Energy <span class="count" style="background:var(--accent-bg);padding:2px 8px;border-radius:999px;font-size:12px;font-weight:600">9</span></a>
              <a href="#">Automotive <span class="count" style="background:var(--accent-bg);padding:2px 8px;border-radius:999px;font-size:12px;font-weight:600">7</span></a>
              <a href="#">BFSI <span class="count" style="background:var(--accent-bg);padding:2px 8px;border-radius:999px;font-size:12px;font-weight:600">10</span></a>
              <a href="#">FMCG <span class="count" style="background:var(--accent-bg);padding:2px 8px;border-radius:999px;font-size:12px;font-weight:600">6</span></a>
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>
@endsection
