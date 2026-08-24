opendxp.registerNS("opendxp.plugin.RelationSelectFieldsBundle");

opendxp.plugin.RelationSelectFieldsBundle = Class.create(opendxp.plugin.admin, {
    getClassName: function () {
        return "opendxp.plugin.RelationSelectFieldsBundle";
    },

    initialize: function () {
        opendxp.plugin.broker.registerPlugin(this);
    },

    opendxpReady: function (params, broker) {
        // alert("RelationSelectFieldsBundle ready!");
    }
});

var RelationSelectFieldsBundlePlugin = new opendxp.plugin.RelationSelectFieldsBundle();
