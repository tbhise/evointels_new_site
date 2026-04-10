  <header>
      <div class="top-bar">
          <div class="container">
              <div class="left">
                  <a href="tel:+1234567890"><i class="fas fa-phone"></i> +1 (234) 567-890</a>
                  <a href="mailto:info@evointels.com"><i class="fas fa-envelope"></i> info@evointels.com</a>
              </div>
              <div class="right">Trusted by 5000+ Global Companies</div>
          </div>
      </div>
      <div class="main-header">
          <div class="container">
              <a href="{{ url('/') }}" class="logo"><svg width="32" height="32" viewBox="0 0 40 40"
                      fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="19" stroke="#1FA37A" stroke-width="2" fill="none" />
                      <rect x="11" y="18" width="4" height="12" rx="2" fill="#1FA37A" />
                      <rect x="18" y="12" width="4" height="18" rx="2" fill="#1FA37A" />
                      <rect x="25" y="8" width="4" height="22" rx="2" fill="#1FA37A" />
                  </svg> Evo<span>intels</span></a>
              <nav class="nav-desktop">

                  <a href="{{ url('/') }}">Home</a>
                  <div class="dropdown">
                      <button class="dropdown-trigger">Reports <i class="fas fa-chevron-down fa-xs"></i></button>
                      <div class="dropdown-menu">
                          <div class="dropdown-panel">
                              <div class="dropdown-grid">



                                  <a href="{{ url('/reports') }}?industry=healthcare" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fas fa-hospital"></i></div>
                                      <div>
                                          <h4>Healthcare</h4>
                                          <p>Pharmaceuticals, medical devices, biotechnology</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=technology" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fas fa-laptop-code"></i></div>
                                      <div>
                                          <h4>Technology</h4>
                                          <p>AI, SaaS, cloud computing</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=automotive" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fas fa-car"></i></div>
                                      <div>
                                          <h4>Automotive</h4>
                                          <p>EV, mobility, logistics</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=bfsi" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fas fa-landmark"></i></div>
                                      <div>
                                          <h4>BFSI</h4>
                                          <p>Banking, insurance, fintech</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=energy" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fas fa-bolt"></i></div>
                                      <div>
                                          <h4>Energy</h4>
                                          <p>Oil, gas, renewable energy</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=consumer-goods" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fas fa-shopping-cart"></i></div>
                                      <div>
                                          <h4>Consumer Goods</h4>
                                          <p>FMCG, retail, e-commerce</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=aerospace-defense" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fa fa-plane"></i></div>
                                      <div>
                                          <h4>Aerospace & Defense</h4>
                                          <p>Aircraft, defense systems, UAVs and space</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=agriculture-food" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fa fa-bowl-food"></i></div>
                                      <div>
                                          <h4>Agriculture</h4>
                                          <p>Agriculture, agri-tech, fertilizers</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=food-beverage" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fa fa-bottle-water"></i></div>
                                      <div>
                                          <h4>Food & Beverage</h4>
                                          <p>Processed food, beverages and ingredients</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=chemicals-materials" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fa fa-flask-vial"></i></div>
                                      <div>
                                          <h4>Chemicals & Materials</h4>
                                          <p>Specialty chemicals, polymers and materials</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/reports') }}?industry=semiconductor-electronics" class="dropdown-item">
                                      <div class="icon-wrap"><i class="fa fa-microchip"></i></div>
                                      <div>
                                          <h4>Semiconductor & Electronics</h4>
                                          <p>Integrated circuits, semiconductors, and electronic components</p>
                                      </div>
                                  </a>

                              </div>
                              <div class="dropdown-footer"><a href="{{ url('/reports') }}">View all reports →</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="dropdown">
                      <button class="dropdown-trigger">Services <i class="fas fa-chevron-down fa-xs"></i></button>
                      <div class="dropdown-menu">
                          <div class="dropdown-panel">
                              <div class="dropdown-grid">
                                  <a href="{{ url('/services') }}" class="dropdown-item">
                                      <div>
                                          <h4>Market Research</h4>
                                          <p>Comprehensive market analysis and sizing</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/services') }}" class="dropdown-item">
                                      <div>
                                          <h4>Competitive Intelligence</h4>
                                          <p>Deep-dive into competitive landscapes</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/services') }}" class="dropdown-item">
                                      <div>
                                          <h4>Industry Analysis</h4>
                                          <p>Sector-specific trend reports</p>
                                      </div>
                                  </a>
                                  <a href="{{ url('/services') }}" class="dropdown-item">
                                      <div>
                                          <h4>Custom Reports</h4>
                                          <p>Tailored research for your needs</p>
                                      </div>
                                  </a>
                              </div>
                              <div class="dropdown-footer"><a href="{{ url('/services') }}">View all services →</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <a href="{{ url('/blogs') }}">Blog</a>
                  <a href="{{ url('/about') }}">About</a>
                  <a href="{{ url('/contact') }}">Contact</a>
              </nav>
              <div class="header-actions">
                  <button class="btn-outline">Login</button>
                  <a href="{{ url('/contact') }}" class="btn-primary">Request Quote</a>
              </div>
              <button class="mobile-toggle" id="mobileToggle" aria-label="Open menu"><i
                      class="fas fa-bars"></i></button>
          </div>
          <!-- Offcanvas Overlay -->
          <div class="offcanvas-overlay" id="offcanvasOverlay"></div>
          <!-- Offcanvas Menu -->
          <nav class="offcanvas-menu" id="offcanvasMenu" aria-label="Mobile navigation">
              <div class="offcanvas-header">
                  <a href="{{ url('/') }}" class="logo"><svg width="28" height="28" viewBox="0 0 40 40"
                          fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="20" cy="20" r="19" stroke="#1FA37A" stroke-width="2"
                              fill="none" />
                          <rect x="11" y="18" width="4" height="12" rx="2" fill="#1FA37A" />
                          <rect x="18" y="12" width="4" height="18" rx="2" fill="#1FA37A" />
                          <rect x="25" y="8" width="4" height="22" rx="2" fill="#1FA37A" />
                      </svg> Evo<span>intels</span></a>
                  <button class="offcanvas-close" id="offcanvasClose" aria-label="Close menu"><i
                          class="fas fa-times"></i></button>
              </div>
              <div class="offcanvas-body">
                  <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                  <a href="reports.html"><i class="fas fa-file-alt"></i> Reports</a>
                  <a href="{{ url('/services') }}"><i class="fas fa-cogs"></i> Services</a>
                  <a href="{{ url('/blogs') }}"><i class="fas fa-blog"></i> Blog</a>
                  <a href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About</a>
                  <a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a>
              </div>
              <div class="offcanvas-footer">
                  <button class="btn-outline" style="width:100%;margin-bottom:8px">Login</button>
                  <a href="{{ url('/contact') }}" class="btn-primary"
                      style="width:100%;text-align:center;display:block">Request
                      Quote</a>
              </div>
          </nav>
      </div>
  </header>
