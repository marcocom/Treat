/**
 * Created with JetBrains PhpStorm.
 * User: marcocom
 * Date: 23-04-13
 * Time: 02:08
 * To change this template use File | Settings | File Templates.
 */
(function($, $t){

    $t.Page = Class.extend({
        _construct : function(el) {
            this._el = $(el);

        }

    });
    $.extend($t.Page,
        {	// associate element class to Page for auto initialization
            _selectors : {},
            _extend : $t.Page.extend,
            extend : function(prop, selector) {
                var klass = $t.Page._extend(prop);
                if (typeof selector == 'string')
                    $t.Page._selectors[selector] = klass;
                return klass;
            },
            Init : function() {
                //$t.Page._selectors;
                $.each($t.Page._selectors,
                    function(selector, klass) {
                        $(selector).each(function() {
                            var i = new klass(this);
                            $(this).data(selector, i);
                        });
                    });
            }
        }
    );

    $t.Landing = $t.Page.extend({
        _construct : function(el) {
//            this._submit = $('#sign-in-button');
//            this._postUrl = '/login';
            this._super($(el));
            $log("LANDING init");
            var articleimg = '<div><img src="img/review/glamour.jpg" /></div>';
            $("#blob").popover({ title: 'Glamour article', content:articleimg, html:true });
            $('.flexslider').flexslider({
                animation: "slide",

                easing: "swing",                //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
                direction: "vertical",        //String: Select the sliding direction, "horizontal" or "vertical"


                smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode

                slideshow: true,                //Boolean: Animate slider automatically
                slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
                animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds

                randomize: false,               //Boolean: Randomize slide order
                thumbCaptions: false,           //Boolean: Whether or not to put captions on thumbnails when using the "thumbnails" controlNav.

                // Usability features
                pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
                pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
                pauseInvisible: true,   		//{NEW} Boolean: Pause the slideshow when tab is invisible, resume when visible. Provides better UX, lower CPU usage.
                useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
                touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
                video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

                // Primary Controls
                controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
                prevText: "Previous",           //String: Set the text for the "previous" directionNav item
                nextText: "Next",               //String: Set the text for the "next" directionNav item

                // Secondary Navigation
                keyboard: false,                 //Boolean: Allow slider navigating via keyboard left/right keys

                mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel

                // Special properties
                controlsContainer: "",          //{UPDATED} jQuery Object/Selector: Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be $(".flexslider-container"). Property is ignored if given element is not found.
                manualControls: "",             //{UPDATED} jQuery Object/Selector: Declare custom control navigation. Examples would be $(".flex-control-nav li") or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
                sync: "",                       //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
                asNavFor: "",                   //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider

                // Carousel Options
                itemWidth: 0,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
                itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
                minItems: 1,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
                maxItems: 0,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
                move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
                allowOneSlide: true           //{NEW} Boolean: Whether or not to allow a slider comprised of a single slide

            });

            $(".fancybox.article1").fancybox({
            href : '/img/reviews/glamour.jpg',
            title : 'Glamour',
            helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
            $(".fancybox-video").click(function() {
                $.fancybox({

                    padding: 0,
                    'autoScale'     : false,
                    'transitionIn'  : 'none',
                    'transitionOut' : 'none',
                    'title'         : this.title,
                    'width'         : 795,
                    'height'        : 447,
                    'href'          : this.href.replace(new RegExp("watch.*v=","i"), "v/"),
                    'type'          : 'swf',
                    'swf'           : {
                        'wmode'             : 'transparent',
                        'allowfullscreen'   : 'true'
                    }

                });
                return false;
            });

            /* Smooth Page Scroll
             --------------------------------------------------*/

            $("#topnav .nav li a").click(function () {
                var full_url = this.href;
                var parts = full_url.split("#");
                var trgt = parts[1];
                var target_offset = $("#" + trgt).offset();
                var target_top = target_offset.top;
                $('html, body').animate({
                    scrollTop: target_top
                }, 400);
                return false;
            });

        },
        scrollIntoView : function(element, container)
        {
            var containerTop = $(container).scrollTop();
            var containerBottom = containerTop + $(container).height();
            var elemTop = element.offsetTop + 170;
            var elemBottom = elemTop + $(element).height();

            if (elemTop < containerTop)
            {
                $(container).scrollTop(elemTop - 170);
            }
            else if (elemBottom > containerBottom)
            {
                $(container).scrollTop(elemBottom - $(container).height());
            }
        }
    });

    $t.Page.Init();

    if($('.home-content').length > 0) this.landingContent = new $t.Landing('.home-content');
})(jQuery, Treat);
