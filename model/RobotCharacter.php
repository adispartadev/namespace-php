<?php 

class RobotCharacter extends GameCharacter
{
    public $batteryLevel;

    public function __construct($name, $position, $speech, $batteryLevel)
    {
        parent::__construct($name, $position, $speech);
        $this->batteryLevel = $batteryLevel;
    }

    public function move($distance)
    {
        echo "Robot " . $this->name . " bergerak menggunakan roda sejauh " . $distance . " satuan\n";
    }

    public function speak($message)
    {
        echo "Robot " . $this->name . " menyampaikan pesan secara digital: " . $message . "\n";
    }
}