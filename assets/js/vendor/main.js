// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(function(){
    // Init tooltips
    $('[data-toogle="tooltip"]').tooltip();
    $('[data-toogle="tooltip"]').on('click', function() {
        $(this).tooltip('hide');
    });

    // menu dropdown toggle
    $(".dropdown").click(function (e) {
        e.stopPropagation();
        
        var $item = $(this).parent();
        
        $item.toggleClass("is-active-nav");
        
        if ($item.hasClass("is-active-nav")) {
            $item.find("> ul").slideDown("fast");
        } else {
            $item.find("> ul").slideUp("fast");
        }
    });

    // sidebar menu dropdown toggle
    $(".sidenav-dropdown-toggle").click(function (e) {
        e.stopPropagation();
        
        var $item = $(this).parent();
        
        $item.toggleClass("is-active-sidenav-dropdown");
        
        if ($item.hasClass("is-active-sidenav-dropdown")) {
            $item.find(".sidenav-menu-sub").slideDown("fast");
        } else {
            $item.find(".sidenav-menu-sub").slideUp("fast");
        }
    });

    // Login section toggle
    $(".login-toggle").click(function (e) {
        e.stopPropagation();

        var $item = $(".login");

        $item.toggleClass("is-active-login");

         if ($item.hasClass("is-active-login")) {
            $(".login-wrap").slideDown("fast");
        } else {
            $(".login-wrap").slideUp("fast");
        }
    });

    // mobile side-menu slide toggler
    var $menu = $(".sidenav");
    
    $("body").click(function () {
        if ($(this).hasClass("is-active-sidenav")) {
            $(this).removeClass("is-active-sidenav");
        }
    });
    
    $menu.click(function(e) {
        e.stopPropagation();
    });
    
    $(".sidenav-toggle").click(function (e) {
        e.stopPropagation();
        $("body").toggleClass("is-active-sidenav");
    });

    // mobile breadcrumbs sliding menu
    $(".breadcrumbs-toggle").click(function (e) {
        e.stopPropagation();
        
        var $item = $(".breadcrumbs");
        
        $item.toggleClass("is-active-breadcrumbs");

        if ($item.hasClass("is-active-breadcrumbs")) {
            $(".breadcrumbs-crumbs").slideDown("fast");
        } else {
            $(".breadcrumbs-crumbs").slideUp("fast");
        }
    });

    $(window).resize(function() {
        if ($(this).width() > 769) {
            $(".breadcrumbs-crumbs").css('display', '');
        }
    });
});