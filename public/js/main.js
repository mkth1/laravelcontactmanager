define(['jquery','underscore','backbone','bootstrap'],function($,_,Backbone,Bootstrap){
    (function() {
        window.App = {
            Models: {},
            Views: {},
            Collections: {},
            Router: {}
        };

        window.vent = _.extend({}, Backbone.Events);

        window.template = function(id){
            //if( typeof id !== "undefined" )return _.template( $('#'+id).html() );
        };
        
        $('.form-control').tooltip();
    })();
});