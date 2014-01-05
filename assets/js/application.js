function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload !== 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            if (oldonload) {
                oldonload();
            }
            func();
        }
    }
}
addLoadEvent(function() {
    prettyPrint();
});

$('.slider').bxSlider({
    nextText: '<i class="icon icon-chevron-right"></i>',
    prevText: '<i class="icon icon-chevron-left"></i>'
});