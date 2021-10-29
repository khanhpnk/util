<?php
declare(strict_types = 1);

namespace Cowell\CommandExample\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('example:command');
        $this->setDescription('Example Command');
        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $messageObject  = $objectManager->create('Cowell\Di\Model\Message');
        $message = $messageObject->getHelloMessage();

        $output->writeln($message);
    }
}
