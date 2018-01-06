jQuery(document).ready(function () {

    // Hauptmenu Home Button Tracking
    jQuery("nav a.navbar-left").click(function (event) {
        if (typeof __gaTracker === "function") {
            __gaTracker('send', 'event', 'Hauptmenu Tracking', 'click', 'Home Button');
        }
    });

    // Hauptmenu Tracking
    jQuery("#menu-hauptmenu a").click(function (event) {
        if (typeof __gaTracker === "function") {
            var menuItem = jQuery.trim(event.target.text);
            __gaTracker('send', 'event', 'Hauptmenu Tracking', 'click', menuItem);
        }
    });
});