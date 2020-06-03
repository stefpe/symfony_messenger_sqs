<?php

namespace App\MessageHandler;

use App\Message\TestMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

/**
 * Class TestMessageHandler
 * @package App\MessageHandler
 */
class TestMessageHandler implements MessageHandlerInterface
{
    public function __invoke(TestMessage $message)
    {
        dump($message);
    }
}
