<?php

require_once __DIR__.'/../core/Command.php';


class ErrorCommand extends Command
{   

    private $message;

    public function __construct($id,$message) 
    {
        $this->message = $message['text'];
        parent::__construct($id);
    }

    public function start()
    {
        $this->sendText('Комманды "'.$this->message.'" не существует! Введите /help для вывода списка команд.');
    }
}
