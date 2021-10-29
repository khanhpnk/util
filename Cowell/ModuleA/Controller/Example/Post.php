<?php
declare(strict_types=1);

namespace Cowell\ModuleA\Controller\Example;

use Cowell\ModuleA\Model\Post as PostModel;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Post implements HttpGetActionInterface
{
    /** @var PageFactory */
    private $pageFactory;

    /**
     * @var PostModel
     */
    private $post;

    /**
     * @param PageFactory $pageFactory
     * @param PostModel $post
     */
    public function __construct(
        PageFactory $pageFactory,
        PostModel $post
    ) {
        $this->pageFactory = $pageFactory;
        $this->post = $post;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        echo "<pre>";

        $collection = $this->post->getCollection();
        foreach($collection as $item){
            print_r($item->getData());
        }

        var_dump($this->post->getName());
        $this->post->setName('This name form Controller');
        var_dump($this->post->getName());

        echo "</pre>";

        return $this->pageFactory->create();
    }
}
