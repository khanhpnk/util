<?php

abstract class AbstractAccount {
    /**
     * @var Setting
     */
    protected Setting $setting;

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