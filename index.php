<?php

require_once 'vendor/autoload.php';

date_default_timezone_set("America/Sao_Paulo");

use Lukas\Autoservices\Bot\Bot;
use Lukas\Autoservices\Bot\Message;


$botChat = new Bot(TOKEN);

$message = Message::setMessage("Lucas", "125484", "Mobi", "Chapeação", date('d/m/Y H:i'));

$botChat->sendMessage($message);

echo $arrMarcas[1];