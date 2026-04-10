@extends('layouts.main')
@section('content')
    <main>
    <section class="page-hero" style="padding-bottom:112px">
      <span class="badge">Contact Us</span>
      <h1>Let's Start a Conversation</h1>
      <p>Have questions about our services? Ready to start your research project? Our team is here to help you make data-driven decisions.</p>
      <div class="fade"></div>
    </section>

    <section style="padding:0 0 64px">
      <div class="container">
        <div class="info-cards">
          <div class="info-card"><div class="icon"><i class="fas fa-map-marker-alt"></i></div><h4>Headquarters</h4><p>123 Market Street, Suite 500</p><p>San Francisco, CA 94105</p></div>
          <div class="info-card"><div class="icon"><i class="fas fa-phone"></i></div><h4>Phone</h4><p>+1 (234) 567-890</p><p>+1 (234) 567-891</p></div>
          <div class="info-card"><div class="icon"><i class="fas fa-envelope"></i></div><h4>Email</h4><p>info@evointels.com</p><p>support@evointels.com</p></div>
          <div class="info-card"><div class="icon"><i class="fas fa-clock"></i></div><h4>Business Hours</h4><p>Mon – Fri: 9:00 AM – 6:00 PM</p><p>Sat: 10:00 AM – 2:00 PM</p></div>
        </div>
      </div>
    </section>

    <section class="section fade-up" style="padding-top:0">
      <div class="container">
        <div class="contact-layout">
          <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form onsubmit="return false">
              <div class="row"><input type="text" placeholder="Full Name"><input type="email" placeholder="Email Address"></div>
              <div class="row"><input type="text" placeholder="Company Name"><input type="tel" placeholder="Phone Number"></div>
              <input type="text" placeholder="Subject">
              <textarea rows="5" placeholder="Your Message"></textarea>
              <button class="btn-submit"><i class="fas fa-envelope"></i> Send Message</button>
            </form>
          </div>
          <div>
            <div class="how-we-work">
              <h2>How We Work</h2>
              <div class="step-card"><div class="icon"><i class="fas fa-comments"></i></div><div><p class="step-label">Step 1</p><h4>Initial Consultation</h4><p>We discuss your research needs and business objectives.</p></div></div>
              <div class="step-card"><div class="icon"><i class="fas fa-file-alt"></i></div><div><p class="step-label">Step 2</p><h4>Scope & Proposal</h4><p>A tailored proposal with timeline, deliverables, and pricing.</p></div></div>
              <div class="step-card"><div class="icon"><i class="fas fa-chart-bar"></i></div><div><p class="step-label">Step 3</p><h4>Research Execution</h4><p>Our analysts conduct rigorous data collection and analysis.</p></div></div>
              <div class="step-card"><div class="icon"><i class="fas fa-lightbulb"></i></div><div><p class="step-label">Step 4</p><h4>Insights & Delivery</h4><p>Actionable insights delivered in your preferred format.</p></div></div>
            </div>
            <div class="support-box" style="margin-top:24px">
              <h4>Need Immediate Help?</h4>
              <p>Our support team is available during business hours.</p>
              <a href="tel:+1234567890" style="color:var(--primary);font-weight:600;font-size:14px"><i class="fas fa-phone"></i> +1 (234) 567-890 →</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
