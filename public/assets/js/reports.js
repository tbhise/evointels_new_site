$(function () {
    let currentIndustryId = null;
    // 🔹 Core loader (single source of truth)
    function loadReports({
        industryId = currentIndustryId,
        page = 1,
        updateUrl = false,
        slug = null,
    } = {}) {
        if (!industryId) return;
        currentIndustryId = industryId;
        // Update URL (only when switching tabs)
        if (updateUrl && slug) {
            const newUrl = baseUrl + "/reports/" + slug;
            window.history.pushState({ industryId, page }, "", newUrl);
        }
        $.ajax({
            url: baseUrl + "/fetchReports",
            method: "GET",
            data: {
                industry_id: industryId,
                page: page,
            },
            beforeSend: function () {
                $("#reports-container").addClass("loading"); // optional loader class
            },
            success: function (data) {
                $("#reports-container").html(data);
                // window.scrollTo({ top: 0, behavior: "smooth" });
            },
            error: function () {
                console.error("Failed to load reports.");
            },
            complete: function () {
                $("#reports-container").removeClass("loading");
            },
        });
    }
    // 🔹 Industry Tab Click
    // $(document).on("click", "#industrySidebarNav a", function (e) {
    //     e.preventDefault();
    //     const $this = $(this);
    //     const industryId = $this.data("industry");
    //     const slug = $this.data("slug");
    //     if (!industryId) return;
    //     $("#industrySidebarNav a").removeClass("rp-nav-active");
    //     $this.addClass("rp-nav-active");
    //     loadReports({
    //         industryId,
    //         page: 1,
    //         updateUrl: true,
    //         slug,
    //     });
    // });
    
    // 🔹 Pagination Click
    $(document).on("click", ".page-link", function () {
        if ($(this).is("[disabled]")) return;
        const page = $(this).data("page");
        loadReports({ page });
    });
    // 🔹 Initial Load
    const $activeTab = $("#industrySidebarNav a.rp-nav-active").first();
    if ($activeTab.length) {
        loadReports({
            industryId: $activeTab.data("industry"),
            page: 1,
        });
    }
    // 🔹 Handle Browser Back/Forward (optional but powerful)
    window.onpopstate = function (event) {
        if (event.state) {
            loadReports({
                industryId: event.state.industryId,
                page: event.state.page,
            });
        }
    };
});
