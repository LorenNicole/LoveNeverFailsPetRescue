(function(api) {

    api.sectionConstructor['kids-toys-store-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);