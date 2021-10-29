<?php
declare(strict_types=1);

namespace Cowell\ModuleA\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function sayHello()
    {
        return __('ModuleA: Say Hello');
    }
}
