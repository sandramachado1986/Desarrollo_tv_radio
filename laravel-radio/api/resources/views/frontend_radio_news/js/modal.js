window.addEventListener('load', () => {
$(document).ready(function() {
    $(".abre_modal").click(function() {
        $("body").css("overflow", "hidden");
        var modal = $(this).data("modal");
        $(modal).fadeToggle(600);
    });

    $(".close").click(function(e) {
        var className = e.target.className;
        if (className === "modal" || className === "close") {
            $(".modal").fadeOut();
            $("body").css("overflow", "auto");
        }
    });
});


// Esc Key, hide menu.
$(document).keydown(function(e) {
    if (e.keyCode == 27) {
        $(".modal").fadeOut(300);

    }
});

$(document).keydown(function(e) {
    if (e.keyCode == 8) {
        $(".modal").fadeOut(300);
    }
});

$(window).bind('hashchange', function() {

    if (location.hash == null || location.hash == "") {
        $(".modal").hide();
    }

});



}, false);