<?php

require_once 'Telegram.php';

class Command
{

    protected $id;
    private $api;

    protected function __construct($id)
    {
        $this->id = $id;
        $this->api = new Telegram('-');
    }

    protected function sendText($text)
    {
        $this->api->send($this->id,$text,'none');
    }

    protected function sendHtml($text)
    {
        $this->api->send($this->id,$text,'HTML');
    }
}
