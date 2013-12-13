App.Models.Contact = Backbone.Model.extend({
	//validate at some point
	validate: function( attrs ) {

		if ( !attrs.first_name || !attrs.last_name ) return " First name and last name required";
		if ( !attrs.email_address ) return "Email is required";
	}
});