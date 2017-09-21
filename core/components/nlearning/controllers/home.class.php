<?php

/**
 * The home manager controller for nlearning.
 *
 */
class nlearningHomeManagerController extends modExtraManagerController
{
    /** @var nlearning $nlearning */
    public $nlearning;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('nlearning_core_path', null,
                $this->modx->getOption('core_path') . 'components/nlearning/') . 'model/nlearning/';
        $this->nlearning = $this->modx->getService('nlearning', 'nlearning', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('nlearning:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('nlearning');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->nlearning->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->nlearning->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/nlearning.js');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->nlearning->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        nlearning.config = ' . json_encode($this->nlearning->config) . ';
        nlearning.config.connector_url = "' . $this->nlearning->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "nlearning-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->nlearning->config['templatesPath'] . 'home.tpl';
    }
}