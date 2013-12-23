define(['jquery','underscore','backbone','bootstrap','toastr'],function($,_,Backbone,Bootstrap,toastr){
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

        if (typeof msgs != 'undefined') {
            var errors = msgs;
            
           $.each(msgs, function(key, value) {
                console.log(key, value[0]);
                toastr.error(value[0]);
            });            
        }

        $('.form-control').tooltip();
    })();
});