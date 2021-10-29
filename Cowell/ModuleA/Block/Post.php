<?php
declare(strict_types=1);

namespace Cowell\ModuleA\Block;

use Cowell\ModuleA\Model\Post as PostModel;
use Magento\Framework\View\Element\Template;

class Post extends Template
{
    /**
     * @var PostModel
     */
    private $post;

    public function __construct(
        Template\Context $context,
        PostModel $post,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $this->post = $post;
    }

    public function getCollection()
    {
        $collection = $this->post->getCollection();
        return $collection;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->post->getName();
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->post->setName($name);
    }
}
