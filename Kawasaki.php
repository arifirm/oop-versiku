<?php

require_once "Motor.php";
require_once "Bengkel.php";

class Kawasaki extends Motor implements Bengkel
{
    public function __construct($tipe)
    {
        $this->merk = get_class($this);
        $this->tipe = $tipe;
    }

    public function bahanBakar() {
        return "Bensin \n";
    }

    public function oli() {
        return "Genuine Oil \n";
    }
}