require.config({
    paths:{
        "jquery":"vendors/jquery",
        "underscore":"vendors/underscore",
        "backbone":"vendors/backbone",
        "bootstrap":"vendors/bootstrap",
        "toastr":"vendors/toastr"
    },
      shim: {
        jquery: {
            exports: '$'
        },
        underscore: {
            exports: '_'
        },
        bootstrap: {
            deps: ['jquery'],
            exports: 'Bootstrap'
        },
        toastr: {
            deps: ['jquery'],
            exports: 'toastr'
        },
        backbone: {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        }
    }
});

require(['main'], function(App){
});

require(['router','models','views','collections'],function(Router,Models,Views,Collections){

    new App.Router;
    Backbone.history.start();

    App.contacts = new App.Collections.Contacts;
    App.contacts.fetch().then( function() {
        new App.Views.App({ collection: App.contacts });
    });
});