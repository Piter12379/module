<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class presta_link extends Module
{
    public function __construct()
    {
        $this->name = 'presta_link';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Piotr';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('PrestaShop modul');
        $this->description = $this->l('Wyświetla na stronie link.');

        $this->confirmUninstall = $this->l('Jesteś pewien, że chcesz odinstalować?');
    }

    public function install()
        {
            if (!parent::install()
                || !$this->registerHook('displayHome')
            ) {
                return false;
            }
            return true;
        }

        public function uninstall()
        {
            return parent::uninstall();
        }

        public function hookDisplayHome($params)
       {
           return '<a href="http://paluchowskipiotr.cba.pl/biblioteka/index.php</a>';
       }
  }
