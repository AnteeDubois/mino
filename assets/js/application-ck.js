function addLoadEvent(e) {
    var t = window.onload;
    typeof window.onload != "function" ? window.onload = e : window.onload = function() {
        t && t();
        e();
    };
}

addLoadEvent(function() {
    prettyPrint();
});

$(".slider").bxSlider({
    infiniteLoop: !1
});