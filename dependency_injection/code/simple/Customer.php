<?php

require_once('AbstractAccount.php');
require_once('Setting.php');

class Customer extends AbstractAccount {
    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting)
    {
        echo "Customer::__construct \n";
        $this->setting = $setting;
    }
}