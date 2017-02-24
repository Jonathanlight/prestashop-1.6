<?php
/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class GenererLorem extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'GenererLorem';
        $this->tab = 'front_office_features';
        $this->version = '1.0.7';
        $this->author = 'Jonathan kablan';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('GenererLorem');
        $this->description = $this->l('lorem ipsum samj sauis ui ');
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('GENERERLOREM_LIVE_MODE', false);

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        Configuration::deleteByName('GENERERLOREM_LIVE_MODE');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitGenererLoremModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non dui vel arcu finibus efficitur eu ut eros. Ut blandit enim eu porta vulputate. Pellentesque volutpat, felis vitae tempor placerat, diam augue condimentum dolor, sit amet porttitor nisl dolor nec mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras et justo rhoncus, mollis est nec, dapibus libero. Praesent leo nunc, porttitor et lobortis sit amet, sollicitudin dignissim quam. Sed sollicitudin quam non nulla dapibus, eu volutpat metus rhoncus. In quis suscipit arcu, quis tincidunt elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque non commodo nisl, a mollis urna. In ornare ipsum ut tortor auctor feugiat.

Aliquam sapien mauris, maximus id posuere sit amet, maximus non enim. Pellentesque scelerisque sem nec mi tristique, id aliquam eros bibendum. Ut vel aliquam turpis. Vivamus gravida sapien massa, ac viverra nisl dictum non. Vivamus varius id lectus ac rutrum. Phasellus est neque, auctor non porta in, pulvinar eget turpis. Quisque commodo in nulla non scelerisque. Curabitur dignissim erat velit, pharetra ultricies eros feugiat ac. Mauris laoreet faucibus justo, ut varius erat porttitor ut. Nulla sit amet purus at mi laoreet efficitur id at orci. Proin id neque in augue viverra facilisis. Maecenas vitae erat metus. Fusce consectetur justo libero, id tincidunt odio pharetra venenatis. Maecenas vulputate urna in lorem facilisis, vitae euismod odio rhoncus.

Aliquam vel nisl at lacus sollicitudin blandit eu aliquam dui. Cras auctor, sem ac mollis vulputate, mauris dui vehicula eros, non venenatis sapien lacus sed ante. Pellentesque semper, orci ut posuere malesuada, orci velit ullamcorper leo, quis rutrum augue leo a lacus. Ut porta felis non faucibus ornare. Integer nec nibh eu ligula porttitor tristique. Curabitur placerat et lorem vel ullamcorper. Vestibulum sit amet tincidunt urna, eu sagittis enim. Proin ultrices dolor eros, eu volutpat eros molestie non. Proin condimentum, nunc a lacinia consequat, ante odio maximus urna, non vulputate libero velit at dui. Nullam non facilisis leo, sit amet lobortis tortor. Nam metus nisl, pulvinar sed libero et, vulputate interdum nisl. Donec et sapien mollis, ullamcorper sapien nec, egestas turpis. Donec in imperdiet urna, sit amet rutrum lorem.";

        return $lorem;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitGenererLoremModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'GENERERLOREM_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter a valid email address'),
                        'name' => 'GENERERLOREM_ACCOUNT_EMAIL',
                        'label' => $this->l('Email'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'GENERERLOREM_ACCOUNT_PASSWORD',
                        'label' => $this->l('Password'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'GENERERLOREM_LIVE_MODE' => Configuration::get('GENERERLOREM_LIVE_MODE', true),
            'GENERERLOREM_ACCOUNT_EMAIL' => Configuration::get('GENERERLOREM_ACCOUNT_EMAIL', 'contact@prestashop.com'),
            'GENERERLOREM_ACCOUNT_PASSWORD' => Configuration::get('GENERERLOREM_ACCOUNT_PASSWORD', null),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

    public function hookDisplayHome()
    {
        $lorem = "
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non dui vel arcu finibus efficitur eu ut eros. Ut blandit enim eu porta vulputate. Pellentesque volutpat, felis vitae tempor placerat, diam augue condimentum dolor, sit amet porttitor nisl dolor nec mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras et justo rhoncus, mollis est nec, dapibus libero. Praesent leo nunc, porttitor et lobortis sit amet, sollicitudin dignissim quam. Sed sollicitudin quam non nulla dapibus, eu volutpat metus rhoncus. In quis suscipit arcu, quis tincidunt elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque non commodo nisl, a mollis urna. In ornare ipsum ut tortor auctor feugiat.

Aliquam sapien mauris, maximus id posuere sit amet, maximus non enim. Pellentesque scelerisque sem nec mi tristique, id aliquam eros bibendum. Ut vel aliquam turpis. Vivamus gravida sapien massa, ac viverra nisl dictum non. Vivamus varius id lectus ac rutrum. Phasellus est neque, auctor non porta in, pulvinar eget turpis. Quisque commodo in nulla non scelerisque. Curabitur dignissim erat velit, pharetra ultricies eros feugiat ac. Mauris laoreet faucibus justo, ut varius erat porttitor ut. Nulla sit amet purus at mi laoreet efficitur id at orci. Proin id neque in augue viverra facilisis. Maecenas vitae erat metus. Fusce consectetur justo libero, id tincidunt odio pharetra venenatis. Maecenas vulputate urna in lorem facilisis, vitae euismod odio rhoncus.

Aliquam vel nisl at lacus sollicitudin blandit eu aliquam dui. Cras auctor, sem ac mollis vulputate, mauris dui vehicula eros, non venenatis sapien lacus sed ante. Pellentesque semper, orci ut posuere malesuada, orci velit ullamcorper leo, quis rutrum augue leo a lacus. Ut porta felis non faucibus ornare. Integer nec nibh eu ligula porttitor tristique. Curabitur placerat et lorem vel ullamcorper. Vestibulum sit amet tincidunt urna, eu sagittis enim. Proin ultrices dolor eros, eu volutpat eros molestie non. Proin condimentum, nunc a lacinia consequat, ante odio maximus urna, non vulputate libero velit at dui. Nullam non facilisis leo, sit amet lobortis tortor. Nam metus nisl, pulvinar sed libero et, vulputate interdum nisl. Donec et sapien mollis, ullamcorper sapien nec, egestas turpis. Donec in imperdiet urna, sit amet rutrum lorem.
";

        return $lorem;
    }
}
