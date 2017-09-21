nlearning.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'nlearning-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('nlearning_items'),
                layout: 'anchor',
                items: [{
                    html: _('nlearning_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'nlearning-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    nlearning.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(nlearning.panel.Home, MODx.Panel);
Ext.reg('nlearning-panel-home', nlearning.panel.Home);
