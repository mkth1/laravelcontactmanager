define(['jquery','backbone','bootstrap'],function($, Backbone,Bootstrap){
	//console.log( "Jquery,Backbone", $,Backbone );
	/* All Contact View*/

	/*
	Global App View
	*/
	App.Views.App = Backbone.View.extend({
		initialize: function(){
			
			var allContactView = new App.Views.Contacts({ collection:App.contacts});
			$('#allContacts').append(allContactView.render().el);
		},
	});

	App.Views.Contacts = Backbone.View.extend({
		tagName: 'tbody',

		initialize: function(){
			this.collection.on('add',this.addOne,this);
		},

		render: function(){
			this.collection.each( this.addOne,this );
			return this;
		},

		addOne: function( contact ){
			var contactView = new App.Views.Contact({ model:contact});
			console.log( "contactView", contactView.render().el  );
			this.$el.append( contactView.render().el );
		}
	});

	App.Views.Contact = Backbone.View.extend({
		tagName:'tr',
		template: template('allContactTemplate'),

		initialize: function(){
			this.model.on('destroy',this.remove,this);
			this.model.on('change',this.render,this);
		},

		events:{
			'click a.delete':'deleteContact',
			'click a.edit':'editContact',
		},

		render: function(){
			this.$el.html( this.template(this.model.toJSON() ) );
			return this;
		},

		deleteContact: function(){
			this.model.destroy();
		},

		editContact: function(){
			vent.trigger('contact:edit',this.model);
			
		}
	});
});