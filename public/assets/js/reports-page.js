/* Reports Page – Premium SaaS UI Logic */
$(function () {
    var PER_PAGE = 4;
    var currentIndustry =
        new URLSearchParams(location.search).get("industry") || "healthcare";
    var currentPage = 1;
    var searchQuery = "";

    /* ── Search ── */
    var searchTimer;
    $("#reportSearch").on("input", function () {
        clearTimeout(searchTimer);
        var val = $(this).val();
        searchTimer = setTimeout(function () {
            searchQuery = val;
            currentPage = 1;

        }, 300);
    });

    /* ── Industry search in sidebar ── */
    $("#industrySearch").on("input", function () {
        var q = $(this).val().toLowerCase();
        $("#industrySidebarNav a").each(function () {
            var name = $(this).text().toLowerCase();
            $(this).toggle(name.indexOf(q) > -1);
        });
    });


      /* ── Mobile sidebar ── */
  function openSidebar(){ $('#rpSidebar').addClass('open'); $('#sidebarOverlay').addClass('active'); $('body').addClass('menu-open'); }
  function closeSidebar(){ $('#rpSidebar').removeClass('open'); $('#sidebarOverlay').removeClass('active'); $('body').removeClass('menu-open'); }
  $('#mobileFilterBtn').on('click', openSidebar);
  $('#sidebarClose').on('click', closeSidebar);
  $('#sidebarOverlay').on('click', closeSidebar);


    /* ── Fade-up observer ── */
    if ("IntersectionObserver" in window) {
        var obs = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        e.target.classList.add("visible");
                        obs.unobserve(e.target);
                    }
                });
            },
            { threshold: 0.08, rootMargin: "0px 0px -40px 0px" },
        );
        document
            .querySelectorAll(".rp-stats,.rp-players,.rp-main")
            .forEach(function (el) {
                obs.observe(el);
            });
    }
});
