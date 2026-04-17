/* ============================================================
   Report Detail Page — Interactions
   - Smooth scroll to sections
   - Scrollspy active state (IntersectionObserver + scroll fallback)
   - Sticky sidebar (CSS-driven, JS only ensures container height)
   - Sticky top bar reveal
   - Mobile sidebar accordion
   - Section accordions
   ============================================================ */
(function ($) {
    "use strict";

    $(function () {
        // ---- Helpers -----------------------------------------------------------
        // function headerOffset() {
        //   var h = $('.main-header').outerHeight() || 70;
        //   return h + 20; // small breathing room
        // }
        function headerOffset() {
            var header = $(".main-header").outerHeight() || 70;

            var sticky = 0;
            var $stickyBar = $("#rdStickyBar");

            if ($stickyBar.hasClass("show")) {
                sticky = $stickyBar.outerHeight();
            }

            return header + sticky + 50;
        }

        function isDesktop() {
            return window.matchMedia("(min-width: 992px)").matches;
        }

        var $sections = $(".rd-section[id]");
        var $navLinks = $(".rd-nav-link");
        var sectionIds = $sections
            .map(function () {
                return this.id;
            })
            .get();

        // ---- 1. Smooth scroll on sidebar / TOC clicks --------------------------
        $(document).on("click", ".rd-nav-link, .rd-toc a", function (e) {
            var href = $(this).attr("href");
            if (!href || href.charAt(0) !== "#") return;
            var $target = $(document.getElementById(href.slice(1)));
            if (!$target.length) return;

            e.preventDefault();
            var top = $target.offset().top - headerOffset();
            $("html, body")
                .stop(true)
                .animate({ scrollTop: top }, 500, "swing");

            // Close mobile sidebar after click
            $("#rdMobileNav").removeClass("open");

            // Optimistic active state
            $navLinks.removeClass("active");
            $('.rd-nav-link[href="' + href + '"]').addClass("active");
        });

        // ---- 2. Scrollspy ------------------------------------------------------
        function setActive(id) {
            if (!id) return;
            var sel = '.rd-nav-link[href="#' + id + '"]';
            var $matches = $(sel);
            if (!$matches.length) return;
            if (
                $matches.first().hasClass("active") &&
                $(".rd-nav-link.active").length === $matches.length
            )
                return;
            $navLinks.removeClass("active");
            $matches.addClass("active");
        }

        if ("IntersectionObserver" in window) {
            var visible = {};
            var io = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        visible[entry.target.id] = entry.isIntersecting
                            ? entry.intersectionRatio
                            : 0;
                    });
                    // Pick the section whose top is closest to (and above) the offset line.
                    var scrollY = window.scrollY || window.pageYOffset;
                    var lineY = scrollY + headerOffset() + 8;
                    var current = sectionIds[0];
                    sectionIds.forEach(function (id) {
                        var el = document.getElementById(id);
                        if (!el) return;
                        var top = el.getBoundingClientRect().top + scrollY;
                        if (top <= lineY) current = id;
                    });
                    setActive(current);
                },
                {
                    rootMargin: "-" + (headerOffset() + 8) + "px 0px -55% 0px",
                    threshold: [0, 0.1, 0.25, 0.5, 0.75, 1],
                },
            );
            $sections.each(function () {
                io.observe(this);
            });
        } else {
            // Fallback: scroll listener
            $(window).on("scroll.rdSpy", function () {
                var s = $(window).scrollTop();
                var line = s + headerOffset() + 8;
                var current = sectionIds[0];
                $sections.each(function () {
                    if ($(this).offset().top <= line) current = this.id;
                });
                setActive(current);
            });
        }

        // ---- 3. Sticky top bar -------------------------------------------------
        var $stickyBar = $("#rdStickyBar");
        var $hero = $(".rd-hero");
        function updateStickyBar() {
            if (!$hero.length || !$stickyBar.length) return;
            var heroBottom = $hero.offset().top + $hero.outerHeight();
            var s = $(window).scrollTop();
            $stickyBar.toggleClass("show", s > heroBottom - 80);
        }
        $(window).on("scroll.rdBar resize.rdBar", updateStickyBar);
        updateStickyBar();

        // ---- 4. Mobile sidebar toggle (accordion) ------------------------------
        $("#rdMobileNavToggle").on("click", function () {
            $("#rdMobileNav").toggleClass("open");
            $(this).find(".fa-chevron-down").toggleClass("fa-rotate-180");
        });

        // ---- 5. Section accordions --------------------------------------------
        $(document).on("click", ".rd-acc-trigger", function () {
            $(this).closest(".rd-acc-item").toggleClass("open");
        });

        // ---- 6. Trigger initial scrollspy -------------------------------------
        $(window).trigger("scroll");
    });
})(jQuery);
