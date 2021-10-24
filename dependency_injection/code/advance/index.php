<?php
require 'vendor/autoload.php';

use App\Container\Container;
use App\Components\SettingInterface;
use App\Components\Setting;
use App\Controllers\Customer;
use App\Controllers\Admin;

$container = new Container();
try {
    $container->bind(SettingInterface::class, Setting::class);

    /** @var Customer $customer */
    $customer = $container->make(Customer::class);

    /** @var Admin $admin */
    $admin = $container->make(Admin::class);

    $customer->setSetting('Setting from Customer');
    $admin->setSetting('Setting from Admin');

    echo $customer->getSetting() . "\n";
    echo $admin->getSetting() . "\n";
} catch (Exception $e) {
    var_dump($e->getMessage());
}