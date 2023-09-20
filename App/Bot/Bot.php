<?php

namespace Lukas\Autoservices\Bot;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exception;

class Bot extends BotApiController
{

    private $botApi;
    private $bot;

    public function __construct($token)
    {
        /**
         * Instancia da api do bot para que seja possivel o envio da mensangem
         */
        $this->bot = new BotApi($token);

        $this->botApi = new BotApiController();
        $this->botApi->setChatId($token);
        
    }




    public function sendMessage($message)
    {
        try {
            $this->bot->sendMessage($this->botApi->getChatId(), $message);
        } catch (Exception $botEx) {
            $botEx->getMessage();
        }
    }
}