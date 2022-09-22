<?php

require_once "Motor.php";
require_once "Bengkel.php";

class Suzuki extends Motor implements Bengkel
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
        return "SGO 4T \n";
    }
}