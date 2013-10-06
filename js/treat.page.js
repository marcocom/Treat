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
