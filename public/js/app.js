require.config({
    paths:{
        "jquery":"vendors/jquery",
        "underscore":"vendors/underscore",
        "backbone":"vendors/backbone",
        "bootstrap":"vendors/bootstrap",
    }
});

require(['main'], function(App){
});

require(['router','models','views','collections'],function(Router,Models,Views,Collections){

    console.log( "App", App );
    new App.Router;
    Backbone.history.start();

    App.contacts = new App.Collections.Contacts;
    App.contacts.fetch().then( function() {
        new App.Views.App({ collection: App.contacts });
    });
});