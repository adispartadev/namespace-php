<?php

class GameCharacter
{
    public $name;
    public $position;
    public $speech;

    public function __construct($name, $position, $speech)
    {
        $this->name = $name;
        $this->position = $position;
        $this->speech = $speech;
    }

    public function move($distance)
    {
        echo "Karakter " . $this->name . " bergerak sejauh " . $distance . " satuan\n";
    }

    public function speak($message)
    {
        echo "Karakter " . $this->name . " mengucapkan: " . $message . "\n";
    }
}
