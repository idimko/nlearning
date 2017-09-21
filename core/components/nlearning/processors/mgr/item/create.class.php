<?php

class nlearningItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'nlearningItem';
    public $classKey = 'nlearningItem';
    public $languageTopics = array('nlearning');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('nlearning_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('nlearning_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'nlearningItemCreateProcessor';