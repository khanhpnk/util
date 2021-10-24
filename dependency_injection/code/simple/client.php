<?php
require_once('Container.php');
require_once('Admin.php');
require_once('Customer.php');

$container = new Container();
try {
    /** @var Customer $customer */
    $customer = $container->make('Customer');
    $customer->setSetting('set from customer');

    /** @var Admin $admin */
    $admin = $container->make('Admin');
    $admin->setSetting('set from admin');

    echo $customer->getSetting() . "\n";
    echo $admin->getSetting() . "\n";
} catch (Exception $e) {

}

