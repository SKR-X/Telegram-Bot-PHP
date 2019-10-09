<?php

require_once __DIR__ . '/../core/Command.php';


class HelpCommand extends Command
{

    private $array;

    public function __construct($id, $array)
    {
        $this->array = $array;
        parent::__construct($id);
    }

    public function start()
    {
        $html = '';
        foreach ($this->array as $key => $value) {
            $html = $html . $key . ' - <b>' . $value['descr'] . '</b>'.PHP_EOL;
        }

        $text = '<b>Список команд:</b>'.PHP_EOL.$html;

        $this->sendHtml($text);
    }
}
