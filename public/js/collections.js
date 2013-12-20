define(['backbone'],function(Backbone){
	App.Collections.Contacts = Backbone.Collection.extend({
		model: App.Models.Contact,
		url: '/contacts'
	});
});


