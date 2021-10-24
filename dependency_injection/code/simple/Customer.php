<?php

require_once('Setting.php');

class Customer
{
    /**
     * @var Setting
     */
    private Setting $setting;

    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting)
    {
        echo "Customer::__construct \n";
        $this->setting = $setting;
    }
}