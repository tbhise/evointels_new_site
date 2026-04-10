<footer class="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div>
                <h3>Stay Ahead with Market Insights</h3>
                <p>Get weekly research updates delivered to your inbox.</p>
            </div>
            <form class="newsletter-form" onsubmit="return false">
                <input type="email" placeholder="Enter your email" aria-label="Email address">
                <button type="submit">Subscribe →</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="footer-cols">
            <div>
                <div class="logo" style="margin-bottom:16px"><svg width="24" height="24" viewBox="0 0 40 40"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="19" stroke="#1FA37A" stroke-width="2" fill="none" />
                        <rect x="11" y="18" width="4" height="12" rx="2" fill="#1FA37A" />
                        <rect x="18" y="12" width="4" height="18" rx="2" fill="#1FA37A" />
                        <rect x="25" y="8" width="4" height="22" rx="2" fill="#1FA37A" />
                    </svg> Evo<span>intels</span></div>
                <p class="desc">Empowering businesses with AI-driven market intelligence and actionable research
                    insights.</p>
            </div>
            <div>
                <h4>Services</h4>
                <ul>
                    <li><a href="services.html">Market Analysis</a></li>
                    <li><a href="services.html">Competitor Intelligence</a></li>
                    <li><a href="services.html">Trend Forecasting</a></li>
                    <li><a href="services.html">Consumer Analytics</a></li>
                </ul>
            </div>
            <div>
                <h4>Industries</h4>
                <ul>
                    <li><a href="reports.html?industry=healthcare">Healthcare</a></li>
                    <li><a href="reports.html?industry=technology">ICT & Telecom</a></li>
                    <li><a href="reports.html?industry=energy">Energy</a></li>
                    <li><a href="reports.html?industry=automotive">Automotive</a></li>
                    <li><a href="reports.html?industry=bfsi">BFSI</a></li>
                </ul>
            </div>
            <div>
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">© 2026 Evointels. All rights reserved.</div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

@yield('scripts')
</body>

</html>
