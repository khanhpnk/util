<?php

namespace App\Controllers;

use App\Components\SettingInterface;

class Customer
{
    /**
     * @var SettingInterface
     */
    private SettingInterface $setting;

    /**
     * @param SettingInterface $setting
     */
    public function __construct(SettingInterface $setting)
    {
        echo "Customer::__construct \n";
        $this->setting = $setting;
    }

    /**
     * @return string
     */
    public function getSetting(): string
    {
        return $this->setting->getSetting();
    }

    /**
     * @param string $setting
     */
    public function setSetting(string $setting): void
    {
        $this->setting->setSetting($setting);
    }
}