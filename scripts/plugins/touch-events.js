(function($) {
    $(document).ready(function() {
        // Left Swipe
        $(document).hammer().on('swipeleft', function(event) {
            event.preventDefault();
            event.stopPropagation();
            if ($('html').hasClass('sb-active-left')) {
                // The left Slidebar is open, close it.
                swipebars.close();
            } else if ($('html').hasClass('sb-active-right')) {
                // The right Slidebar is open, do nothing.
            } else {
                // No Slidebar is open, open the right.
                swipebars.open('right');
            }
        });

        // Right Swipe
        $(document).hammer().on('swiperight', function(event) {
            event.preventDefault();
            event.stopPropagation();
            if ($('html').hasClass('sb-active-left')) {
                // The left Slidebar is open, do nothing.
            } else if ($('html').hasClass('sb-active-right')) {
                // The right Slidebar is open, close it.
                swipebars.close();
            } else {
                // No Slidebar is open, open the right.
                swipebars.open('left');
            }
        });

        // Tap to Close
        $('#sb-site').hammer().on('tap', function(event) {
            if ($('html').hasClass('sb-active-left') || $('html').hasClass('sb-active-right')) {
                event.preventDefault();
                event.stopPropagation();
                swipebars.close();
            }
        });
    });
}) (jQuery);