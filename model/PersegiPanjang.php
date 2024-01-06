<?php 

namespace BaliDwipa\Model;

class PersegiPanjang
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar   = $lebar;
    }

    public function luas()
    {
        echo "Luasnya Persegi Panjang " . $this->panjang * $this->lebar;
    }

    public function keliling()
    {
        echo "Keliling Persegi Panjang " . ($this->lebar + $this->panjang ) *2;
    }
}