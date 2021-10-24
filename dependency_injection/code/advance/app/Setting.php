<?php

namespace App;

class Setting
{
    /**
     * @var string
     */
    private string $setting;

    public function __construct()
    {
        echo "Setting::__construct \n";
    }

    /**
     * @return string
     */
    public function getSetting(): string
    {
        return $this->setting;
    }

    /**
     * @param string $setting
     */
    public function setSetting(string $setting): void
    {
        $this->setting = $setting;
    }
}