<?php

$commands = require_once __DIR__ . '/../Commands.php';

$body = file_get_contents('php://input');

$arr = json_decode($body, true);

$chatId = $arr['message']['chat']['id'];

$message = $arr['message'];

if ($message['text'] == '/help') {
    require_once __DIR__ . '/../commands/HelpCommand.php';
    $obj = new HelpCommand($chatId, $commands);
    $obj->start();
    exit('ok');
} else if ($commands[$arr['message']['text']]) {
    $value = $commands[$arr['message']['text']];
    require_once __DIR__ . '/../commands/' . $value['class'] . 'Command.php';
    $str = $value['class'].'Command';
    $obj = $str($chatId);
    $obj->start();
    exit('ok');
} else {
    require_once __DIR__ . '/../commands/ErrorCommand.php';
    $obj = new ErrorCommand($chatId, $message);
    $obj->start();
    exit('ok');
}
