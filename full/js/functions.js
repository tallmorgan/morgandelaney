jQuery(function () {
    var $ = jQuery;

    function init() {
        animateHero();
        animateBody();
    }

    function animateHero() {
        var current_id = 0,
            throttle = 0,
            throttle_step = 300; // Break up when the images actually appear, just a bit

        $('#home-welcome').find('.media .medium').each(function () {
            var $this = $(this),
                bg = $(this).css('background-image'),
                matches = bg.match(/\((.*)\)/);

            if (matches) {
                var id = 'hero-' + current_id;
                var $img = $('<img />', {src: matches[1].replace(/"/g, ''), id: id}).appendTo('body');

                imagesLoaded(id, function () {
                    $img.remove();
                    setTimeout(function () {
                        $this.removeClass('hide');
                    }, throttle);
                    throttle += throttle_step;
                });

                current_id++;
            }
        });
    }

    function animateBody() {
        if ($('#home-help').find('.theme-title').offset().top)
            evdAnimate.left_to_right('#home-help', '.has-animation', 250);
        evdAnimate.left_to_right('#home-portfolio', '.has-animation', 200);
    }

    init();
});