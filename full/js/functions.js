jQuery(function () {
    /**
     * jQuery shortcut
     */
    var $ = jQuery;

    /**
     * We'll be updating viewport dynamically
     */
    var viewport = $('meta[name="viewport"]');
    var viewportContent = viewport.attr('content');

    /**
     * Constructor
     */
    function init() {
        animateHero();
        animateBody();
        bindViewport();
    }

    /**
     * Immediately animate in hero devices
     */
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

    /**
     * Animate content in on scroll
     */
    function animateBody() {
        if ($('#home-help').find('.theme-title').offset().top)
            evdAnimate.left_to_right('#home-help', '.has-animation', 250);
        evdAnimate.left_to_right('#home-portfolio', '.has-animation', 200);
    }

    /**
     * Update viewport on window resize
     */
    function bindViewport() {
        $(window).on('resize', $updateViewport);
        $updateViewport();
    }

    /**
     * Provide the same experience for all mobile devices
     */
    function $updateViewport() {
        var newContent = 'width=' + ($(window).width() <= 1024 ? '640' : 'device-width');

        if (newContent !== viewportContent) {
            viewportContent = newContent;
            viewport.attr('content', newContent);
        }
    }

    init();
});