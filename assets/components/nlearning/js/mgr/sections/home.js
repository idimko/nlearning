nlearning.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'nlearning-panel-home',
            renderTo: 'nlearning-panel-home-div'
        }]
    });
    nlearning.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(nlearning.page.Home, MODx.Component);
Ext.reg('nlearning-page-home', nlearning.page.Home);