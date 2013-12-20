define(['jquery','underscore','backbone'],function($,_,Backbone){
    (function() {
        window.App = {
            Models: {},
            Views: {},
            Collections: {},
            Router: {}
        };

        window.vent = _.extend({}, Backbone.Events);

        window.template = function(id){
            return _.template( $('#'+id).html() );
        };
    })();
});