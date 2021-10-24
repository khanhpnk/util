<?php
require_once('Container.php');
require_once('Customer.php');

$container = new Container();
try {
    /** @var Customer $customer */
    $customer = $container->make('Customer');
} catch (Exception $e) {

}

