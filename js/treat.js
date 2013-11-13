/**
 * Created with JetBrains PhpStorm.
 * User: marcocom
 * Date: 13-04-13
 * Time: 0q:08
 * To change this template use File | Settings | File Templates.
 */

(function($) {

    var $t = Treat = {

        resetpassword : null,
        playboard : null,
        isUserLoggedIn : false,
        contentManagementSysURL:"",
        _uid : 0,
        isiPad : (navigator.userAgent.match(/iPad/i) != null),
        isIE : ("v" == "\v"),
        welcomeContent:null,
        rankingContent:null,
        teamContent:null,
        registerContent:null,
        howContent:null,
        landingContent:null,
        teamregisterContent:null,
        rewardsContent:null,
        googleAccount:"UA-10058232-10",

        init: function(cmsUrl,projectHash, isLoggedIn) {
            if ($.support.touch) $('body').addClass('ipad-iphone');

            this.contentManagementSysURL = cmsUrl;
            this.isUserLoggedIn = isLoggedIn;
            this.setupEventManager();
            $log("QUINCE:INIT cms:"+cmsUrl);
        },
        animationHelper: function(from, to, options) {
            $('<div />')
                .css({position: 'absolute', left: from})
                .animate({left: to}, options);
        },
        bindToDocument: function(event,callback) {
            if(!document[event+'_callbacks']) document[event+'_callbacks']=[];
            document[event+'_callbacks'].push(callback);
            if(!document[event+'_registered']) {
                $(document).bind(event,this.handleDocumentEvent.bind(this,event));
                document[event+'_registered']=true;
            }
        },
        handleDocumentEvent: function(e,event){
            var callbacks = document[event+'_callbacks'];
            $(callbacks).each(function(index){callbacks[index]();})
        },
        setupEventManager : function() {
            this.eventManager = new Treat.Event();
        },
        fireHashEvents :function() {
            var name = document.location.hash.toString().replace('#','');
            this._getPopup(name);
            Treat.eventManager.fireEvent(Treat.Event.SHOWPOPUP,name);
        },
        _popups : {},
        _currentPopup : null,
        popup : function(t,name) {
            //$log('open popup: '+name);
            var popup = this._getPopup(name);
            if(popup != null) {
                popup.show(name);
                this._currentPopup = name;
            }
        },
        _getPopup : function(name) {
            var popup = this._popups[name];
            if (popup == null) {

                switch(name) {
                    case 'register':
                        popup = new Treat.Registration();
                        break;
                    case 'sign-in':
                        popup = new Treat.Login();
                        break;
                }
                this._popups[name] = popup;
            }
            return popup;
        }

    };

    Treat.Form = Class.extend({
        _construct : function(submit, form, settings, clickAction) {
            this.submit = submit;
            this.form = form;

            //quick fix for now, we need to refactor all pup-up to make the button <submit> instead of <button>
            if(this.submit[0].tagName.toLowerCase() == "input")
                this.submit.click(clickAction);
            else
                this.form.submit(clickAction);


        },
        clear : function() {
            this.form[0].reset();
            this.form.find('.field-validation div').hide();
        },
        valid : function() {

        },
        serialize : function() {

        },
        getResult : function(result) {
            return result;
        }
    });

    Treat.Popup = Class.extend({
        _construct : function(el) {
            //this.api.onClose = this.overlayClose.bind(this);

            Treat.eventManager.addEventHandler(Treat.Event.SHOWPOPUP,this.show.bind(this));

            this._el = el;
            this._type = el.attr('id');
            this._form = new Treat.Form(this._submit,this._el.find('div.form form'), null, this.formClick.bind(this));
            el.find('a.close').click(this.hide.bind(this));
        },

        //disable this for now
        overlayClose : function() {
            document.location.hash = "";
        },

        hide : function() {
            this.hide();
        },
        show : function(type) {
            if(type != this._type)
                return;

            if (this.isOpened()) {
                this.hide();
                setTimeout(this.__show.bind(this,type), 300);
            } else this.__show();
        },
        __show : function() {
            this.show();
        }

    });
    
    Treat.Event = Class.extend({
        _construct : function() {
            this.__event = {};
        },
        addEventHandler : function(event, func) {
            if (!this.__event[event]) this.__event[event] = new Array();
            if ($.inArray(func, this.__event[event]) < 0) this.__event[event].push(func);
            return this;
        },
        removeEventHandler : function(event, func) {
            var i = $.inArray(func, this.__event[event]);
            if (i >= 0) this.__event[event].splice(i, 1);
            return this;
        },
        removeEventHandlers : function(event) {
            this.__event[event].length = 0;
            return this;
        },
        fireEvent : function(event) {
            if (this.__event[event]) {
                if (1 < arguments.length) {
                    var $arguments = Array.prototype.slice.call(arguments, 1);
                    $arguments.push(event);
                    for(i=0;i<this.__event[event].length;i++) {
                        this.__event[event][i].apply(this, $arguments);
                    }
                } else {
                    for(i=0;i<this.__event[event].length;i++) {
                        this.__event[event][i](event);
                    }
                }
            }
        }
    });

    Treat.EventManager = new Treat.Event();
    Treat.Event.SHOWPOPUP = 'SHOWPOPUP';
    Treat.Event.PAGECHANGE = "PAGECHANGE";
    Treat.Event.DISCLAIMER = "DISCLAIMER";
    Treat.Event.CURRENTPAGE = "CURRENTPAGE";

    this.Treat = Treat;

})(jQuery);
Treat.init("http://www.treat-amsterdam.com/cms", "234234234234", false);