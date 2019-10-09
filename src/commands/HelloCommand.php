<?php

require_once __DIR__.'/../core/Command.php';


class HelloCommand extends Command
{

    public function __construct($id) 
    {
        parent::__construct($id);
    }

    public function start()
    {
        $this->sendText('Hello');
    }
}
