<?php

namespace Cowell\ModuleA\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Cowell\ModuleA\Model\ResourceModel\Post');
    }
}
