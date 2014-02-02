(function() {
    var e, t = function() {}, n = [ "assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeStamp", "trace", "warn" ], r = n.length, i = window.console = window.console || {};
    while (r--) {
        e = n[r];
        i[e] || (i[e] = t);
    }
})();

$(function() {
    $('[data-toogle="tooltip"]').tooltip();
    $('[data-toogle="tooltip"]').on("click", function() {
        $(this).tooltip("hide");
    });
    $(".dropdown").click(function(e) {
        e.stopPropagation();
        var t = $(this).parent();
        t.toggleClass("is-active-nav");
        t.hasClass("is-active-nav") ? t.find("> ul").slideDown("fast") : t.find("> ul").slideUp("fast");
    });
    $(".sidenav-dropdown-toggle").click(function(e) {
        e.stopPropagation();
        var t = $(this).parent();
        t.toggleClass("is-active-sidenav-dropdown");
        t.hasClass("is-active-sidenav-dropdown") ? t.find(".sidenav-menu-sub").slideDown("fast") : t.find(".sidenav-menu-sub").slideUp("fast");
    });
    $(".login-toggle").click(function(e) {
        e.stopPropagation();
        var t = $(".login");
        t.toggleClass("is-active-login");
        t.hasClass("is-active-login") ? $(".login-wrap").slideDown("fast") : $(".login-wrap").slideUp("fast");
    });
    var e = $(".sidenav");
    $("body").click(function() {
        $(this).hasClass("is-active-sidenav") && $(this).removeClass("is-active-sidenav");
    });
    e.click(function(e) {
        e.stopPropagation();
    });
    $(".sidenav-toggle").click(function(e) {
        e.stopPropagation();
        $("body").toggleClass("is-active-sidenav");
    });
    $(".breadcrumbs-toggle").click(function(e) {
        e.stopPropagation();
        var t = $(".breadcrumbs");
        t.toggleClass("is-active-breadcrumbs");
        t.hasClass("is-active-breadcrumbs") ? $(".breadcrumbs-crumbs").slideDown("fast") : $(".breadcrumbs-crumbs").slideUp("fast");
    });
    $(window).resize(function() {
        $(this).width() > 769 && $(".breadcrumbs-crumbs").css("display", "");
    });
});