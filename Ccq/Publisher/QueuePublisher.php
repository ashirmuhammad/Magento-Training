<?php
declare(strict_types=1);

namespace RLTSquare\Ccq\Publisher;

use Magento\Framework\MessageQueue\PublisherInterface;

class QueuePublisher
{
    const TOPIC_NAME = "rltsquare";

    /**
     * @var PublisherInterface
     */
    private PublisherInterface $publisher;

    public function __construct(
        PublisherInterface $publisher
    ) {
        $this->publisher = $publisher;
    }

    /**
     * @param $message
     * @return mixed|null
     */
    public function publish($message)
    {
        return $this->publisher->publish(self::TOPIC_NAME, $message);
    }
}
