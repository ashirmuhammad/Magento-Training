<?php
declare(strict_types=1);

namespace RLTSquare\Ccq\Console\Command;

use Magento\Framework\Serialize\Serializer\Json;
use RLTSquare\Ccq\Publisher\QueuePublisher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandTesting extends Command
{
    private const VAR1 = 'hello';
    private const VAR2 = 'world';

    /**
     * @var QueuePublisher
     */
    private QueuePublisher $publisher;

    private Json $json;

    public function __construct(QueuePublisher $publisher, Json $json, $name = null)
    {
        $this->publisher = $publisher;
        $this->json = $json;
        parent::__construct($name);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $hello = $input->getArgument(self::VAR1);
        $world = $input->getArgument(self::VAR2);
        $outputMessage = $this->json->serialize(["var1" => $hello, "var2" => $world]);
        $this->publisher->publish($outputMessage);
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName("rltsquare:hello:world");
        $this->setDescription("rltsquare hello world command.");
        $this->setDefinition([
            new InputArgument(self::VAR1, InputArgument::OPTIONAL, "Hello"),
            new InputArgument(self::VAR2, InputArgument::OPTIONAL, "World"),
        ]);
        parent::configure();
    }
}
