$(document).ready(function() {
    // sidebar menu dropdown toggle
    $(".sidenav-dropdown-toggle").click(function (e) {
        e.preventDefault();
        
        var $item = $(this).parent();
        
        $item.toggleClass("is-active");
        
        if ($item.hasClass("is-active")) {
            $item.find(".sidenav-menu-sub").slideDown("fast");
        } else {
            $item.find(".sidenav-menu-sub").slideUp("fast");
        }
    });


    // mobile side-menu slide toggler
    var $menu = $(".sidenav");
    
    $("body").click(function () {
        if ($(this).hasClass("is-active")) {
            $(this).removeClass("is-active");
        }
    });
    
    $menu.click(function(e) {
        e.stopPropagation();
    });
    
    $(".sidenav-btn").click(function (e) {
        e.stopPropagation();
        $("body").toggleClass("is-active");
    });

});