<?php
f (!defined('_PS_VERSION_')) {
    exit;
}
 
class ModuleDemo extends Module
{
 
    public function __construct()
    {
        $this->name = 'moduledemo';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'jordan';
        $this->need_instance = 0;
 
        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;
 
        parent::__construct();
 
        $this->displayName = $this->l('Module Demo');
        $this->description = $this->l('Juste un demo');
    }
    public function install()
    {
        if (!parent::install() OR !$this->registerHook('displayLeftColumn'))
            return false;
        return true;
    }
 
    public function hookDisplayLeftColumn($params)
    {
        return 'hello world';
    }
 
}
?>