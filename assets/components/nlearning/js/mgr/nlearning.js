var nlearning = function (config) {
    config = config || {};
    nlearning.superclass.constructor.call(this, config);
};
Ext.extend(nlearning, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('nlearning', nlearning);

nlearning = new nlearning();