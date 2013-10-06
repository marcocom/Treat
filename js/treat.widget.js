/**
 * Created with JetBrains PhpStorm.
 * User: marcocom
 * Date: 23-04-13
 * Time: 02:08
 * To change this template use File | Settings | File Templates.
 */
(function($, $t) {

    $t.Widget = Class.extend({
        _construct : function(el) {
            this._el = $(el);
        }
    });
    $.extend($t.Widget,
        {	// associate element class to widget for auto initialization
            _selectors : {},
            _extend : $t.Widget.extend,
            extend : function(prop, selector) {
                var klass = $t.Widget._extend(prop);
                if (typeof selector == 'string')
                    $t.Widget._selectors[selector] = klass;
                return klass;
            },
            Init : function() {
                //$t.Widget._selectors;
                $.each($t.Widget._selectors,
                    function(selector, klass) {
                        $(selector).each(function() {
                            var i = new klass(this);
                            $(this).data(selector, i);
                        });
                    });
            }
        }
    );

    $t.Login = Treat.Popup.extend({
        _construct : function() {
            this._submit = $('#sign-in-button');
            this._postUrl = '/login';
            this._submitFacebook = $('#sign-in').find('.button.facebook');
            this._submitFacebook.click(this.facebookRegister.bind(this));
            this._super($('#sign-in'));
        } ,
        submitSuccess : function(redirect) {
            if(redirect == "") {
                document.location.hash = "";
                this._super(redirect);
            }
            else
                window.location = redirect;
        },
        facebookRegister : function() {
            Treat.FacebookManager.tryLogin();
            this.hide();
        }
    });

    $t.Registration = Treat.Popup.extend({
        _construct : function() {
            this._submit = $('#create-account-button');
            this._postUrl = '/register';
            this._submitFacebook = $('#register').find('.button.facebook');
            this._submitFacebook.click(this.facebookRegister.bind(this));
            this._super($('#register'));

            //slug replacement
            this._el.find('#username').blur(function(){
                var slug = $(this).val().replace(/\s+/g, '-').replace(/[^a-zA-Z 0-9\-]+/g,'').toLowerCase();
                $(this).val(slug);
            });
        },
        submitSuccess : function(redirect) {
            if(redirect == "") {
                document.location.hash = "";
            }
        }
    });

    $t.Widget.Init();
})(jQuery, Treat);
