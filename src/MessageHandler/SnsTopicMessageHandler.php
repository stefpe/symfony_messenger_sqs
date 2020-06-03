<?php

namespace App\MessageHandler;

use App\Message\TestMessage;
use Aws\Sns\SnsClient;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SnsTopicMessageHandler implements MessageHandlerInterface
{

    /**
     * @var SnsClient
     */
    private $snsClient;

    /**
     * @var string
     */
    private $topicArn;

    /**
     * SnsTopicMessageHandler constructor.
     * @param SnsClient $snsClient
     * @param string $topicArn
     */
    public function __construct(SnsClient $snsClient, string $topicArn)
    {
        $this->snsClient = $snsClient;
        $this->topicArn = $topicArn;
    }


    public function __invoke(TestMessage $message)
    {
        $this->snsClient->publish([
            'TopicArn' => $this->topicArn,
            'Message' => $message->getPayload(),
            'MessageStructure' => 'string'
        ]);
    }
}
