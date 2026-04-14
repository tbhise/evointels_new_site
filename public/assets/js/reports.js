$(document).ready(function () {
    $("#industry-nav a").on("click", function (e) {
        e.preventDefault();
        $("#industry-nav a").removeClass("active");
        $(this).addClass("active");

        var industryId = $(this).data("industry");

        var slug = $(this).data("slug");
        // ✅ Update URL without reload
        if (slug) {
            var newUrl = baseUrl + "/reports/" + slug;
            window.history.pushState({ path: newUrl }, "", newUrl);
        }

        $.ajax({
            url: baseUrl + "/fetchReports",
            method: "GET",
            data: {
                industry_id: industryId,
            },
            success: function (data) {
                $("#reports-container").html(data);
            },
            error: function () {
                console.log("Failed to load reports. Please try again.");
            },
        });
    });

    $("#industry-nav a.active").trigger("click");





    $(document).on("click", ".page-link", function () {
    if ($(this).attr("disabled")) return;

    let page = $(this).data("page");
    let industryId = $("#industry-nav a.active").data("industry");

    $.ajax({
        url: baseUrl + "/fetchReports",
        method: "GET",
        data: {
            industry_id: industryId,
            page: page, // Laravel understands this internally
        },
        success: function (data) {
            $("#reports-container").html(data);
        },
    });
});
});
