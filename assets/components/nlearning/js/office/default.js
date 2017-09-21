Ext.onReady(function () {
    nlearning.config.connector_url = OfficeConfig.actionUrl;

    var grid = new nlearning.panel.Home();
    grid.render('office-nlearning-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});