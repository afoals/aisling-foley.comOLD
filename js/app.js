var Main = {
    flags: {
        menu_opened: 0,
    },
    el: {
        menu_handler: $("#hamburger-box"),
        menu_holder: $("#menu-container"),
        hamburger: $("#hamburger-box .hamburger"),
        load_anim: $(".load-anim"),
    },
    init: function() {
        Main.el.load_anim.addClass('loaded');
        Main.el.menu_handler.click(function() {
            var right_count = 0;
            var animation = 'easeOutCirc';
            if (Main.flags.menu_opened == 1) {
                right_count = '-100%';
                animation = 'easeInCirc';
                Main.el.hamburger.toggleClass('rotated');
            }
            $(this).toggleClass('active');
            Main.el.menu_holder.stop(true, true).animate({
                right: right_count
            }, {
                duration: 550,
                easing: animation
            });
            if (Main.flags.menu_opened === 0) {
                setTimeout(function() {
                    Main.el.hamburger.toggleClass('rotated');
                }, 250);
            }
            Main.flags.menu_opened = Math.abs(Main.flags.menu_opened - 1);
        });
    },
};

$(window).load(function() {
    Main.init();
});
