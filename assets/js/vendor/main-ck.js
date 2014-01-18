$(document).ready(function() {
    $(".sidenav-dropdown-toggle").click(function(e) {
        e.preventDefault();
        var t = $(this).parent();
        t.toggleClass("is-active");
        t.hasClass("is-active") ? t.find(".sidenav-menu-sub").slideDown("fast") : t.find(".sidenav-menu-sub").slideUp("fast");
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
});