<?php

require_once('AbstractAccount.php');
require_once('Setting.php');

class Admin extends AbstractAccount {
    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting)
    {
        echo "Admin::__construct \n";
        $this->setting = $setting;
    }
}