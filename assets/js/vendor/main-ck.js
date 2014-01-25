(function() {
    var e, t = function() {}, n = [ "assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeStamp", "trace", "warn" ], r = n.length, i = window.console = window.console || {};
    while (r--) {
        e = n[r];
        i[e] || (i[e] = t);
    }
})();

$(function() {
    $('[data-toogle="tooltip"]').tooltip();
    $(".sidenav-dropdown-toggle").click(function(e) {
        e.stopPropagation();
        var t = $(this).parent();
        t.toggleClass("is-active");
        t.hasClass("is-active") ? t.find(".sidenav-menu-sub").slideDown("fast") : t.find(".sidenav-menu-sub").slideUp("fast");
    });
    $(".navbar-nav-dropdown").click(function(e) {
        e.stopPropagation();
        var t = $(this).parent();
        t.toggleClass("is-active");
        t.hasClass("is-active") ? t.find(".navbar-nav-sub").slideDown("fast") : t.find(".navbar-nav-sub").slideUp("fast");
    });
    var e = $(".sidenav");
    $("body").click(function() {
        $(this).hasClass("is-active") && $(this).removeClass("is-active");
    });
    e.click(function(e) {
        e.stopPropagation();
    });
    $(".sidenav-btn").click(function(e) {
        e.stopPropagation();
        $("body").toggleClass("is-active");
    });
    $(".breadcrumbs-toggle").click(function(e) {
        e.stopPropagation();
        var t = $(".breadcrumbs");
        t.toggleClass("is-active");
        t.hasClass("is-active") ? $(".breadcrumbs-crumbs").slideDown("fast") : $(".breadcrumbs-crumbs").slideUp("fast");
    });
    $(window).resize(function() {
        $(this).width() > 769 && $(".breadcrumbs-crumbs").css("display", "");
    });
});