define([
    'jquery',
    'underscore',
    'backbone',
    'modules/museu/model'
], function($, _, Backbone, MuseuModel){
    var MuseuCollection = Backbone.Collection.extend({
	model: MuseuModel,
	url: '/museusbr/museus/',
    });
    return MuseuCollection;
});