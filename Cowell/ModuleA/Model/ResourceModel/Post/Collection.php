<?php
declare(strict_types=1);

namespace Cowell\ModuleA\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Cowell\ModuleA\Model\Post::class,
            \Cowell\ModuleA\Model\ResourceModel\Post::class
        );
    }
}
