/* Evointels – Vanilla JS + jQuery */
$(function () {
    var page = location.pathname.split("/").pop() || "/";

    // ── Active nav highlighting ──
    $(".nav-desktop a, .offcanvas-body a").each(function () {
        if ($(this).attr("href").split("/").pop() === page)
            $(this).addClass("active");
    });

    // ── Report tabs on homepage ──
    window.showTab = function (btn, id) {
        $(".tab-btn").removeClass("active");
        $(btn).addClass("active");
        $("#latest, #trending").hide();
        $("#" + id).show();
    };

    // ── Report detail tabs ──
    window.switchTab = function (btn, id) {
        $("#reportTabs .tab").removeClass("active");
        $(btn).addClass("active");
        $(".tab-panel").removeClass("active");
        $("#panel-" + id).addClass("active");
    };

    // ── License selection ──
    window.selectLicense = function (btn) {
        $(".license-option").removeClass("selected");
        $(btn).addClass("selected");
    };

    // ── Offcanvas Mobile Menu ──
    var $overlay = $("#offcanvasOverlay");
    var $menu = $("#offcanvasMenu");
    var $toggle = $("#mobileToggle");
    var $close = $("#offcanvasClose");

    function openMenu() {
        $menu.addClass("open");
        $overlay.addClass("active");
        $("body").addClass("menu-open");
    }
    function closeMenu() {
        $menu.removeClass("open");
        $overlay.removeClass("active");
        $("body").removeClass("menu-open");
    }
    $toggle.on("click", openMenu);
    $close.on("click", closeMenu);
    $overlay.on("click", closeMenu);
    $menu.find("a").on("click", closeMenu);

    // ── Sticky header shadow on scroll ──
    var $header = $(".main-header");
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 10) {
            $header.addClass("scrolled");
        } else {
            $header.removeClass("scrolled");
        }
    });

    // ── Reports page: dynamic rendering ──
    var reportsData = {
        healthcare: [
            {
                title: "Global Telemedicine Market Analysis 2026–2032",
                desc: "Comprehensive analysis of the telemedicine industry including market sizing, growth drivers, and competitive landscape.",
                price: "$3,499",
                date: "Mar 15, 2026",
                id: "EVO-HC-2026-001",
            },
            {
                title: "Pharmaceutical Drug Delivery Systems Market Report",
                desc: "In-depth evaluation of advanced drug delivery mechanisms and transdermal patches.",
                price: "$3,299",
                date: "Mar 10, 2026",
                id: "EVO-HC-2026-002",
            },
            {
                title: "Wearable Medical Devices Market Outlook 2026",
                desc: "Market assessment of wearable health monitors and continuous glucose monitors.",
                price: "$2,999",
                date: "Mar 5, 2026",
                id: "EVO-HC-2026-003",
            },
            {
                title: "Digital Health Platforms Market Intelligence Report",
                desc: "Strategic analysis of digital health ecosystems and AI-powered diagnostic tools.",
                price: "$3,199",
                date: "Feb 28, 2026",
                id: "EVO-HC-2026-004",
            },
            {
                title: "Precision Medicine Market Growth Forecast",
                desc: "Analysis of genomic medicine, targeted therapies and companion diagnostics.",
                price: "$3,399",
                date: "Feb 20, 2026",
                id: "EVO-HC-2026-005",
            },
        ],
        technology: [
            {
                title: "Artificial Intelligence in Enterprise: Trends & Forecast",
                desc: "Deep-dive into enterprise AI adoption covering NLP, computer vision, and generative AI.",
                price: "$3,799",
                date: "Mar 12, 2026",
                id: "EVO-TC-2026-001",
            },
            {
                title: "Cloud Computing Infrastructure Market 2026–2032",
                desc: "Analysis of public, private, and hybrid cloud infrastructure spending.",
                price: "$3,599",
                date: "Mar 8, 2026",
                id: "EVO-TC-2026-002",
            },
            {
                title: "Cybersecurity Solutions Market Intelligence Report",
                desc: "Comprehensive review of endpoint protection and zero-trust architecture.",
                price: "$3,499",
                date: "Mar 3, 2026",
                id: "EVO-TC-2026-003",
            },
            {
                title: "Edge Computing Market Analysis and Forecast",
                desc: "Evaluation of edge computing deployments in manufacturing and telecom.",
                price: "$3,299",
                date: "Feb 25, 2026",
                id: "EVO-TC-2026-004",
            },
            {
                title: "Quantum Computing Commercial Applications Report",
                desc: "Market assessment of quantum computing use cases across industries.",
                price: "$3,899",
                date: "Feb 18, 2026",
                id: "EVO-TC-2026-005",
            },
        ],
        automotive: [
            {
                title: "Electric Vehicle Battery Technology Market 2026",
                desc: "Comprehensive review of lithium-ion and solid-state battery chemistries.",
                price: "$3,699",
                date: "Mar 14, 2026",
                id: "EVO-AU-2026-001",
            },
            {
                title: "Autonomous Driving Systems Market Outlook",
                desc: "Market analysis of ADAS and Level 3-5 autonomous driving systems.",
                price: "$3,599",
                date: "Mar 9, 2026",
                id: "EVO-AU-2026-002",
            },
            {
                title: "Connected Vehicle Ecosystem Market Report",
                desc: "Analysis of V2X communication and in-vehicle infotainment.",
                price: "$3,399",
                date: "Mar 4, 2026",
                id: "EVO-AU-2026-003",
            },
            {
                title: "EV Charging Infrastructure Market Analysis",
                desc: "Global outlook on fast charging networks and home charging solutions.",
                price: "$3,199",
                date: "Feb 26, 2026",
                id: "EVO-AU-2026-004",
            },
        ],
        energy: [
            {
                title: "Renewable Energy Storage Solutions Market Report",
                desc: "Market outlook for battery storage, hydrogen fuel cells, and pumped hydro.",
                price: "$3,499",
                date: "Mar 10, 2026",
                id: "EVO-EN-2026-001",
            },
            {
                title: "Solar Energy Market Analysis 2026–2032",
                desc: "Comprehensive assessment of photovoltaic module manufacturing.",
                price: "$3,299",
                date: "Mar 6, 2026",
                id: "EVO-EN-2026-002",
            },
            {
                title: "Green Hydrogen Production Market Intelligence",
                desc: "Strategic analysis of electrolyzer technologies and project pipelines.",
                price: "$3,599",
                date: "Mar 1, 2026",
                id: "EVO-EN-2026-003",
            },
            {
                title: "Wind Energy Market Trends and Forecast",
                desc: "Onshore and offshore wind capacity expansion analysis.",
                price: "$3,199",
                date: "Feb 22, 2026",
                id: "EVO-EN-2026-004",
            },
            {
                title: "Smart Grid Technology Market Report",
                desc: "Grid modernization, IoT sensors and demand response systems.",
                price: "$3,099",
                date: "Feb 15, 2026",
                id: "EVO-EN-2026-005",
            },
        ],
        bfsi: [
            {
                title: "Digital Banking Transformation Report 2026",
                desc: "How digital-first strategies and neobanks are reshaping banking.",
                price: "$3,399",
                date: "Mar 9, 2026",
                id: "EVO-BF-2026-001",
            },
            {
                title: "Insurtech Market Analysis and Growth Forecast",
                desc: "Technology-driven insurance innovations and AI underwriting.",
                price: "$3,199",
                date: "Mar 4, 2026",
                id: "EVO-BF-2026-002",
            },
            {
                title: "Blockchain in Financial Services Report",
                desc: "DeFi, tokenization and smart contract applications in banking.",
                price: "$3,499",
                date: "Feb 27, 2026",
                id: "EVO-BF-2026-003",
            },
            {
                title: "Wealth Management Technology Market",
                desc: "Robo-advisors, digital platforms and personalization trends.",
                price: "$3,099",
                date: "Feb 19, 2026",
                id: "EVO-BF-2026-004",
            },
        ],
        "consumer-goods": [
            {
                title: "Sustainable Packaging Market: Global Trends",
                desc: "Exploration of biodegradable materials and recyclable packaging innovations.",
                price: "$2,999",
                date: "Mar 11, 2026",
                id: "EVO-CG-2026-001",
            },
            {
                title: "Direct-to-Consumer Brand Market Intelligence",
                desc: "Analysis of DTC brand growth strategies and digital marketing.",
                price: "$2,899",
                date: "Mar 6, 2026",
                id: "EVO-CG-2026-002",
            },
            {
                title: "Plant-Based Foods Market Analysis",
                desc: "Consumer trends, product innovation and market sizing for plant proteins.",
                price: "$2,799",
                date: "Feb 28, 2026",
                id: "EVO-CG-2026-003",
            },
            {
                title: "Luxury Goods Market Outlook 2026",
                desc: "High-end consumer spending trends and digital luxury commerce.",
                price: "$3,199",
                date: "Feb 20, 2026",
                id: "EVO-CG-2026-004",
            },
        ],
        semiconductor: [
            {
                title: "Advanced Chip Manufacturing: Global Outlook 2026",
                desc: "Analysis of semiconductor fabrication at 3nm and below.",
                price: "$3,899",
                date: "Mar 8, 2026",
                id: "EVO-SC-2026-001",
            },
            {
                title: "AI Chip Market Analysis and Competitive Landscape",
                desc: "Evaluation of GPU, TPU, and custom ASIC architectures.",
                price: "$3,699",
                date: "Mar 3, 2026",
                id: "EVO-SC-2026-002",
            },
            {
                title: "MEMS Sensors Market Intelligence Report",
                desc: "Micro-electromechanical systems applications across IoT and automotive.",
                price: "$3,299",
                date: "Feb 25, 2026",
                id: "EVO-SC-2026-003",
            },
            {
                title: "Semiconductor Packaging Innovation Report",
                desc: "Advanced packaging technologies including chiplet architectures.",
                price: "$3,499",
                date: "Feb 18, 2026",
                id: "EVO-SC-2026-004",
            },
        ],
        aerospace: [
            {
                title: "Space Technology & Satellite Market Analysis",
                desc: "Market assessment of commercial space launch services and satellite comms.",
                price: "$3,599",
                date: "Mar 7, 2026",
                id: "EVO-AS-2026-001",
            },
            {
                title: "Urban Air Mobility Market Forecast 2026–2035",
                desc: "Analysis of eVTOL aircraft development and certification timelines.",
                price: "$3,399",
                date: "Mar 2, 2026",
                id: "EVO-AS-2026-002",
            },
            {
                title: "Defense Electronics Market Report",
                desc: "Military communication systems, radar technology and EW systems.",
                price: "$3,699",
                date: "Feb 24, 2026",
                id: "EVO-AS-2026-003",
            },
        ],
        chemicals: [
            {
                title: "Green Chemistry & Bio-Based Materials Market",
                desc: "Analysis of sustainable chemical processes and bio-plastics.",
                price: "$3,199",
                date: "Mar 5, 2026",
                id: "EVO-CH-2026-001",
            },
            {
                title: "Specialty Chemicals Market Intelligence Report",
                desc: "Strategic evaluation of high-performance polymers and electronic chemicals.",
                price: "$3,099",
                date: "Feb 28, 2026",
                id: "EVO-CH-2026-002",
            },
            {
                title: "Industrial Coatings Market Analysis",
                desc: "Protective and decorative coatings technology and market trends.",
                price: "$2,999",
                date: "Feb 20, 2026",
                id: "EVO-CH-2026-003",
            },
        ],
    };

    var industryNames = {
        healthcare: "Healthcare",
        technology: "Technology",
        automotive: "Automotive",
        energy: "Energy",
        bfsi: "BFSI",
        "consumer-goods": "Consumer Goods",
        semiconductor: "Semiconductor",
        aerospace: "Aerospace",
        chemicals: "Chemicals",
    };
    var PER_PAGE = 4;
    var currentIndustry =
        new URLSearchParams(location.search).get("industry") || "healthcare";
    var currentPage = 1;

    function renderReports() {
        var data = reportsData[currentIndustry] || [];
        var total = data.length;
        var totalPages = Math.ceil(total / PER_PAGE);
        var start = (currentPage - 1) * PER_PAGE;
        var slice = data.slice(start, start + PER_PAGE);
        var name = industryNames[currentIndustry] || currentIndustry;

        $("#reports-heading").text(name + " Market Research Reports");
        $("#reports-count").text(
            "Showing " + slice.length + " of " + total + " reports in " + name,
        );

        // $("#industry-nav a").removeClass("active");
        // $('#industry-nav a[data-industry="' + currentIndustry + '"]').addClass(
        //     "active",
        // );

        var html = "";
        $.each(slice, function (i, r) {
            html +=
                '<article class="report-list-card">' +
                '<div class="thumb"><i class="fas fa-file-alt" style="font-size:48px"></i></div>' +
                '<div class="content">' +
                '<div class="top"><span class="badge-sm">' +
                name +
                '</span><span style="font-size:12px;color:var(--muted)"><i class="fas fa-calendar-alt"></i> ' +
                r.date +
                "</span></div>" +
                '<h3><a href="report-detail.html">' +
                r.title +
                "</a></h3>" +
                '<p class="desc">' +
                r.desc +
                "</p>" +
                '<div class="bottom">' +
                '<span class="price">' +
                r.price +
                "</span>" +
                '<a href="report-detail.html" class="btn-primary" style="font-size:13px;padding:6px 16px"><i class="fas fa-shopping-cart"></i> Buy Now</a>' +
                '<a href="report-detail.html" class="text-link">Request Sample →</a>' +
                "</div>" +
                "</div>" +
                "</article>";
        });
        $("#reports-container").html(html);

        if (totalPages > 1) {
            var pag =
                "<button " +
                (currentPage <= 1 ? "disabled" : "") +
                ' onclick="goPage(' +
                (currentPage - 1) +
                ')">← Previous</button>';
            for (var p = 1; p <= totalPages; p++) {
                pag +=
                    '<button class="page-num ' +
                    (p === currentPage ? "active" : "") +
                    '" onclick="goPage(' +
                    p +
                    ')">' +
                    p +
                    "</button>";
            }
            pag +=
                "<button " +
                (currentPage >= totalPages ? "disabled" : "") +
                ' onclick="goPage(' +
                (currentPage + 1) +
                ')">Next →</button>';
            $("#pagination").html(pag);
        } else {
            $("#pagination").html("");
        }
    }

    window.goPage = function (p) {
        currentPage = p;
        // renderReports();
        window.scrollTo({ top: 0, behavior: "smooth" });
    };

    // $("#industry-nav a").on("click", function (e) {
    //     e.preventDefault();
    //    // currentIndustry = $(this).data("industry");
    //    // currentPage = 1;
    //  //   renderReports();
    //     window.scrollTo({ top: 0, behavior: "smooth" });
    // });

    // if ($("#reports-container").length) renderReports();

    // ── Fade-up on scroll (IntersectionObserver) ──
    if ("IntersectionObserver" in window) {
        var fadeEls = document.querySelectorAll(".fade-up");
        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.08, rootMargin: "0px 0px -40px 0px" },
        );
        fadeEls.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        $(".fade-up").addClass("visible");
    }
});



