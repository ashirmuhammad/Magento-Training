<?php
declare(strict_types=1);

namespace RLTSquare\Ccq\Model\Queue\Handler;

use Psr\Log\LoggerInterface;

class Handler
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $message
     * @return void
     */
    public function execute($message): void
    {
        $this->logger->info($message);
    }
}
